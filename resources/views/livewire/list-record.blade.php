<div class="col-span-12 p-5 " x-show="listView" x-data="{viewRecord:false,editView:false,viewTable:true}">

    {{--  Table View--}}
   <div x-show="viewTable">
       <div class="grid grid-cols-12 darklight p-5 rounded-lg rounded-b-none z-40">
           <div class="col-span-10 text-3xl ">
               View All {{ ucfirst(request()->segment(3) ?? 'Records')}}
           </div>

           <div class="col-span-2 ">
               <button class="float-right " @click="mainContent = !mainContent">
                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                       <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                   </svg>
               </button>
           </div>
       </div>


       @livewire('table::table')
   </div>
    {{--  Table View--}}


    <div class="grid grid-cols-12 w-full h-full " x-show="!viewTable">

        {{-- Edit Form--}}
        @livewire('panel::edit-record')
        {{-- Edit Form--}}

        {{-- View Form--}}
        @livewire('panel::view-record')
        {{-- View Form--}}

    </div>





</div>



