<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('home')}}">Chatty</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    @if(Auth::check())
    <ul class="nav navbar-nav">
        <li><a href="{{ route('home') }}">Timeline</a></li>
        <li><a href="{{ route('friend.index') }}">Friends</a></li>
      </ul>
      <form class="navbar-form navbar-left" method="get" role="search" action="{{ route('search.results')}}">
        <div class="form-group">
          <input type="text" class="form-control" name="query" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>

    @endif
      
      <ul class="nav navbar-nav navbar-right">
      @if(Auth::check())
      <li><a href="{{ route('profile.index', ['username' =>Auth::user()->username])}}">{{Auth::user()->getNameOrUsername()}}</a></li>
      <li><a href="{{ route('profile.edit')}}">Update profile</a></li>
      <li><a href="{{ route('auth.signout')}}">Logout</a></li>

      @else
        <li><a href="{{route('auth.signup')}}">Sign up</a></li>
        <li><a href="{{ route('auth.signin')}}">Login</a></li>
      @endif

       
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>