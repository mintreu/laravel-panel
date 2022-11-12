<?php

namespace Mintreu\LaravelPanel\Panel\Record;

class EditRecord extends Record
{

    protected string $view = 'panel::record.edit-record';
    protected $listeners = ['refreshComponent' => '$refresh'];


}
