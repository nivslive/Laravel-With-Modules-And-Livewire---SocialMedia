<?php

namespace Modules\Subject\Http\Livewire;

use Livewire\Component;
use Modules\Subject\Entities\Subject;
class Create extends Component
{

    public $title;
    public $slug;
    public $theme_id;

    public function render()
    {
        return view('subject::livewire.create');
    }


    public function create() {
        //$this->theme_id;
        Subject::create([
            'title' => $this->title,
            'slug' => $this->slug,
            'theme_id' => 1,
        ]);
    }
}
