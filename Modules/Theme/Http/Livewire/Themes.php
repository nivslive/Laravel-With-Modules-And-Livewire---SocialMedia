<?php

namespace Modules\Theme\Http\Livewire;

use Livewire\Component;
use Modules\Theme\Entities\Theme;

class Themes extends Component
{

    public $response;
    public function render()
    {
        $this->response();
        return view('theme::livewire.themes');
    }
    public function response() {
        $this->response = Theme::all();
    }
}
