<?php

namespace Modules\Subject\Http\Livewire;

use Livewire\Component;

class Screen extends Component
{

    public array $data = [
        'testando',
    ];
    public string $text = '';
    public function render()
    {
        return view('subject::livewire.screen', ['data' => $this->data]);
    }


    public function iterateTextInData() {
        $this->data[] = $this->text;
        $this->text = '';
    }
}
