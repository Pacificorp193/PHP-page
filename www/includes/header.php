<!DOCTYPE html>
<html>
<head>
    <title>My blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="/css/styles.css">
  </head>
  <body>

      <div class="container">

          <header>
              <h1>My blog</h1>
          </header>

          <nav>
              <ul class="nav">
                  <li class="nav-item"><a class="nav-link" href="/">Home</a></li>

                  <?php if (Auth::isLoggedIn()) : ?>

                      <li class="nav-item"><a class="nav-link" href="/admin/">Admin</a></li>
                      <li class="nav-item"><a class="nav-link" href="/logout.php">Log out</a></li>

                  <?php else : ?>

                      <li class="nav-item"><a class="nav-link" href="/login.php">Log in</a></li>

                  <?php endif; ?>

                  <li class="nav-item"><a class="nav-link" href="/contact.php">Contact</a></li>
              </ul>
          </nav>

          <main>
