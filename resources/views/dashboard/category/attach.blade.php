@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>
                    Attach Existing Article to {{ $category->name }}
                </h2>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <form action="{{ route('dashboard.category.article.save', $category) }}" method="POST" autocomplete="off">
                    {!! csrf_field() !!}

                    <div class="form-group">
                        <label for="article">Articles</label>
                        <select name="article" id="article" class="form-control">
                            @foreach($articles as $article)
                                <option value="{{ $article->id }}">{{ $article->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <a href="{{ route('dashboard.articles.index', $category) }}" class="btn btn-danger">Cancel</a>
                        <input type="submit" class="btn btn-success" value="Attach Article">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection