<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}">My Company</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('product')}}">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('team')}}">Our teams</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('about')}}">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('contact')}}">Contact us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
