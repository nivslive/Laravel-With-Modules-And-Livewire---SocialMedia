<div>
    <h3>The <code>Messages</code> livewire component is loaded from the <code>Subject</code> module.</h3>
    @foreach($response as $message)
        {{ $message }}
        <livewire:subject::message.like :messsageid="$message->id">
    @endforeach
</div>
