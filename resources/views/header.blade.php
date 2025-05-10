@php
    use App\Http\Controllers\ProductController;
    $total = 0;
    if(Session::has('user')) {
        $total = ProductController::CartItem();
    }
@endphp

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="/">E-commerce</a>

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Add To Cart</a>
        </li>
      </ul>

      <form class="d-flex" action="/search">
        <div class="form-group">
          <input name="qu" class="form-control search-box" type="text" placeholder="Search">
        </div>
        <div>
          <button class="btn btn-default" type="submit">Search</button>
        </div>
      </form>

      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="/cartlist">Cart Item ({{ $total }})</a>
        </li>

        @if(Session::has('user'))
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button">
              {{ Session::get('user')['name'] }}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/logout">Logout</a></li>
            </ul>
          </li>
        @else
          <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
          </li>
        @endif
      </ul>
    </div>
  </div>
</nav>
