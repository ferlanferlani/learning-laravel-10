<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Ferlan Ferlani | {{ $title }}</title>
 <!-- css files -->
 <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body>

 <!-- navbar section -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-danger shadow-sm">
  <div class="container">
   <a class="navbar-brand" href="/">Content Management System</a>
   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
     <li class="nav-item">
      <a class="nav-link {{ ($title === 'Home') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
     </li>
     <li class="nav-item">
      <a class="nav-link {{ ($title === 'About') ? 'active' : '' }}" href="/about">About</a>
     </li>
    </ul>
   </div>
  </div>
 </nav>
 <!-- end navbar section -->

 <!-- main content -->
 <div class="container mt-5">
  @yield('container')
 </div>
 <!-- end main content -->

 <script type="text/javascript" href="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>