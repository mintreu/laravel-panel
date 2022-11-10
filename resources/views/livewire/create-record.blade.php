<div class="col-span-12" x-show="createView">
    Create Record
    @if(!empty($formComponents))
        @livewire('form::form',['components' => $formComponents])
    @endif
</div>
