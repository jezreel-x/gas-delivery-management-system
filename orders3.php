<?php

  // connect to the database
  $host = 'localhost';
  $username = 'root';
  $password = '!@#$%Rm3^&*()';
  $database = 'mydb';

  $connection = mysqli_connect($host, $username, $password, $database);

  // check if the connection was successful
  if (mysqli_connect_errno()) {
    die('Failed to connect to MySQL: ' . mysqli_connect_error());
  }


  // get the ID number and phone number from the form
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $id_number = $_POST['id_number'];
  $phone_number = $_POST['phone_number'];
  $location = $_POST['location'];
  $gasType = $_POST['gasType'];


  
  // prepare the SQL query to check if the user exists in the database
  $query = "SELECT * FROM Refill";

  // execute the query
  $result = mysqli_query($connection, $query);

  // check if the user already exists
  /*
  if (mysqli_num_rows($result) > 0) {

    echo '<strong style="text-align: center;">User already exists!</strong>';

  } else {
  */
    // prepare the SQL query to insert the data into the database
    $insert = "INSERT INTO Refill (firstName, lastName, id_number, phone_num, location, gas_type) 
    VALUES ('$firstName', '$lastName', '$id_number', '$phone_number', '$location', '$gasType')";

    // execute the query
    if (mysqli_query($connection, $insert)) {
      echo '<strong>Order placement successful! We shall contact you upon arrival.</strong>';
      /*
      $_SESSION['id_number'] = $id_number;
      header("Location: index3.html");
      exit();
      */
    } else {
      echo 'Error registering user: ' . mysqli_error($connection);
    }

  

  // close the database connection
  mysqli_close($connection);


?>


<!--
<form method="POST">
  <label for="id_number">ID Number:</label>
  <input type="text" id="id_number" name="id_number">

  <label for="phone_number">Phone Number:</label>
  <input type="text" id="phone_number" name="phone_number">

  <button type="submit">Submit</button>
</form>
-->