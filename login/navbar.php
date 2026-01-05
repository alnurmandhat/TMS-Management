<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<style>
    .navbar-dark {
            background-color: white;
        }

        .navbar-dark .navbar-nav .nav-link {
            color: black;
        }

        /* .navbar-dark .navbar-nav .nav-link:hover {
            color: white;
            background-color: #ff3333;
        } */
</style>

</head>
<body>

<nav class="navbar navbar-expand-sm bg-transperent navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">My profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Change password</a>
        </li>
        <li class="nav-item">
          <!-- <a class="nav-link" href="#">Link</a> -->
          <a href="tour-history.php" class="nav-link" >My tour history</a>
        </li>  
        <li>
        <a href="issue-tickets.php" class="nav-link">Issue tickets</a>
        </li>  
        <li>
            <a href="home.php" class="nav-link"><input type="submit" value="Logout" style="background-color:white; border:1px solid black;"></a>
            <!-- <a href="home.php" class="nav-link" >Logout</a> -->
        </li>
      </ul>
    </div>
  </div>
</nav>

</body>
</html>


