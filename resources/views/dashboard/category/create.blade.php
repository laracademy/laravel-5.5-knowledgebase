@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>
                    Creating a new Category
                </h2>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <form action="{{ route('dashboard.category.store') }}" method="POST" autocomplete="off">
                    @include('dashboard.category.forms.create-edit', $category)

                    <div class="form-group">
                        <a href="{{ route('dashboard') }}" class="btn btn-danger">Cancel</a>
                        <input type="submit" class="btn btn-success" value="Create Category">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection