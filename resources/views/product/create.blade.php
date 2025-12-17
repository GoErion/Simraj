<x-app>
    <div class="pt-20">
        <div class="flex items-center justify-center">
            <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="name" class="block">Product Name</label>
                    <div class="mt-2 mb-2">
                        <input type="text" name="name" id="name" class="block w-full bg-transparent border border-slate-400 rounded-lg px-8 py-2 @error('name') border-red-600 ring-1 ring-red-600 @enderror" placeholder="Product Name">
                        @error('name')
                        <span class="text-red-600">
                        {{ $message }}
                    </span>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="description" class="block">Description</label>
                    <div class="mt-2 mb-2">
                        <input type="text" name="description" id="description" class="block w-full bg-transparent border border-slate-400 rounded-lg px-8 py-2 @error('description') border-red-600 ring-1 ring-red-600 @enderror" placeholder="Description">
                        @error('description')
                        <span class="text-red-600">
                        {{ $message }}
                    </span>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="usage" class="block">Usage</label>
                    <div class="mt-2 mb-2">
                        <textarea name="usage" id="usage" cols="30" rows="3" class="block w-full bg-transparent border border-slate-400 rounded-lg px-8 py-2 @error('usage') border-red-600 ring-1 ring-red-600 @enderror" placeholder="Usage"></textarea>
                        @error('usage')
                        <span class="text-red-600">
                        {{ $message }}
                    </span>
                        @enderror
                    </div>
                </div>
                <div>
                        <label for="active" class="block">Status</label>
                        <select name="active" id="active" class="mt-2 mb-2 block w-full bg-transparent border border-slate-400 rounded-lg px-8 py-2">
                            @foreach(\App\Enum\StatusEnum::cases() as $status)
                                <option value="{{ $status->value }}">{{ $status->label() }}</option>
                                <option value="{{ $status->value }}">{{ $status->label() }}</option>
                            @endforeach
                        </select>
                </div>
                <div>
                    <label for="price" class="block">Price</label>
                    <div class="mt-2 mb-2">
                        <input type="text" name="price" id="price" class="block w-full bg-transparent border border-slate-400 rounded-lg px-8 py-2 @error('price') border-red-600 ring-1 ring-red-600 @enderror" placeholder="$ 0.00">
                        @error('price')
                        <span class="text-red-600">
                        {{ $message }}
                    </span>
                        @enderror
                    </div>
                </div>
                <div class="mt-2 mb-4">
                    <label class="block mb-2.5 text-sm font-medium text-heading" for="file">File</label>
                    <input name="file" id="file" class="cursor-pointer block w-full bg-transparent border border-slate-400 rounded-lg px-8 py-2 @error('file') border-red-600 ring-1 ring-red-600 @enderror" type="file">
                @error('file')
                <span class="text-red-600">
                        {{ $message }}
                    </span>
                @enderror
                </div>
                <x-primary-button type="submit">submit</x-primary-button>
            </form>
        </div>
    </div>
</x-app>
