<?php
include("addressdb.php");

mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="index.css">
    <title>Address Book</title>
</head>
<body class="d-flex flex-column justify-content-center align-items-center">
  <header>
    <h1>Address Book</h1>
  </header>
  <main class="container mt-3" >
    <section class="container w-75 form-container border">
      <form action="contacts.php" method="post">
        <h2>New Contacts</h2>
        <div class="row">
          <div class="col-md-6">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
          </div>
          <div class="col">
            <label for="number" class="form-label">Phone Number:</label>
            <input type="number" class="form-control" id="number" placeholder="Enter phone number" name="number" required>
          </div>
        </div>
        <div class=" mt-3 mb-3">
          <label for="address" class="form-label">Home Address:</label>
          <input type="text" class="form-control" id="address" placeholder="Enter home address" name="address" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email:</label>
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
        </div>
        <input type="submit" name="submit" value="Add Contact" class="addBtn">
     
      </form>
    </section>
  </main>
</body>
</html>
