<?php  
require 'db.php'; 
if(isset($_GET['updateId']))
$data =  $obj->FetchForUpdate($_GET['updateId']);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Wajii Bhai</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/checkout/">

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h2>Karachi Club</h2>
    <p class="lead">Wajji Bhai the Great Pvt Ltd</p>
  </div>

  <div class="row">
    
    <div class="col-md-8 order-md-1">
      <?php if (isset($_GET['updateId'])): ?>


          <h4 class="mb-3">Karachi Club Update Form</h4>
          <form class="needs-validation" method="POST" action="process.php" novalidate>
        <div class="row">
          <div class="col-md-12">
            <input type="hidden" class="form-control"  name="updateId"  value="<?=$data[0]['reg_id']; ?>" required>
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="" value="<?=$data[0]['name']; ?>" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="username">Username</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?=$data[0]['username']; ?>"required>
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="Password">Password</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" id="Password" name="password" value="<?=$data[0]['password']; ?>" required>
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div>

         <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <?php if ($data[0]['gender'] == 1): ?>
                   <input id="male" name="gender" type="radio" class="custom-control-input" value="1" checked required>
            <?php else: ?>
                  <input id="male" name="gender" type="radio" class="custom-control-input" value="1" required>
            <?php endif; ?>
            <label class="custom-control-label" for="male">Male</label>
          </div>
          <div class="custom-control custom-radio">
             <?php if ($data[0]['gender'] == 0): ?>
                  <input id="female" name="gender" type="radio"  class="custom-control-input" value="0" checked required>
            <?php else: ?>
               <input id="female" name="gender" type="radio"  class="custom-control-input" value="0" required>
            <?php endif; ?> 
            <label class="custom-control-label" for="female">Female</label>
          </div>
        </div>

        <div class="mb-3">
          <label for="Password">Contact #</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">#</span>
            </div>
            <input type="number" class="form-control" id="Password" value="<?=$data[0]['contact_no'] ?>" name="contact_no" required>
            <!-- <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div> -->
          </div>
        </div>


        <div class="mb-3">
          <label for="address">Address</label>
          <input type="text" class="form-control" id="address"  name="address" value="<?=$data[0]['address'] ?>" required>
          <div class="invalid-feedback">
          </div>
        </div>

        <hr class="mb-4">
        <div class="row justify-content-center">
           <div class="col-md-4">
          <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit" value="update">Update up</button>
        </div>
        </div>
       
      </form>



      <?php else: ?>



          <h4 class="mb-3">Karachi Club Registration Form</h4>
          <form class="needs-validation" method="POST" action="process.php" novalidate>
        <div class="row">
          <div class="col-md-12">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="username">Username</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="Password">Password</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="password" class="form-control" id="Password" name="password" placeholder="Username" required>
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div>

         <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="male" name="gender" type="radio" class="custom-control-input" value="1" checked required>
            <label class="custom-control-label" for="male">Male</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="female" name="gender" type="radio"  class="custom-control-input" value="0" required>
            <label class="custom-control-label" for="female">Female</label>
          </div>
        </div>

        <div class="mb-3">
          <label for="Password">Contact #</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">#</span>
            </div>
            <input type="number" class="form-control" id="Password" placeholder="Number" name="contact_no" required>
            <!-- <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div> -->
          </div>
        </div>


        <div class="mb-3">
          <label for="address">Address</label>
          <input type="text" class="form-control" id="address"  name="address" placeholder="1234 Main St" required>
          <div class="invalid-feedback">
          </div>
        </div>

        <hr class="mb-4">
        <div class="row justify-content-center">
           <div class="col-md-4">
          <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit" value="reg">Sign up</button>
        </div>
        </div>
       
      </form>


      <?php endif; ?>

       
      
    </div>
  </div>
        

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; Wajji the Great</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>