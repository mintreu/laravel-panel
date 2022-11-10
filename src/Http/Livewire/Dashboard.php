<?php

namespace Mintreu\LaravelPanel\Http\Livewire;

use Mintreu\LaravelPanel\Http\Livewire\Pages\Users;
use Mintreu\LaravelPanel\Panels\Panel;
use Mintreu\LaravelPanel\Panels\PanelInterface;

 class Dashboard extends Panel implements PanelInterface
{
    protected string $view = 'panel::livewire.dashboard';
    protected string $title = 'Dashboard';

     protected $listeners = ['refreshComponent' => 'render','replaceSpaceRoute' => 'refreshSpace'];



     public function refreshSpace($param)
     {


         $className = $param['class'];

         $this->currentObject = null;

//        dd("here panel class",$param,(new $className())->form());
         //$alterClass = new $className();
         $alterClass = new Users();
        // $this->currentObject = $alterClass;
         $this->currentObject = new Users();

         $this->getSetInstance($alterClass);


//       $this->emitSelf('refreshComponent');
//        dd($this->getPanelConfig($this->currentObject));
     }


     /**
      * @return array
      */
     public function form(): array
     {
         return [];
     }

     /**
      * @return array
      */
     public function table(): array
     {
         return [];
     }

     /**
      * @return array
      */
     public function relation(): array
     {
         return [];
     }


























 }
