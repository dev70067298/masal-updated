
    <body class="antialiased">
        {{-- @if(Session::has('success'))
<div class="alert alert-success alert-dismissible fade show {{ Session::get('alert-class', 'alert-success') }}" role="alert">
    {{ Session::get('success') }}
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
    @endif
    @if(Session::has('error'))

        <div class="alert alert-primary alert-dismissible fade show  {{ Session::get('alert-class', 'alert-danger') }}" role="alert">
		{{ Session::get('error') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
    @endif --}}

<nav class="navbar navbar-expand-xl navbar-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="./img/logo.png" alt="" width="60px" />
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ url('/about') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Places to stay</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Experiences</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Online Experiences</a>
          </li>
          <form class="d-flex">
            <input
              class="form-control me-2 search"
              type="search"
              placeholder="Search Here"
              aria-label="Search"
            />
            <button class="btn btn-outline-success search-btn" type="submit">
              <i class="fas fa-search text-white"></i>
            </button>
          </form>
        </ul>
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a
              class="nav-link active"
              aria-current="page"
              href="#"
              data-bs-toggle="modal" data-bs-target="#exampleModal"
              style="color: #0088ff"
              >signup</a
            >
          </li>
          <li class="nav-item">

            <a class="nav-link active"  style="color: #0088ff"
            aria-current="page" href="{{ url('/login') }}">login</a>

          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"
              ><img src="./img/world.png" width="30px" alt=""
            /></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"
              ><img src="./img/user.png" width="38px" alt=""
            /></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       @include('researcher.signup')
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>
