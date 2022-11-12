{{-- Breadcumb--}}
{{-- Main Content Start --}}
<div class="col-span-12 m-2 overflow-x-hidden h-full bg-gray-100 rounded-lg shadow-2xl z-40" x-show="mainContent" x-data="{ listView:true,createView:false }">
    {{-- Page Head--}}
    <div class="grid grid-cols-12 p-1">
        {{--  Page Header Section--}}
    </div>


    <div wire:loading>
        Processing...
    </div>

    <div wire:loading.remove>
        <h1 class="text-lg text-red-600 font-bold"><span class="text-blue-600">Container Record</span> {{ $record }} </h1>
        @livewire('panel::list-record',['record' => $record])
    </div>







{{--   @livewire('panel::record',['record'=> $recordResource])--}}





</div>
