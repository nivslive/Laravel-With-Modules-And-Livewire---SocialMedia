<?php

namespace Modules\Subject\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Modules\Message\Entities\Message;
use Modules\Subject\Entities\Subject;
class Messages extends Component
{

    public $response;
    protected $listeners = ['subject.messages.all' => 'all'];
    public function render()
    {
        $this->all();
        return view('subject::livewire.messages');
    }

    public function subjectCreated() {
        dd('ta');
        $this->all();
    }
    public function all() {
        //$request = Request::capture();
        //$subject = $request->input('subject');
        $this->response = Subject::all();
    }
}
