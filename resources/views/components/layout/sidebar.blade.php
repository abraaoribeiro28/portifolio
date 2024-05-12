<aside mini="false" class="fixed inset-y-0 left-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto transition-all duration-200 -translate-x-full bg-white border-0 shadow-none xl:ml-4 dark:bg-gray-950 ease-soft-in-out z-990 max-w-64 rounded-2xl xl:translate-x-0 xl:bg-transparent" id="sidenav-main">
    <div class="h-20">
        <i class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 dark:text-white xl:hidden" aria-hidden="true" sidenav-close-btn></i>

        <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700 dark:text-white" href="#route" target="_blank">
            <img src="{{ asset('theme/assets/img/logo-ct-dark.png') }}" class="inline-block h-full max-w-full transition-all duration-200 ease-soft-in-out max-h-8 dark:hidden" alt="main_logo" />
            <img src="{{ asset('theme/assets/img/logo-ct.png') }}" class="hidden h-full max-w-full transition-all duration-200 ease-soft-in-out max-h-8 dark:inline-block" alt="main_logo" />
            <span class="ml-1 font-semibold transition-all duration-200 ease-soft-in-out">Soft UI Dashboard PRO</span>
        </a>
    </div>

    <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent">

    <div class="items-center block w-full h-auto grow basis-full" id="sidenav-collapse-main">
        <ul class="flex flex-col pl-0 mb-0 list-none">
            <x-layout.side-item title="Dashboard" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pie-chart-fill" viewBox="0 0 16 16">
                        <path d="M15.985 8.5H8.207l-5.5 5.5a8 8 0 0 0 13.277-5.5zM2 13.292A8 8 0 0 1 7.5.015v7.778zM8.5.015V7.5h7.485A8 8 0 0 0 8.5.015"/>
                    </svg>
                </x-slot>
            </x-layout.side-item>

            <x-layout.side-divider title="Divisor" />

            <x-layout.side-item title="Crud" >
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pie-chart-fill" viewBox="0 0 16 16">
                        <path d="M15.985 8.5H8.207l-5.5 5.5a8 8 0 0 0 13.277-5.5zM2 13.292A8 8 0 0 1 7.5.015v7.778zM8.5.015V7.5h7.485A8 8 0 0 0 8.5.015"/>
                    </svg>
                </x-slot>

                <x-slot name="subitems">
                    <x-layout.side-subitem title="Posts" />
                    <x-layout.side-subitem title="Projects"  />
                    <x-layout.side-subitem title="Users" />
                </x-slot>
            </x-layout.side-item>
        </ul>
    </div>
</aside>
