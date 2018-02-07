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
                                    <a href="#">
                                        {{ $category->name }}
                                    </a>
                                </td>
                                <td class="text-right">
                                    {{ $category->articles()->count() }}
                                </td>
                                <td>
                                    <a href="#" class="btn btn-danger">Delete</a>
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