@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>
                    Creating a new Article for {{ $category->name }}
                </h2>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <form action="{{ route('dashboard.articles.store', $category) }}" method="POST" autocomplete="off">
                    @include('dashboard.articles.forms.create-edit', $article)

                    <div class="form-group">
                        <a href="{{ route('dashboard') }}" class="btn btn-danger">Cancel</a>
                        <input type="submit" class="btn btn-success" value="Create Article">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection