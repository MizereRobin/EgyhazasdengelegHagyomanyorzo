
<?php
$title="Egyházasdengelegi Hagyományőrző Egyesület";
echo('

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>'+$title+'</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<nav>
<nav class="navbar bg-light navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="../img/cimer.png" style="width: 50px;margin-left: 12px;"  alt="Címer"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav nav-underline">
        
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Főoldal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Rólunk</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Kapcsolat</a>
          </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tevékenységünk
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Táborok</a></li>
            <li><a class="dropdown-item" href="#">Versenyek</a></li>
            <li><a class="dropdown-item" href="#">Rendezvények</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
');
?>