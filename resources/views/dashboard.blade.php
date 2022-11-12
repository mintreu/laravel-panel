<x-slot name="bodyAttribute">
    style="overflow:hidden"
</x-slot>

{{--{{ dump($title) }}--}}

    <div class="h-full">
        @livewire('panel::topBar', key(122))
        <div class="flex  w-full h-screen bg-transparent">
            @livewire('panel::sideBar', key(123))
            <main class="h-full w-full   overflow-y-auto darklight" x-cloak>
                <div class="grid grid-cols-12 gap-2">
                    <div class="col-span-12 ">
                        {{--  Main Content Area Start --}}

                        @livewire('panel::record-container',['record'=> $recordResource])


                        {{-- Main Content End --}}







                        {{-- Main Content LockScreen Start --}}
{{--                        <div class="col-span-12 m-3 p-3 overflow-x-hidden h-full rounded-lg shadow-2xl z-40 text-center" x-show="!mainContent">--}}
{{--                            <h1 class="text-4xl italic text-center content-between"> Space Locked</h1>--}}
{{--                            <button @click="mainContent = !mainContent" class=" mt-3 bg-red-400 w-48 text-white p-4 rounded-lg text-center"> Unlock Space</button>--}}
{{--                            --}}{{--                    {{ $slot }}--}}
{{--                        </div>--}}
                        {{-- Main Content LockScreen End --}}

                        {{-- Footer --}}
                        <div class="col-span-12  min-h-32 border-t border-gray-200 rounded-lg p-3 text-right">
                            {{config('app.name')}} - {{\Illuminate\Support\Carbon::now()->year}} All Rights Reserved |
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Visit Mintreu">Powered By Mintreu Services</a>
                        </div>
                        {{-- Footer --}}



                        {{--  Main Content Area End --}}
                    </div>
                </div>
            </main>
        </div>
    </div>


