<div>
    <h3>The <code>Create</code> livewire component is loaded from the <code>Subject</code> module.</h3>

    <input type="text" wire:model='title' placeholder="title">
    <input type="text" wire:model='slug' placeholder="slug">
    <button wire:click='create'> Criar Assunto </button>
    <button wire:click='$emitUp("subjectCreated", true)'> OI </button>
</div>
