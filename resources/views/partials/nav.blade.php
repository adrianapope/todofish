<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/tasks">ToDoFish</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        @if (Auth::user())
          <li role="presentation">
            <a href="/auth/logout"><span class="btn btn-default" role="button">Logout</span></a></li>
           <li role="presentation">
            <a href="/tasks/create"><span class="btn btn-info" role="button">Create New Task</span></a></li>
        @else
          <li role="presentation">
            <a href="/auth/login"><span class="btn btn-primary" role="button">Login</a></li>
          <li role="presentation">
            <a href="/auth/register"><span class="btn btn-info" role="button">Sign Up</a></li>
        @endif
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>