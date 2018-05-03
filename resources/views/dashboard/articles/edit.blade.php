@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>
                    Editing article {{ $article->title }}
                </h2>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <form action="{{ route('dashboard.articles.update', $article) }}" method="POST" autocomplete="off">
                    @include('dashboard.articles.forms.create-edit', $article)
                    <input type="hidden" name="category" value="{{ $category->id }}">

                    <div class="form-group">
                        <a href="{{ route('dashboard.articles.index', $category) }}" class="btn btn-danger">Cancel</a>
                        <input type="submit" class="btn btn-success" value="Update Article">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection