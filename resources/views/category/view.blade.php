@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-4 mb-4">
                    {{ $category->name }}
                </h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="list-group">
                    @foreach($category->articles as $article)
                        <li class="list-group-item">
                            <a href="#">
                                <h4>
                                    {{ $article->title }}
                                </h4>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

@endsection