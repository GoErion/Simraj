<div>
    <header class="absolute inset-x-0 top-0 z-50">
        <nav aria-label="Global" class="flex items-center justify-between p-6 lg:px-8">
            <div class="flex lg:flex-1">
                <x-nav-link href="{{ route('home') }}" class="-m-1.5 p-1.5">
                    <span class="sr-only">{{ config('app.name') }}</span>
                    <img src="{{ asset('img/Simraj-logo-home-1.png') }}" alt="" class="h-8 w-auto bg-slate-200 rounded" />
                </x-nav-link>
            </div>
            <div class="flex lg:hidden">
                <x-secondary-button type="button" command="show-modal" commandfor="mobile-menu" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-200">
                    <span class="sr-only">Open main menu</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
                        <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </x-secondary-button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
                <x-nav-link href="{{ route('product.index') }}" class="">
                    Product
                </x-nav-link>
                <x-nav-link href="{{ route('forum.index') }}" class="">
                    Forum
                </x-nav-link>
                <x-nav-link href="{{ route('service.index') }}" class="">
                    Services
                </x-nav-link>
                <x-nav-link href="{{ route('support.index') }}" class="">
                    Support
                </x-nav-link>
            </div>
            @auth
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <x-primary-button>
                            Logout
                        </x-primary-button>
                    </form>
                </div>
            @else
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <x-nav-link href="#" class="">Get Started<span aria-hidden="true"></span></x-nav-link>
            </div>
            @endauth

        </nav>
        <el-dialog>
            <dialog id="mobile-menu" class="backdrop:bg-transparent lg:hidden">
                <div tabindex="0" class="fixed inset-0 focus:outline-none">
                    <el-dialog-panel class="fixed right-0 z-50 w-full overflow-y-auto bg-slate-900 p-6 sm:max-w-sm sm:ring-1 sm:ring-slate-100/10">
                        <div class="flex items-center justify-between">
                            <x-nav-link href="{{ route('home') }}" class="-m-1.5 p-1.5">
                                <span class="sr-only">{{ config('app.name') }}</span>
                                <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="" class="h-8 w-auto" />
                            </x-nav-link>
                            <button type="button" command="close" commandfor="mobile-menu" class="-m-2.5 rounded-md p-2.5 text-gray-200">
                                <span class="sr-only">Close menu</span>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
                                    <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                        <div class="mt-6 flow-root">
                            <div class="-my-6 divide-y divide-white/10">
                                <div class="space-y-2 py-6">
                                    <x-nav-link href="{{ route('product.index') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 text-slate-400 hover:bg-white/5">
                                        Product
                                    </x-nav-link>
                                    <x-nav-link href="{{ route('forum.index') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 text-slate-400 hover:bg-white/5">
                                        Forum
                                    </x-nav-link>
                                    <x-nav-link href="{{ route('service.index') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 text-slate-400 hover:bg-white/5">
                                        Services
                                    </x-nav-link>
                                    <x-nav-link href="{{ route('support.index') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 text-slate-400 hover:bg-white/5">
                                        Support
                                    </x-nav-link>
                                </div>
                                @auth
                                    <div class="py-6">
                                        <form action="{{ route('logout') }}" method="post">
                                            @csrf
                                            <x-primary-button>
                                                LOGOUT
                                            </x-primary-button>
                                        </form>
                                    </div>
                                @else
                                    <div class="py-6">
                                        <x-nav-link href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-white hover:bg-white/5">Get Started</x-nav-link>
                                    </div>
                                @endauth
                            </div>
                        </div>
                    </el-dialog-panel>
                </div>
            </dialog>
        </el-dialog>
    </header>
</div>
