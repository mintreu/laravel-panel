<div x-data="{fullBread:true}">

    {{-- Breadcumb--}}
    <nav class="flex border-b border-gray-200 rounded-lg " aria-label="Breadcrumb" x-show="fullBread" x-clock>
        <ol role="list" class="w-full mx-auto  px-4 flex space-x-4 sm:px-6 lg:px-8">
            <li class="flex">
                <div class="flex items-center">
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <svg class="flex-shrink-0 h-5 w-5" x-description="Heroicon name: solid/home" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                        </svg>
                        <span class="sr-only">Home</span>
                    </a>
                </div>
            </li>

            <li class="flex">
                <div class="flex items-center">
                    <svg class="flex-shrink-0 w-6 h-full text-gray-200" viewBox="0 0 24 44" preserveAspectRatio="none" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z"></path>
                    </svg>

                    <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">{{ ucfirst(request()->segment(2)) }}</a>
                </div>
            </li>

            <li class="flex">
                <div class="flex items-center">
                    <svg class="flex-shrink-0 w-6 h-full text-gray-200" viewBox="0 0 24 44" preserveAspectRatio="none" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z"></path>
                    </svg>
                    <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700" aria-current="page">{{ ucfirst(request()->segment(3)) }}</a>
                </div>
            </li>

        </ol>

        <button class="font-bold text-gray-500 mr-3"
                data-bs-toggle="tooltip" data-bs-placement="bottom" title="Minimize"
                @click="fullBread = !fullBread">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
            </svg>

        </button>
        <button class="font-bold text-red-500 mr-8 "
                data-bs-toggle="tooltip" data-bs-placement="bottom" title="Lock My Space"
                @click="mainContent = !mainContent">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>

        </button>


    </nav>
    {{-- Breadcumb--}}


    <div x-show="!fullBread" class="ml-10 mb-6 p-3">
        <button  class="float-right" @click="fullBread = !fullBread" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Show Address">
            <svg class="flex-shrink-0 h-8 w-8" x-description="Heroicon name: solid/home" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
            </svg>
        </button>
    </div>



</div>
