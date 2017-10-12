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

  <div class="row">

    <div class="col">
      <div class="card-group">

        <div class="card">
        <div class="card-body">
          <h4 class="card-title">
            Item A (2)
          </h4>
          <h6 class="card-subtitle mb-2 text-muted">
            With this Item A
          </h6>
          <a href="#">View Category</a>
        </div>
      </div>

        <div class="card">
        <div class="card-body">
          <h4 class="card-title">
            Item B (4)
          </h4>
          <h6 class="card-subtitle mb-2 text-muted">
            With this Item B
          </h6>
          <a href="#">View Category</a>
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <h4 class="card-title">
            Item C (1)
          </h4>
          <h6 class="card-subtitle mb-2 text-muted">
            With this Item C
          </h6>
          <a href="#">View Category</a>
        </div>
      </div>

      </div>
    </div>

  </div>

  <div class="row">

    <div class="col">
      <div class="card-group">

        <div class="card">
        <div class="card-body">
          <h4 class="card-title">
            Item D (8)
          </h4>
          <h6 class="card-subtitle mb-2 text-muted">
            With this Item D
          </h6>
          <a href="#">View Category</a>
        </div>
      </div>

        <div class="card">
        <div class="card-body">
          <h4 class="card-title">
            Item E (7)
          </h4>
          <h6 class="card-subtitle mb-2 text-muted">
            With this Item E
          </h6>
          <a href="#">View Category</a>
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <h4 class="card-title">
            Item F (10)
          </h4>
          <h6 class="card-subtitle mb-2 text-muted">
            With this Item F
          </h6>
          <a href="#">View Category</a>
        </div>
      </div>

      </div>
    </div>

  </div>

</div>

@endsection