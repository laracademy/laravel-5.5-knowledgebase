@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <h2>
                    Dashboard
                </h2>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <div class="text-right py-2">
                    <a href="{{ route('dashboard.category.create') }}" class="btn btn-primary">Create Category</a>
                </div>
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th width="50%">
                                Name
                            </th>
                            <th class="text-right">
                                Article Count
                            </th>
                            <th>
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>
                                    <a href="{{ route('dashboard.articles.index', $category) }}">
                                        {{ $category->name }}
                                    </a>
                                </td>
                                <td class="text-right">
                                    {{ $category->articles()->count() }}
                                </td>
                                <td>
                                    <a href="{{ route('dashboard.category.destroy', $category) }}" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</a>
                                    <a href="{{ route('dashboard.category.edit', $category) }}" class="btn btn-info">Edit</a>
                                    <a href="{{ route('dashboard.articles.index', $category) }}" class="btn btn-primary">View</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection