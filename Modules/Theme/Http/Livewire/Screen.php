<?php

namespace Modules\Theme\Http\Livewire;

use Livewire\Component;
use Modules\Subject\Entities\Subject;

class Screen extends Component
{

    public $allSubjects;


    public function __construct() {
        $this->allSubjects();
    }

    public function render()
    {
        return view('theme::livewire.screen');
    }


    public function allSubjects() {
        $this->allSubjects = Subject::all();
        return;
    }
}
