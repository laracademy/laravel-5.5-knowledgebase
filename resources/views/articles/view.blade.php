@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-4 mb-4">
                    {{ $article->title }}
                </h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                {{ $article->content }}
            </div>
        </div>
    </div>

@endsection