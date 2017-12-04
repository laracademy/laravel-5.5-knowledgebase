@extends('layouts.app')

@section('content')

    <div class="jumbotron">
        <div class="col-sm-8 mx-auto">
          <h1>Knowledgebase Search</h1>
          <p>
            Welcome to our knowledgebase. You can use the search bar below to find help, or the categories at the bottom.
          </p>

          <div class="form-group">
            <div class="input-group">
              <input type="text" class="form-control">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button"><i class="fa fa-fw fa-search"></i> Search</button>
              </span>
            </div>
          </div>
        </div>
      </div>

    <div class="container">

        <div class="row">
            <div class="col">
                <h1 class="display-4 mb-4">
                    Categories
                </h1>
            </div>
        </div>

        @foreach($categories->chunk(3) as $chunk)
            <div class="row">
                @foreach($chunk as $category)
                    <div class="col">
                        <div class="card-group">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        {{ $category->name}} ({{ $category->articles->count() }})
                                    </h4>
                                    <h6 class="card-subtitle mb-2 text-muted">
                                        description
                                    </h6>
                                    <a href="#">View Category</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach

    </div>
@endsection