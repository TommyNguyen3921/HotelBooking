<nav class="navbar navbar-expand navbar-dark bg-dark" aria-label="Second navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href={{ url('/')}}>Hotel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ">
          <li class="nav-item {{'/'== request()->path() ? 'active' : ''}}">
            <a class="nav-link " aria-current="page" href={{ url('/')}}>Rooms</a>
          </li>
          <li class="nav-item {{'prooms'== request()->path() ? 'active' : ''}}">
            <a class="nav-link" href={{ url('prooms')}}>Bookings</a>
          </li>
          <li class="nav-item {{'about'== request()->path() ? 'active' : ''}}">
            <a class="nav-link" href={{ url('about')}}>About</a>
          </li>
         
        </ul>
      </div>
    </div>
  </nav>