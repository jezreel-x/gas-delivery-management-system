<?php
// Establish a database connection
$servername = "localhost";
$username = "root";
$password = "!@#$%Rm3^&*()";
$dbname = "mydb";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the email and password from the form submission
$email = $_POST['email'];
$password = $_POST['password'];

// Check if the user exists in the database
$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // User already exists, return an error
    echo "<strong>User already exists</strong>";
} else {
    // User does not exist, insert their email and password into the database
    $sql = "INSERT INTO users (email, passwd) VALUES ('$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "<strong>New record created successfully</strong>";

        $_SESSION['email'] = $email;
        header("Location: index3.html");
        exit();

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>


<!--
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css" 
    integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51" crossorigin="anonymous">

    <title>Bootstrap code</title>
  </head>
  <body style="background-color: lavender">
    <div class="container pt-3" style="width: 30rem;">
        <form class="card mb-3 needs-validation" action="signup.php" style="background-color: white" 
         method="post" novalidate>
            <div class="card-body">
                <h5 class="card-title mb-3" style="font-weight: bold;">Welcome!</h5>
                <h5 class="card-title mb-3" style="font-weight: bold;">Please fill in the form below to continue.</h5>

                <div class=" mb-3">
                  <label for="exampleInputEmail1" class="form-label"><strong>Email address</strong></label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="name@gmail.com"
                  style="border-color: cadetblue;" name="email" required>
                  
                  <div id="emailHelp" class="form-text mb-4">We'll never share your email with anyone else.
                  </div>    
                
                  <div class="invalid-feedback">
                      <strong>Please provide a valid email.</strong>
                  </div>
             
                </div>  
              

                <div class=" mb-3">
                    <label for="exampleInputPassword1" class="form-label"><strong>Password</strong></label>
                    <input type="password" class="form-control mb-2" id="exampleInputPassword1"
                    style="border-color: cadetblue;" name="password" required>
                    

                    <div id="passwdWarning" class="form-text mb-4">
                        Your password must be 8-20 characters long, contain letters, numbers and special characters
                        and must not contain spaces or emoji.
                    </div>

                   
                    <div class="invalid-feedback">
                      <strong>Please provide a password.</strong>
                    </div>
               
                </div>

                <div class="mb-4">
                  <label for="exampleInputPassword1" class="form-label"><strong>Confirm Password</strong></label>
                  <input type="password" class="form-control" id="exampleInputPassword2" 
                  style="border-color: cadetblue;" required>
              
                  
                  <div class="invalid-feedback">
                    <strong>Please confirm the password entered above.</strong>
                  </div>
                

                </div>

                
                <div>
                <a role="button" class="btn btn-outline-primary col-3 mb-3" href="index3.html">Sign Up</a>
                </div>
              -->

                <!--
                <div class="col-5">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" style="border-color: black;">
                    <label class="form-check-label mb-3" for="flexCheckDefault">
                    Remember me
                    </label>
                  </div>
                </div>
                 
                <div>
                  <button type="submit" class="btn btn-primary col-3 mb-3">Sign up</button>
                </div>

                <div class="row mt-3">
                    <label for="registration" class="form-label col-6">Already signed up?</label>
                    <label class="form-label col-4">
                      <a href="index2.html" style="--bs-link-opacity: 1.2">Sign In</button>
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
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" 
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" 
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" 
    crossorigin="anonymous"></script>

  

  </body>
</html>
    -->

