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
        $this->all();
    }
    public function render()
    {   
        $this->responseData(); 
        return view('subject::livewire.screen');
    }

    public function responseData() {
        $request = Request::capture();
        $subject = $request->input('subject');
        $this->response =  Subject::find((int) $subject);
        if($this->response === null) {
             return abort(404);
        }
        return;
    }

    public function sendMessage() {
        $this->text = '';
        Message::create(['text' => $this->text]);
        $this->responseData();
    }
}
