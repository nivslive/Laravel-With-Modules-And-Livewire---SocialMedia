<?php

namespace Modules\Subject\Http\Livewire;

use Livewire\Component;
use Modules\Subject\Entities\Subject;

class Screen extends Component
{

    public array $data = [
        'testando',
    ];
    public string $text = '';
    public function render()
    {
        return view('subject::livewire.screen', 
            [
                'response'=> $this->responseData(session()->get('subject')),
                'data' => $this->data, 
                'text' => $this->text
            ]
        );
    }

    public function responseData($id) {
        return Subject::find($id);
    }

    public function iterateTextInData() {
        $this->data[] = $this->text;
        $this->text = '';
    }
}
