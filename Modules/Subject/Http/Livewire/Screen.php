<?php

namespace Modules\Subject\Http\Livewire;

use Livewire\Component;
use Modules\Message\Entities\Message;
use Modules\Subject\Entities\Subject;
use Illuminate\Http\Request;
class Screen extends Component
{
    public $response = [];

    public $all;
    public string $text = '';

    public function __construct() {
        $this->all = $this->all();
    }
    public function render()
    {   
        $this->response = $this->responseData(); 
        return view('subject::livewire.screen');
    }

    public function all() {
        return Subject::all();
    }
    public function responseData() {
        $request = Request::capture();
        $subject = $request->input('subject');
        return Subject::find((int) $subject);
    }

    public function sendMessage() {
        $this->text = '';
        Message::create(['text' => $this->text]);
        $this->response = $this->responseData();
    }
}
