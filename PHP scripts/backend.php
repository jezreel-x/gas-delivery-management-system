<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $data = $_POST['data'];
  // Process the data here
  echo "Data received: " . $data;
}
?>
