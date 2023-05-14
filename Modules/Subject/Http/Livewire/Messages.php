<?php

namespace Modules\Subject\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Modules\Message\Entities\Message;
class Messages extends Component
{

    public $response;
    public function render()
    {
        $this->bySubjectId();
        return view('subject::livewire.messages');
    }

    public function bySubjectId() {
        $request = Request::capture();
        $subject = $request->input('subject');
        $this->response = Message::where('subject_id', '=', $subject);
    }
}
