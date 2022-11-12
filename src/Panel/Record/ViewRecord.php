<?php

namespace Mintreu\LaravelPanel\Panel\Record;

class ViewRecord extends Record
{


    protected string $view = 'panel::record.view-record';
    protected $listeners = ['refreshComponent' => '$refresh'];


}
