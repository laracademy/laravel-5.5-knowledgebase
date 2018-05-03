<!-- navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
    <a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name', 'Knowledgebase') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample09">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}"><i class="fa fa-fw fa-home"></i> Home</a>
            </li>
            @if(auth()->check())
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}"><i class="fa fa-fw fa-dashboard"></i> Administration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="logout(); return false;"><i class="fa fa-fw fa-unlock"></i> Logout</a>
                </li>
            @endif
        </ul>
    </div>
</nav>
<!-- /navigation -->