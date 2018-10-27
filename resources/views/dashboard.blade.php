@extends('layouts.dashboard')

@section('content')
<div id="container">
    <div id="main" class="container-fluid">
        <div class="jumbotron cover-image" style="height: 450px; background: linear-gradient(-140deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 1)), url('http://profiles.sulekhalive.com/mstore/24043018/albums/default/thumbnailfull/1-36.jpg') no-repeat center; background-size: cover;">
            <h2 style="color: white;">Hello, {{Auth::user()->name}}</h2>
        </div>
        
        <!-- Div holding library links -->
        <div class="container article-library-holder">
            <div class="container article-library-link link-create">
                <!-- Trigger the modal with a button -->
                <h3>Create New Library</h3>
                <div type="button" class="container-fluid plus-icon-holder" data-toggle="modal" data-target="#new-library">
                    <div class="line-horizontal"></div>
                    <div class="line-vertical"></div>
                </div>
            </div>
            @foreach ($libraries as $library)
                <a href="{{ route('get library', ['library_id' => $library->id]) }}" class="container article-library-link" style="background: linear-gradient(-100deg, rgba(0, 0, 0, 0.0), rgba(0, 0, 0, 0.6)), url('{{$library->cover_image}}') no-repeat center; background-size: 140%;">
                    <h2 class="article-library-title">{{$library->name}}</h2>
                </a>
            @endforeach
        </div>
    </div>
</div>

<!-- Modal Div -->
@include ('modals.new library', ['user_id' => Auth::user()->id])

@endsection
