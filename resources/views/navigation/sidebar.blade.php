{{--<div>--}}


{{--    <button wire:click="loadWindow('load_resource_login')">Login</button>--}}

{{--    <button wire:click="loadWindow('load_resource_dashboard')">Dashboard</button>--}}


{{--</div>--}}





<div x-show="{ leftSidebar }" class="min-h-[640px] flex  h-full  darklight " x-data="{sidebar :false}" x-cloak>


    {{-- Shrink Sidebar--}}
    <div class="min-h-0  rounded-r-lg  w-24 hidden  md:flex md:flex-1 md:flex-col " x-show="!sidebar">
        <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
            <div class=" text-center">
                <button type="button" class="" @click="sidebar = !sidebar" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Toggle Sidebar">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 15l6-6m0 0l-6-6m6 6H9a6 6 0 000 12h3" />
                    </svg>

                </button>
            </div>
            {{-- Menu--}}
            <nav class="mt-5 flex-1 px-2  space-y-1" aria-label="Sidebar">
                @if(isset($sidebarlinks) && $sidebarlinks)
                    @foreach($sidebarlinks as $key => $links)

{{--                        <a href="@if(\Illuminate\Support\Facades\Route::has($links['route'])) {{route($links['route'])}} @else # @endif" data-bs-toggle="tooltip" data-bs-placement="right" title="Visit {{\Illuminate\Support\Str::ucfirst($links['name'])}}"--}}
{{--                           class=" group flex items-center px-2 py-2 text-sm font-medium rounded-md "--}}
{{--                           x-state:on="Current" x-state:off="Default"--}}
{{--                           x-state-description="Current: &quot;bg-gray-900 text-white&quot;, Default: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">--}}
{{--                            {!! $links['icon'] !!}--}}
{{--                            <span class="flex-1">{{$links['name']}}</span>--}}
{{--                        </a>--}}

{{--Sidebar Event--}}
                        <button wire:click="loadWindow('{{$links['record']}}')">{{$links['name']}}</button>

{{--                        Record Event Direct --}}

{{--                        <button wire:click="$emitTo('panel::list-record', 'reloadRecord('')')">{{$links['name']}}</button>--}}


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
                </div>
            </a>
        </div>
    </div>


</div>
