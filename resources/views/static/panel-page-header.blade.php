{{--  Page Header Section--}}
<div class="col-span-8">
    <h1 class="text-2xl ml-4">{{ ucfirst(request()->segment(3)) }}</h1>
</div>
<div class="col-span-4">
    {{-- Main Controller Action --}}
{{--    <button class="bg-sky-500 h-10 p-2 mt-1.5 mr-2  rounded-lg float-right text-white"--}}
{{--            data-bs-toggle="tooltip" data-bs-placement="bottom" title="See All {{ucfirst(request()->segment(3)) ?? 'Record' }}"--}}
{{--            @click="[listView = true,createView = false,editView=false]">View All {{ucfirst(request()->segment(3)) ?? 'Record' }}</button>--}}

{{--    <button class="bg-lime-500 h-10 p-2 mt-1.5 mr-2 rounded-lg float-right text-white"--}}
{{--            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Create New {{ucfirst(request()->segment(3)) ?? 'Record' }}"--}}
{{--            @click="[createView = true, listView = false,editView=false]">New {{ucfirst(request()->segment(3)) ?? 'Record' }}</button>--}}



    <button class="bg-sky-500 h-10 p-2 mt-1.5 mr-2  rounded-lg float-right text-white"
            data-bs-toggle="tooltip" data-bs-placement="bottom" title="See All {{ucfirst(request()->segment(3)) ?? 'Record' }}"
            @click="[listView = true,createView = false]">View All {{ucfirst(request()->segment(3)) ?? 'Record' }}</button>

    <button class="bg-lime-500 h-10 p-2 mt-1.5 mr-2 rounded-lg float-right text-white"
            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Create New {{ucfirst(request()->segment(3)) ?? 'Record' }}"
            @click="[createView = true, listView = false]">New {{ucfirst(request()->segment(3)) ?? 'Record' }}</button>



    {{-- Main Controller Action --}}
</div>
{{--  Page Header Section--}}
