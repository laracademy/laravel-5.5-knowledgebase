@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <h2>
                    Viewing {{ $category->name }}
                </h2>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <div class="text-right py-2">
                    <a href="{{ route('dashboard.category.attach', $category) }}" class="btn btn-info">Attach Article</a>
                    <a href="{{ route('dashboard.articles.create', $category) }}" class="btn btn-primary">Create Article</a>
                </div>
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th width="75%">
                                Title
                            </th>
                            <th class="text-right">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($category->articles->sortBy('title') as $article)
                            <tr>
                                <td>
                                    <a href="{{ route('dashboard.articles.edit', [$article, $category]) }}">
                                        {{ $article->title }}
                                    </a>
                                </td>
                                <td class="text-right">
                                    <a href="{{ route('dashboard.articles.destroy', [$article, $category]) }}" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</a>
                                    <a href="{{ route('dashboard.articles.edit', [$article, $category]) }}" class="btn btn-info">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection