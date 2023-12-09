<?php
require_once 'php\init.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid bg-dark">
  <nav class="navbar bg-dark  border-body" data-bs-theme="dark">
    <div class="container-fluid ">
      <div class="navbar-brand text-light fst-italic">BrewFlow</div> 
      <nav class="navbar">
  <form class="container-fluid justify-content-start">
    <button class="btn btn-outline-success me-2 mr-4 fst-italic" type="button"><a  class=" text-light link-line-opacity-0" href="index.php">HOME</a></button>
    <button class="btn btn-md btn-outline-secondary mr-2 fst-italic" type="button"><a  class=" text-light link-line-opacity-0" href="https://google.com">EXIT</a></button>
  </form>
</nav>
    </div>
  </nav>
</div>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Create Account</h2>
                </div>
                <div class="card-body">
                    <form action="main.php" method="post">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" pattern=".{6,}" title="Password must be at least 6 characters" required>
                        </div>

                        <div class="form-group">
                            <label for="confirm_password">Confirm Password:</label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Create Account</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and Popper.js (required for Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>
