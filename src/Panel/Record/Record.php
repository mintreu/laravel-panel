<?php

namespace Mintreu\LaravelPanel\Panel\Record;

use Livewire\Component;
use Mintreu\LaravelPanel\Panel\Resources\Resource;

abstract class Record extends Component
{

    protected string $view;
    public $record;
    protected $listeners = ['reloadRecord' => 'setRecord','refresh' => '$refresh'];


    public function mount($record)
    {
        $this->record = $record;

    }

    public function setRecord($record)
    {
        $this->record = $record;
       // $this->emitSelf('refresh',$this->record);
    }



    public function render()
    {

        return view($this->view);
    }


}
