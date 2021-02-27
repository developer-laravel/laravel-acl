@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h2>{{ $post->title }}</h2>
                    <p>{{ $post->description }}</p>
                    <br/>
                    <span>Autor: {{ $post->user->name }} </span> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
