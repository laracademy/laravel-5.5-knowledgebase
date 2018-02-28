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
                    <a href="#" class="btn btn-primary">Create Article</a>
                </div>
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th width="75%">
                                Title
                            </th>
                            <th>
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($category->articles->sortBy('title') as $article)
                            <tr>
                                <td>
                                    <a href="#">
                                        {{ $article->title }}
                                    </a>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</a>
                                    <a href="#" class="btn btn-info">Edit</a>
                                    <a href="#" class="btn btn-primary">View</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection