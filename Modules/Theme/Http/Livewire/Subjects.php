<?php

namespace Modules\Theme\Http\Livewire;

use Livewire\Component;
use Modules\Subject\Entities\Subject;
class Subjects extends Component
{

    public $all;
    public function render()
    {
        $this->all = $this->all();
        return view('theme::livewire.subjects');
    }


    public function all() {
        return Subject::all();
    }
}
