<x-app>
    <div>
        <div class="pt-20">
            <div class="flex items-center justify-center">
                <form action="{{ route('forum.store') }}" method="post">
                    @csrf
                    <div>
                        <label for="topic" class="block">Topic</label>
                        <div class="mt-2 mb-2">
                            <input type="text" name="topic" id="topic" class="block w-full bg-transparent border border-slate-400 rounded-lg px-8 py-2 @error('topic') border-red-600 ring-1 ring-red-600 @enderror" placeholder="Create Topic">
                            @error('topic')
                            <span class="text-red-600">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="content" class="block">Content</label>
                        <div class="mt-2 mb-2">
                            <textarea name="content" id="content" cols="30" rows="3" class="block w-full bg-transparent border border-slate-400 rounded-lg px-8 py-2 @error('content') border-red-600 ring-1 ring-red-600 @enderror" placeholder="Your Content"></textarea>
                            @error('content')
                            <span class="text-red-600">
                                 {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                    <x-primary-button type="submit">submit</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app>
