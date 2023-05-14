<?php

namespace Modules\Subject\Http\Livewire;

use Livewire\Component;
use Modules\Subject\Entities\Subject;
use Illuminate\Http\Request;
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
                'response'=> $this->responseData(),
                'data' => $this->data, 
                'text' => $this->text
            ]
        );
    }

    public function responseData() {
        $request = Request::capture();
        $subject = $request->input('subject');
        return Subject::find((int) $subject);
    }

    public function iterateTextInData() {
        $this->data[] = $this->text;
        $this->text = '';
    }
}
