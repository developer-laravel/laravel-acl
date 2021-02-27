@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @forelse($posts as $post)
                       
                        <h2>{{ $post->title }}</h2>
                        <p>{{ $post->description }}</p>

                        <br/>
                        <span>Autor: {{ $post->user->name }} </span>
                        @can('update-post', $post) |  <a href="{{ url('/home/post/'.$post->id.'/update')}}">Editar:</a> @endcan
                        
                    @empty
                        <p> Nwnhum Post Cadastrado! </p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
