<?php

namespace App\Action;

use App\Models\Product;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class CreateProduct
{
    public function handle(array $userData,UploadedFile $file,$userId)
    {
        //generate file hash
        $fileHash = hash_file('sha256',$file->getRealPath());

        //check for duplicates
        if (Product::where('user_id',$userId)->where('file_hash',$fileHash)->exists())
        {
            throw ValidationException::withMessages([
                'file' => 'File already exists.',
            ]);
        }

        //store file in private disk
        $path = $file->store('product/' . Str::uuid(),'local');

        //create product
        return Product::create([
            'name' => $userData['name'],
            'description' => $userData['description'],
            'usage'=>$userData['usage'],
            'active'=>$userData['active'] ?? true,
            'price'=>$userData['price'],
            'file_path'=>$path,
            'file_hash'=>$fileHash,
            'file_size'=>$file->getSize(),
            'user_id'=>$userId,
        ]);
    }
}
