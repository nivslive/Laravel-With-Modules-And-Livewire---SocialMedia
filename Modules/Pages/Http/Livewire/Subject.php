<?php

namespace Modules\Pages\Http\Livewire;

use Livewire\Component;

class Subject extends Component
{
    public function render()
    {
        return view('pages::livewire.subject', ['data' => $this->data()]);
    }

    public function data() {
        return 'test';
    }
}
