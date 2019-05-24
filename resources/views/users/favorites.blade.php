@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            @include('users.card', ['micropost' => $micropost])
        </aside>
        <div class="col-sm-8">
            
            @include('users.navtabs', ['micropost' => $micropost])
            @include('microposts.microposts', ['micropost' => $micropost])
            
        </div>
    </div>
@endsection