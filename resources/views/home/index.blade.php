@extends('layout.general')

@section('contenido')

    <h3>Chat</h3>
    @livewire('chat-form')
    @livewire('chat-list')

@endsection
