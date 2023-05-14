@extends('pages::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        <livewire:pages::theme>
        This view is loaded from module: {!! config('pages.name') !!}
    </p>
@endsection
