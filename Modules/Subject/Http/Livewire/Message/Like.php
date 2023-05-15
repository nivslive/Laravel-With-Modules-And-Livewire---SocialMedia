<?php

namespace Modules\Subject\Http\Livewire\Message;

use Livewire\Component;

class Like extends Component
{
    public $messsageid;
    public $likesCount = 0;
    public $buttonPlaceholder = 'Curtir';
   public function render()
    {
        return view('subject::livewire.message.like');
    }

    public function likesCount() {
    }

    public function buttonPlaceholderSwitcher() {
        $LIKE = 'Curtir';
        $DESLIKE = 'Descurtir';
        $this->buttonPlaceholder === $LIKE ? $DESLIKE : $LIKE;
    }
    public function like() {
        //dd($this->messsageid);
        $this->likesCount++;
        $this->buttonPlaceholderSwitcher();
    }
}
