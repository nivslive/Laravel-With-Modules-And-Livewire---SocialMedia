<div>
    <h3>The <code>Screen</code> livewire component is loaded from the <code>Subject</code> module.</h3>
    
    @foreach($data as $d)
    {{ $d }}
    @endforeach

    {{ $text }} 
    <input type="text" wire:model="text">
    <button wire:click.prevent="iterateTextInData"> test </button>
    </div>
