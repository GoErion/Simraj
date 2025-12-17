<x-app>
    <div>
        <div class="pt-20">
            <div class="flex items-center justify-center">
                <x-nav-link href="{{ route('forum.create') }}" class="border border-slate-500 py-2 px-4 rounded-lg">
                    Create Topic
                </x-nav-link>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-12 place-items-center">
                @forelse($forums as $forum)
                    <div class="bg-transparent block max-w-sm p-8 border border-slate-400 rounded-2xl">
                        <h5 class="mb-3 text-2xl font-semibold tracking-tight text-heading leading-8">{{ $forum->topic }}</h5>
                        <p class="text-body mb-6">{{ $forum->content }}</p>
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
    </div>
</x-app>
