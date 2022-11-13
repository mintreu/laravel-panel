<?php

namespace Mintreu\LaravelPanel\Panels;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Mintreu\LaravelLayout\View\AppLayout;
use Mintreu\LaravelPanel\View\PanelTheme;


abstract class Panel extends Component
{

    protected string $view = 'panel::livewire.fallback';
    protected string $theme = AppLayout::class;

    protected $model = '';

    protected string $title='Panel';
    protected string $description='';
    protected array $keyword=[];
    protected string $favicon = '';



    protected object|null $currentObject=null;

    abstract public function form():array;
    abstract public function table():array;
    abstract public function relation():array;


    public function getSetInstance($instance=null)
    {
        $this->currentObject = $instance ?? $this;
    }






    protected function getPanelConfig()
    {

        return [
            'title' => $this->currentObject->title,
            'form' => $this->currentObject->form(),
            'table' => $this->currentObject->table(),
            'relation' => $this->currentObject->relation(),
        ];
    }

    protected function getLayoutConfig()
    {
       return [
           'title' => __($this->currentObject->title),
           'description' => __($this->currentObject->description),
           'keyword' => $this->currentObject->keyword,
           'favicon' => $this->currentObject->favicon,

       ];
    }



    /**
     * @return View
     */
    public function render():View
    {
        $this->getSetInstance();
        return view($this->view,$this->getPanelConfig())->layout($this->theme,$this->getLayoutConfig());
    }



}
