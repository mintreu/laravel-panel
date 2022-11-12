
{{--<x-slot name="bodyAttribute">--}}
{{--    style="overflow:hidden"--}}
{{--</x-slot>--}}


{{--{{ dump($title) }}--}}

<div class="h-screen w-full  darklight ">
    <div class="h-full"  x-data="{ leftMSidebar:false,darkMode:false,leftSidebar:true,mainContent:true }" x-bind:class="{'dark': darkMode }" >
{{--                @livewire('panel::navigation', key(122))--}}
        <div class="flex  w-full h-screen bg-transparent">
{{--                        @livewire('panel::sidebar', key(123))--}}
            <main class="h-full w-full   overflow-y-auto darklight" x-cloak>
                <div class="grid grid-cols-12 gap-2">
                    <div class="col-span-12 ">
                    {{-- Main Content Area Start--}}

                        {{--  Breadcumb--}}
{{--                        @include('panel::static.breadcumb')--}}
                        {{--  Breadcumb--}}

{{--                         Main Content Start--}}
                        <div class="col-span-12 m-2 overflow-x-hidden h-full bg-gray-100 rounded-lg shadow-2xl z-40" x-show="mainContent" x-data="{ listView:true,createView:false }">
                            {{-- Page Head--}}
                            <div class="grid grid-cols-12 p-1">
                                {{-- Page Header Section--}}
{{--                                @include('panel::static.panel-page-header')--}}
                                {{-- Page Header Section--}}
                            </div>



                            Welcome




{{--                                                {{ $slot }}--}}
                        </div>
                        {{-- Main Content End--}}

                        {{-- Main Content LockScreen Start--}}
                        <div class="col-span-12 m-3 p-3 overflow-x-hidden h-full rounded-lg shadow-2xl z-40 text-center" x-show="!mainContent">
                            <h1 class="text-4xl italic text-center content-between"> Space Locked</h1>
                            <button @click="mainContent = !mainContent" class=" mt-3 bg-red-400 w-48 text-white p-4 rounded-lg text-center"> Unlock Space</button>
{{--                                                {{ $slot }}--}}
                        </div>
                        {{-- Main Content LockScreen End--}}
                        {{-- Footer--}}
                        <div class="col-span-12  min-h-32 border-t border-gray-200 rounded-lg p-3 text-right">
                            {{config('app.name')}} - {{\Illuminate\Support\Carbon::now()->year}} All Rights Reserved |
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Visit Mintreu">Powered By Mintreu Services</a>
                        </div>
                        {{-- Footer--}}
                        {{-- Main Content Area End--}}
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>


