<?php

namespace Mintreu\LaravelPanel\Panel;

use Livewire\Component;
use Mintreu\LaravelPanel\Panel\Contract\PanelContract;
use Mintreu\LaravelPanel\Panel\Record\Record;
use Mintreu\LaravelPanel\Panel\Record\RecordContainer;
use Mintreu\LaravelPanel\Panel\Resources\IndexResource;
use Mintreu\LaravelPanel\Panel\Resources\PostResource;
use Mintreu\LaravelPanel\Panel\Traits\hasDashboardResolver;
use Mintreu\LaravelPanel\Panel\Traits\hasPanelResolver;

class Dashboard extends Component implements PanelContract
{

    use hasDashboardResolver;

    protected string $title = 'Dashboard';
    public string $view = 'panel::dashboard';
//    protected RecordContainer $recordContainer;
    protected $recordResource;
    protected $listeners = ['refreshDashboard' => 'hydrateFoo','reload' => '$refresh'];




    public function mount($record='')
    {
        $this->recordResource = empty($record) ? IndexResource::class : $record;
    }



    public function hydrateFoo($record='')
    {
        if(!empty($record))
        {
            $this->recordResource = $record;
        }

        $this->emitTo( 'panel::record-container','reloadContainer',$this->recordResource);
       // $this->emitSelf('reload',$this->recordResource);
    }


    public function render()
    {
        return view($this->view,[
            'recordResource' => $this->recordResource
        ]);
    }


}
