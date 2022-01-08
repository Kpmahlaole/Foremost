<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">     
    
    <title>Foremost</title>
  </head>
  <body>
  <div class="sticky-top">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="dashboard.php"><strong>FOREMOST</strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" i class="fa fa-folder" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-bag-check-fill"></i>&nbsp;Sales
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="newbusiness.php" >New Business</a></li>
            <li><a class="dropdown-item" href="#">My Performance</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" i class="fa fa-folder" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-check-fill"></i>&nbsp;Service
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="capturepayment.php" >Capture Payment</a></li>
            <li><a class="dropdown-item" href="viewpayments.php">View Payments</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="test.php">Suggest a function</a></li>
          </ul>
        </li>
      </ul>
      <form>
      <?php echo 'singed in as: ' . get_current_user();?>
        <button class="btn btn-secondary" type="submit">Logout</button>
      </form>
    </div>
  </div>
</nav>
</div>