<html>
    <head>
    <title>resturant app</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"  crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Markazi+Text:wght@400;500;600&display=swap" rel="stylesheet">  
    <style>
    body {
    background-color: #EDEFEE;
    font-family: 'Markazi Text', serif;
    margin-top: 3rem;
    margin-bottom: 3rem;
    margin-left: 5%;
    margin-right: 5%;
}

h1 {
    font-size: 3rem;
    margin-top: 1.5rem;
    margin-bottom: 1.5rem;
}

h2 {
    font-size: 2.3rem;
}

p {
    font-weight: 400;
    font-size: 1.3rem;
}

header img {
    display: block;
    margin-left: auto;
    margin-right: auto;
}

nav {
    background-color: #333333;
    border-radius: 1rem;
    margin-top: 1rem;
    margin-bottom: 1rem;
}

nav ul {
    list-style: none;
    font-size: 2rem;
    text-align: center;
    padding-inline-start: 0rem;
}

nav ul li {
    display: inline-block;
    margin: 0.25rem;
}

nav ul a {
    color: #EDEFEE;
    text-decoration: none;
}

nav ul a:active {
    text-decoration: underline;
}

nav ul a:hover {
    text-decoration: underline;
    text-decoration-thickness: 0.1rem;
}

section {
    display: flex;
    gap: 2rem 1rem;
    margin-top: 1rem;
    margin-bottom: 1rem;
}

article {
    flex: 1;
    border-radius: 1rem;
    padding-bottom: 1.5rem;
}

article img {
    max-width: 100%;
}

article ul {
    list-style: none;
    font-size: 1.3rem;
}

article a:link {
    font-size: 1.3rem;
}

article a:hover {
    color: #495E57;
}

article a:active {
    color: #EDEFEE;
    background-color: #495E57
}

main article {
    background-color: #fbdabb79;
    padding-left: 1rem;
    padding-right: 1rem;
}

#hero {
    background-image: url("../assets/Asset 21.png");
    background-size: cover;
    background-position: center;
    color: #495E57;
    text-shadow: 2px 2px 8px #FFF9B0;
    text-align: right;
}

#hero h1 {
    margin-right: 2rem;
    font-weight: 600;
    font-size: 80px;
}

#hero p {
    max-width: 100%;
    margin-left: 16rem;
    margin-right: 2rem;
}

footer {
    margin: 1rem;
    display: flex;
    gap: 2rem 1rem;
}

footer img {
    max-width: 50%;
}

footer p {
    border-top: #333333;
    border-style: solid;
    border-width: 0.1rem;
    border-bottom: none;
    border-left: none;
    border-right: none;
    text-align: right;
}

footer div {
    flex: 1;
}
</style>
  </head>

<body>
    <header>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
  <a class="navbar-brand " href="#">Restaurant</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/list">List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/add">ADD</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
     
      
      <li class="nav-item">
        <a class="nav-link " href="/search">Search</a>
      </li>
    </ul>
    @if(session()->get('user'))
    
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
      <form action="/logout" method="post">
          @csrf
          <button type="submit" class="btn btn-link nav-link mt-3">Logout </button>
      </form>
      </li>
      
      </ul>

    <a class="nav-item nav-link" href="#">welcome user</a>
</div>
    @else
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="/login">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/register">Register</a>
      </li>
</ul>
</div>
    @endif
  </div>
</nav>
    </header>
    <div class="container">
        @yield('content')
    </div>
    <footer>
        <!-- copy right by naship resturent -->
    </footer>
</body>
</html>