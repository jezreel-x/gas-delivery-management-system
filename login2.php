<?php

// Set database credentials
$servername = "localhost";
$username = "root";
$password = "!@#$%Rm3^&*()";
$dbname = "mydb";

// Create a database connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get email and password from POST request
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare SQL statement to select user with matching email and password
$sql = "SELECT * FROM users WHERE email = '$email' AND passwd = '$password'";

// Execute SQL statement
$result = mysqli_query($conn, $sql);

// Check if any rows were returned
if (mysqli_num_rows($result) > 0) {
    // Email and password match
    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    header("Location: index3.html");

} else {
    // Email and password do not match
    echo "<strong>Invalid email or password.</strong>";
}

// Close the database connection
mysqli_close($conn);

?>





<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css" integrity=
    "sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51" crossorigin="anonymous">

    <title>Bootstrap 2</title>
  </head>
  <body style="background-color: lavender">
    <div class="container pt-3" style="width: 30rem;">

        <form class="card mb-3 needs-validation" action="login2.php" id="form" style="background-color: white" 
        novalidate method="POST">
            <div class="card-body">
                <h5 class="card-title mb-3" style="font-weight: bold;">Welcome!</h5>
                <h5 class="card-title mb-3" style="font-weight: bold;">Please fill in the form below to continue.</h5>

                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"><strong>Email address</strong></label>
                <input type="email" class="form-control" id="email" name="email" placeholder="name@gmail.com"
                style="border-color: cadetblue;" required>

                <div id="emailHelp" class="form-text mb-2">We'll never share your email with anyone else.
                </div>    
                <div class="invalid-feedback mb-1">
                    <strong>Please provide a valid email.</strong>
                </div>
              

                <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"><strong>Password</strong></label>
                <input type="password" class="form-control mb-2" id="password" name="password"
                style="border-color: cadetblue;" 
                required>
                
                </div>

                <div id="passwdWarning" class="form-text mb-2">
                    Your password must be 8-20 characters long, contain letters, numbers and special characters
                    and must not contain spaces or emoji.
                </div>

                <div class="invalid-feedback mb-1">
                    <strong>Please provide the correct password.</strong>
                </div>

                <div class="col-5">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" style="border-color: black;">
                    <label class="form-check-label mb-3" for="flexCheckDefault">
                        Remember me
                    </label>
                  </div>
                </div>
               

                <div class="row mt-2">
                  <!--
                  <a role="button" class="btn btn-outline-primary col-3 mb-3" href="index3.html">Sign In</a>
                  --> 
             
                  <button type="submit" class="btn btn-primary col-3 mb-3">Sign in</button>
               

                  <label class="form-label col-6 m-3">
                      <a href="index.html" style="--bs-link-opacity: 1.0">Not yet registered?</a>
                  </label>
                </div>
            </div>
        </form>
    </div>           
    
    

    <script>
        (() => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
      })
    })()
    </script>



    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity=
    "sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity=
    "sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    
  </body>
</html>

