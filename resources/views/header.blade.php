<?php
use App\Http\Controllers\ProductController;
$total=0;
if(session::has('user'))
{
    $total=ProductController::CartItem();
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="/">E-commerce</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#" aria-current="true">Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Add To Cart</a>
        </li>


      </ul>
      <form class="d-flex" action="/search" class="navbar-form navbar-left">
        <div class="form-group">
            <input name="qu" class="form control search-box" type="text" placeholder="Search" aria-label="Search">
        </div>
        <div>
            <button class="btn btn-default" type="submit">Search</button>
        </div>
    </form>
    <ul class="nav nav-bar-nav nav-bar-right">
        <li><a href="#">Cart Item ({{$total}})</a></li>
        @if(Session::has('user')){
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="/logout">Logout</a></li>

                </ul>
            </li>
        @else
        }else{
            <li><a href="/login">login</a></li>

        }
    </div>
  </div>
</nav>
