<x-app>
    <div class="pt-20">
        <div class="flex items-center justify-center">
            <x-nav-link href="{{ route('product.create') }}" class="border border-slate-500 py-2 px-4 rounded-lg">
                Product Create
            </x-nav-link>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-12 place-items-center">
            @forelse($products as $product)
                <div class="bg-transparent block max-w-sm p-6 border border-slate-400 rounded-2xl">
                    <h5 class="mb-3 text-2xl font-semibold tracking-tight text-heading leading-8">{{ $product->name }}</h5>
                    <p class="text-body mb-6">{{ $product->description }}</p>
                    <div class="flex items-center justify-between">
                        <div>Price: {{ $product->price }}</div>
                        <div><a href="" class="">Usages</a></div>
                        <div>User: {{ $product->user->name }}</div>
                    </div>
                </div>
            @empty
                <div class="flex items-center justify-center">
                    <div class="pt-16">
                        <h1 class="text-2xl">
                            No Products!
                        </h1>
                    </div>
                </div>
            @endforelse
        </div>


    </div>
</x-app>
