<?php

namespace Mintreu\LaravelPanel\Http\Livewire;

use Livewire\Component;

class CreateRecord extends Component
{
    public array $formComponents;
    public function mount($components)
    {
        $this->formComponents = $components;
    }


    public function render()
    {
        return view('panel::livewire.create-record');
    }

}
