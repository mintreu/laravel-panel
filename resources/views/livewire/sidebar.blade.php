<div x-show="{ leftSidebar }" class="min-h-[640px] flex  h-full  scheme-basic" x-data="{sidebar :false}">

    {{-- Shrink Sidebar--}}
    <div class="hidden w-24 rounded-r-lg border-r-2 dark:border-gray-700 h-full   overflow-hidden md:block  " x-show="!sidebar">
        <div class="w-full py-6 flex flex-col items-center">
            <div class="flex-shrink-0 flex items-center ">
                {{--                    <img class="h-8 w-auto " src="https://tailwindui.com/img/logos/workflow-mark.svg?color=white" alt="Workflow">--}}
                <button type="button" class="" @click="sidebar = !sidebar">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 15l6-6m0 0l-6-6m6 6H9a6 6 0 000 12h3" />
                    </svg>

                </button>
            </div>

            <div class="flex-1 mt-6 w-full px-2 space-y-1 ">
                @if(isset($sidebarlinks) && $sidebarlinks)
                    @foreach($sidebarlinks as $links)
                        <a href="{{ \Illuminate\Support\Facades\Route::has($links['route']) ? route($links['route']) : url($links['route']) }}" class=" group w-full p-3 rounded-md flex flex-col items-center text-xs font-medium dark--violetWhite-hover" x-state:on="Current" x-state:off="Default" x-state-description="Current: &quot;bg-indigo-800 text-white&quot;, Default: &quot;text-indigo-100 hover:bg-indigo-800 hover:text-white&quot;">
                            {{--                        <svg class="h-6 w-6" x-state:on="Current" x-state:off="Default" x-state-description="Current: &quot;text-white&quot;, Default: &quot;text-indigo-300 group-hover:text-white&quot;" x-description="Heroicon name: outline/home" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
                            {{--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>--}}
                            {{--                        </svg>--}}
                            {!! $links['icon'] !!}
                            <span class="mt-2">{{ $links['name'] }}</span>
                        </a>
                    @endforeach
                @endif
            </div>

            <div class="flex-shrink-0 flex  p-4">
                <a href="#" class="flex-shrink-0 w-full group block">
                    <div class="flex items-center flex-col">
                        <div>
                            <img class="inline-block h-9 w-9 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                        </div>
                        {{--                            <div class="ml-3">--}}
                        {{--                                <p class="text-sm font-medium ">--}}
                        {{--                                    Tom Cook--}}
                        {{--                                </p>--}}
                        <p class="text-xs font-medium ">
                            Profile
                        </p>
                        {{--                            </div>--}}
                    </div>
                </a>
            </div>
        </div>
    </div>

    {{-- Expanded Sidebar--}}
    <div class="flex-1 flex flex-col min-h-0  rounded-r-lg  w-48 " x-show="sidebar" x-cloak>
        <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
            <div class=" text-center">

                <button type="button" class="" @click="sidebar = !sidebar">

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                    </svg>

                </button>
            </div>


            <nav class="mt-5 flex-1 px-2  space-y-1" aria-label="Sidebar">
                @if(isset($sidebarlinks) && $sidebarlinks)
                    @foreach($sidebarlinks as $links)
                        <a href="#" class=" group flex items-center px-2 py-2 text-sm font-medium rounded-md" x-state:on="Current" x-state:off="Default" x-state-description="Current: &quot;bg-gray-900 text-white&quot;, Default: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                            {{--                        <svg class=" mr-3 flex-shrink-0 h-6 w-6" x-state:on="Current" x-state:off="Default" x-state-description="Current: &quot;text-gray-300&quot;, Default: &quot;text-gray-400 group-hover:text-gray-300&quot;" x-description="Heroicon name: outline/home" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
                            {{--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>--}}
                            {{--                        </svg>--}}

                            {!! $links['icon'] !!}
                            <span class="flex-1">{{$links['name']}}</span>
                        </a>
                    @endforeach
                @endif
            </nav>
        </div>
        <div class="flex-shrink-0 flex  p-4">
            <a href="#" class="flex-shrink-0 w-full group block">
                <div class="flex items-center">
                    <div>
                        <img class="inline-block h-9 w-9 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium ">
                            Tom Cook
                        </p>
                        <p class="text-xs font-medium ">
                            View profile
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </div>

    {{-- Mobile Sidebar Menu --}}
    <div x-show="leftMSidebar" class="md:hidden " x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state." x-ref="dialog" aria-modal="true" style="display: none;">
        <div class="fixed inset-0 z-40 flex">

            <div x-show="leftMSidebar" class="fixed inset-0  bg-opacity-75" @click="leftMSidebar = false" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Off-canvas menu overlay, show/hide based on off-canvas menu state."  aria-hidden="true" style="display: none;">
            </div>

            <div x-show="leftMSidebar" class="relative max-w-xs w-full pt-5 pb-4 flex-1 flex flex-col scheme-basic" x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" x-description="Off-canvas menu, show/hide based on off-canvas menu state."  style="display: none;">

                <div x-show="leftMSidebar" x-transition:enter="ease-in-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in-out duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute top-1 right-0 -mr-14 p-1" x-description="Close button, show/hide based on off-canvas menu state." style="display: none;">
                    <button type="button" class="h-12 w-12 scheme-basic rounded-full flex items-center justify-center" @click="leftMSidebar = false">
                        <svg class="h-6 w-6 text-white" x-description="Heroicon name: outline/x" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                        <span class="sr-only">Close sidebar</span>
                    </button>
                </div>

                {{--                LOGO HERE--}}
                <div class="flex-shrink-0 px-4 flex items-center ">
                    {{--                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=white" alt="Workflow">--}}
                    <a href="/" class="flex">
                        <div>
                            <img class="block lg:hidden h-8 w-auto "
                                 src="https://www.svgrepo.com/show/323050/praying-mantis.svg" alt="{{strtoupper(config('app.name'))}}">
                            <img class="hidden lg:block h-8 w-auto "
                                 src="https://www.svgrepo.com/show/323050/praying-mantis.svg"
                                 alt="{{strtoupper(config('app.name'))}}">
                        </div>
                        <div class="grow">
                            {{strtoupper(config('app.name'))}}
                        </div>
                    </a>
                </div>
                <div class="mt-5 flex-1 h-0 px-2 overflow-y-auto ">
                    <nav class="h-full flex flex-col">
                        <div class="space-y-1">
                            @if(isset($sidebarlinks) && $sidebarlinks)
                                @foreach($sidebarlinks as $links)
                                    <a href="#" class="py-2 px-3 rounded-md flex items-center text-sm font-medium " x-state:on="Current" x-state:off="Default" x-state-description="Current: &quot;bg-indigo-800 text-white&quot;, Default: &quot;text-indigo-100 hover:bg-indigo-800 hover:text-white&quot;">
                                        {{--                                <svg class="mr-3 h-6 w-6" x-state:on="Current" x-state:off="Default" x-state-description="Current: &quot;text-white&quot;, Default: &quot;text-indigo-300 group-hover:text-white&quot;" x-description="Heroicon name: outline/home" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
                                        {{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>--}}
                                        {{--                                </svg>--}}

                                        {!! $links['icon'] !!}
                                        <span>{{$links['name']}}</span>
                                    </a>
                                @endforeach
                            @endif
                        </div>
                    </nav>
                </div>
            </div>

            <div class="flex-shrink-0 w-14" aria-hidden="true">
                <!-- Dummy element to force sidebar to shrink to fit close icon -->
            </div>
        </div>
    </div>

</div>
