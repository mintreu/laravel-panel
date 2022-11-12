<?php

namespace Mintreu\LaravelPanel\Panel\Record;

use Livewire\Component;

class RecordContainer extends Component
{

    protected string $view='panel::record-container';

    protected $listeners = ['reloadContainer' => 'setRecord','refresh' => '$refresh'];

    public string $record;



    public function mount($record)
    {
        $this->record = $record;

    }


    public function setRecord($record)
    {

        $this->record = $record;
        //  $this->emitto('panel::record','refreshRecord',$this->record);
        $this->emitto('panel::list-record','reloadRecord',$this->record);
       $this->emitSelf('refresh',$this->record);

//        $this->emitto('panel::create-record','refreshComponent');
//        $this->emitto('panel::edit-record','refreshComponent');
//        $this->emitto('panel::view-record','refreshComponent');
      //  dd('set rec');
    }



    public function render()
    {
        return view($this->view,[
            'record' => $this->record
        ]);
    }

}
