@extends('layouts.chat')

@section('content')
    <div class="container">
        @livewire('message', ['users' => $users, 'messages' => $messages ?? null])
    </div>
@endsection
