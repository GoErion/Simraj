<?php

namespace App\Http\Controllers\Auth;

use App\Action\CreateUser;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public function create(): View
    {
        return view('auth.register');
    }

    public function store(RegisterRequest $request, CreateUser $createUser): RedirectResponse
    {
        $validated = $request->validated();

        $user = $createUser->handle($validated);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('product.index', absolute: false));
    }
}
