<div>




    <nav  x-data="{ topMNavbar: false }" class="  rounded-b shadow-lg darklight " x-cloak >

        {{-- Desktop Navbar--}}
        <div class="max-w-full  px-2 sm:px-4 lg:px-8">
            <div class="relative flex items-center justify-between h-16 ">

                {{-- Primary Link Area--}}
                <div class="flex items-center px-2 lg:px-0" >
                    <button type="button" class="md:hidden" @click="leftMSidebar = !leftMSidebar" @click.outside="leftMSidebar = false">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 float-right mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                        </svg>
                    </button>
                    <div class="flex-shrink-0 ">
                        <a href="/" class="flex">
                            @if(isset($brandingLogo) && $brandingLogo)
                                {{-- Branding Logo--}}
                                <div>
                                    <img class="block lg:hidden h-8 w-auto text-dark" src="https://www.svgrepo.com/show/323050/praying-mantis.svg" alt="{{strtoupper(config('app.name'))}}">
                                </div>
                            @endif
                            @if(isset($brandingText) && $brandingText)
                                {{-- Branding Text --}}
                                <div class="grow">
                                    <h2 class="text-xl  font-bold italic" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Visit {{\Illuminate\Support\Str::ucfirst(config('app.name'))}}">{{config('app.name')}}</h2>
                                </div>
                            @endif
                        </a>
                    </div>
                    <div class="hidden lg:block lg:ml-6">
                        <div class="flex space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            @if(isset($navlinks) && !empty($navlinks))
                                {{-- Top Navbar --}}
                                @foreach($navlinks as $link)
                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Visit {{\Illuminate\Support\Str::ucfirst($link['name'])}}"
                                       class=" px-3 py-2 rounded-md text-sm font-medium font-bold">{{\Illuminate\Support\Str::ucfirst($link['name'])}}</a>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>

                {{-- Search Bar--}}
                @if(isset($globalSearch) && $globalSearch)
                    <div class="flex-1 flex justify-center px-2 lg:ml-6 lg:justify-end float-right ">
                        <div class="max-w-lg w-full lg:max-w-xs">
                            <label for="search" class="sr-only" >Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 " x-description="Heroicon name: solid/search"
                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                         aria-hidden="true">
                                        <path fill-rule="evenodd"
                                              d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input id="search" name="search" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Enter Search Text"
                                       class="block w-full pl-10 pr-3 py-2 border border-transparent rounded-md leading-5  placeholder-gray-400 focus:outline-none focus:bg-white focus:border-white focus:ring-white focus:text-gray-900 sm:text-sm"
                                       placeholder="Search" type="search">
                            </div>
                        </div>
                    </div>
                @endif
                <div class="flex lg:hidden">
                    <!-- Mobile menu button -->
                    <button type="button"
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                            aria-controls="mobile-menu" @click="topMNavbar = !topMNavbar" aria-expanded="false"
                            x-bind:aria-expanded="topMNavbar.toString()">
                        <span class="sr-only">Open main menu</span>
                        <svg x-description="Icon when menu is closed. Heroicon name: outline/menu"
                             x-state:on="Menu open" x-state:off="Menu closed"
                             class="block h-6 w-6"
                             :class="{ 'hidden': topMNavbar, 'block': !(topMNavbar) }"
                             xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <svg x-description="Icon when menu is open.  Heroicon name: outline/x"
                             x-state:on="Menu open" x-state:off="Menu closed"
                             class="hidden h-6 w-6"
                             :class="{ 'block': topMNavbar, 'hidden': !(topMNavbar) }"
                             xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                {{-- DarkMode Toggle Button--}}
                <div class="ml-2 inline-flex items-center justify-center p-2">
                    <button @click="darkMode = !darkMode" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Eye Saver">
                        <svg x-cloak x-show="!darkMode" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                        </svg>

                        <svg x-cloak x-show="darkMode" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
                        </svg>



                    </button>
                </div>

                {{-- Notification & Profile --}}
                <div class="hidden lg:block lg:ml-2">
                    <div class="flex items-center">
                        {{-- Notification Dropdown--}}
                        @if(isset($quickNotification) && $quickNotification)

                        @endif
                        {{-- Profile dropdown --}}
                        @if(isset($quickProfile) && $quickProfile)
                            <!-- Profile dropdown -->
                            <div x-data="{ profileBtn: false }"
                                 {{--                         x-init="init()"--}}
                                 {{--                         @keydown.escape.stop="open = false; focusButton()"--}}
                                 {{--                         @click.away="onClickAway($event)" --}}
                                 class="ml-2 relative flex-shrink-0"
                                {{--                         @click.outside="profileBtn= false"--}}
                            >
                                <div>
                                    <button type="button" data-bs-toggle="tooltip" data-bs-placement="bottom" title="My Profile"
                                            class="bg-gray-800 rounded-full flex text-sm text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                                            id="user-menu-button" x-ref="button" @click="profileBtn = ! profileBtn" aria-expanded="false"
                                            aria-haspopup="true" x-bind:aria-expanded="open.toString()">
                                        <span class="sr-only">Open user menu</span>
                                        <img class="h-8 w-8 rounded-full"
                                             src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                             alt="">
                                    </button>
                                </div>
                                <div x-cloak x-show="profileBtn" x-transition:enter="transition ease-out duration-100"
                                     x-transition:enter-start="transform opacity-0 scale-95"
                                     x-transition:enter-end="transform opacity-100 scale-100"
                                     x-transition:leave="transition ease-in duration-75"
                                     x-transition:leave-start="transform opacity-100 scale-100"
                                     x-transition:leave-end="transform opacity-0 scale-95"
                                     class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                     x-ref="menu-items" x-description="Dropdown menu, show/hide based on menu state."
                                     {{--                             x-bind:aria-activedescendant="activeDescendant" --}}
                                     role="menu" aria-orientation="vertical"
                                     aria-labelledby="user-menu-button" tabindex="-1"
                                    {{--                             @keydown.arrow-up.prevent="onArrowUp()"--}}
                                    {{--                             @keydown.arrow-down.prevent="onArrowDown()"--}}
                                    {{--                             @keydown.tab="profileBtn = false"--}}
                                    {{--                             @keydown.enter.prevent="profileBtn = false; focusButton()"--}}
                                    {{--                             @keyup.space.prevent="profileBtn = false; focusButton()"--}}
                                >
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700"
                                       {{--                               x-state:on="Active"--}}
                                       {{--                               x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }"--}}
                                       role="menuitem"
                                       tabindex="-1" id="user-menu-item-0"
                                        {{--                               @mouseenter="activeIndex = 0"--}}
                                        {{--                               @mouseleave="activeIndex = -1" @click="open = false; focusButton()"--}}
                                    >Your Profile</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700"
                                       {{--                               :class="{ 'bg-gray-100': activeIndex === 1 }"--}}
                                       role="menuitem" tabindex="-1"
                                       id="user-menu-item-1"
                                        {{--                               @mouseenter="activeIndex = 1" --}}
                                        {{--                               @mouseleave="activeIndex = -1"--}}
                                        {{--                               @click="profileBtn = false; focusButton()"--}}
                                    >Settings</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700"
                                       {{--                               :class="{ 'bg-gray-100': activeIndex === 2 }"--}}
                                       role="menuitem" tabindex="-1"
                                       id="user-menu-item-2"
                                        {{--                               @mouseenter="activeIndex = 2" @mouseleave="activeIndex = -1"--}}
                                        {{--                               @click="profileBtn = false; focusButton()"--}}
                                    >Sign out</a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

                {{-- Secondary Link Area--}}



            </div>
        </div>


        {{-- Mobile Navbar--}}
        <div x-description="Mobile menu, show/hide based on menu state." class="lg:hidden" id="mobile-menu" x-cloak="true" x-show="topMNavbar" @click.outside="topMNavbar = false">
            <div class="px-2 pt-2 pb-3 space-y-1" @click.outside="leftSidebar = false">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                @if(isset($navlinks) && !empty($navlinks))
                    @foreach($navlinks as $link)
                        <a href="#"
                           class=" hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">{{$link['name']}}</a>
                    @endforeach
                @endif
            </div>
            <div class="pt-4 pb-3 border-t border-b-2 rounded-lg border-gray-300 mb-1">
                <div class="flex items-center px-5">
                    <div class="flex-shrink-0">
                        <img class="h-10 w-10 rounded-full"
                             src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                             alt="">
                    </div>
                    <div class="ml-3">
                        <div class="text-base font-medium ">Tom Cook</div>
                        <div class="text-sm font-medium ">tom@example.com</div>
                    </div>
                    <button type="button"
                            class="ml-auto flex-shrink-0  p-1 rounded-full  hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                        <span class="sr-only">View notifications</span>
                        <svg class="h-6 w-6" x-description="Heroicon name: outline/bell" xmlns="http://www.w3.org/2000/svg"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                        </svg>
                    </button>
                </div>
                <div class="mt-3 px-2 space-y-1">
                    <a href="#"
                       class="block px-3 py-2 rounded-md text-base font-medium  hover:text-white hover:bg-gray-700">Your
                        Profile</a>
                    <a href="#"
                       class="block px-3 py-2 rounded-md text-base font-medium  hover:text-white hover:bg-gray-700">Settings</a>
                    <a href="#"
                       class="block px-3 py-2 rounded-md text-base font-medium  hover:text-white hover:bg-gray-700">Sign
                        out</a>
                </div>
            </div>
        </div>
    </nav>












</div>
