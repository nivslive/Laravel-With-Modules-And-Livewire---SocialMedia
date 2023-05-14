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
        $this->all();
    }
    public function render()
    {
        return view('message::livewire.screen');
    }

    public function all() {
        try {
            $request = Request::capture();
            $subject = $request->input('subject');
            $this->response = Message::where('subject_id', '=', $subject);
            return;
        } catch(\Exception $e) {
            $this->response = [];
        }
    }
}
