<div>
    <h3>The <code>Screen</code> livewire component is loaded from the <code>Subject</code> module.</h3>
    {{ $response }}

    @foreach($all as $a)
        {{ $a }}
    @endforeach
    <input type="text" wire:model="text">
    <button wire:click="sendMessage"> Enviar mensagem </button>
    </div>
