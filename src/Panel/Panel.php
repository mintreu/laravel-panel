<?php

namespace Mintreu\LaravelPanel\Panel;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Mintreu\LaravelLayout\View\AppLayout;
use Mintreu\LaravelPanel\Panel\Contract\PanelContract;
use Mintreu\LaravelPanel\Panel\Resources\Resource;
use Mintreu\LaravelPanel\Panel\Traits\hasPanelResolver;

class Panel extends Component
{

    use hasPanelResolver;

    protected string $title = 'Panel';
    protected string $favicon = '';
    protected string $description = '';
    protected array $keyword = [];
    protected string $view = 'panel::panel';
    protected string $theme = AppLayout::class;

    protected Resource $resource;

    protected PanelContract $panelContract;


    public function mount()
    {
        if(!Auth::guest())
        {
            $this->panelContract = new Login();
        }else{
            $this->panelContract = new Dashboard();
        }


    }






    /**
     * @return View
     */
    public function render(): View
    {
        return view($this->view,$this->getPanelConfig())->layout($this->theme, $this->getLayoutConfig());
    }

}

