<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>App1</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
</head>
<body>
<header>
    <div class="container">
      <nav>
        <h2>BlogPage</h2>
        <ul>
          <li><a href="">Home</a></li>
          <li><a href="">Contact</a></li>
          <li><a href="{{route('register')}}" class="btn btn-success rounded-0">Register</a></li>
          <li><a href="{{route('login')}}" class="btn btn-dark rounded-0">Login</a></li>
        </ul>
      </nav>
      <div class="div">
        <a href="{{route('login')}}">Join Us</a>
      </div>
    </div>
</header>
</body>
</html>