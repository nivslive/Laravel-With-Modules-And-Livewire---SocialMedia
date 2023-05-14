<?php

namespace Modules\Message\Http\Livewire;

use Livewire\Component;
use Modules\Message\Entities\Message;

use Illuminate\Http\Request;

//use Modules\Subject\Http\Livewire\Screen as SubjectScreen;

class Screen extends Component
{
    public $response;

    public function __construct() {
        $this->response = $this->all();
    }
    public function render()
    {
        return view('message::livewire.screen');
    }

    public function all() {
        $request = Request::capture();
        $subject = $request->input('subject');
        return Message::where('subject_id', '=', $subject)->first();
    }
}
