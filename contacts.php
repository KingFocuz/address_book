<?php
include("addressdb.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone_num =  filter_var($_POST["number"], FILTER_SANITIZE_NUMBER_INT);
    $home_add = $_POST["address"];
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

    $sql = "INSERT INTO contacts (name, number, email, address) VALUES('$name', '$phone_num', '$email', '$home_add')";
    $sql_data = "SELECT * FROM contacts";
    $results = mysqli_query($conn, $sql_data);
    
    /*if(mysqli_num_rows($results) > 0) {
        while($row = mysqli_fetch_assoc($results)) {
            foreach($row as $data) {
                echo $data . "<br>";
            }
        };
        echo "Contacts already exist";
    };*/
    try {
        mysqli_query($conn, $sql);
        echo "
            <div class='alert alert-success alert-dismissible'>
                <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                <strong>Contact</strong> added successfully!
            </div>";
    } catch(mysqli_sql_exception) {
        if(mysqli_num_rows($results) > 0) {
            echo "
            <div class='alert alert-warning alert-dismissible'>
                <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                <strong>Contact!</strong> Already exist
            </div>";
        };
       
    }
    
    
}

mysqli_close($conn)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Contact</title>
</head>
<body class=" container-fluid d-flex flex-column justify-content-center align-content-center align-items-center">
    <main class=" container d-flex flex-column p-2 justify-content-center align-content-center">
        <div class="align-self-center border border-primary p-2 mt-4 rounded-3 bg-primary">
          <a href="index.php" class="link-offset-2 link-offset-3-hover link-light fs-5 link-underline-opacity-0 link-underline-opacity-75-hover">Add new contact</a>
        </div>
        <!-- <div class="table-responsive">
            <table class="table d-none" id="table">
                <thead class="table-dark">
                    <tr>
                        <th>Id</th>
                        <th>name</th>
                        <th>Number</th>
                        <th>Email</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                // To display the database data on a table when a button is clicked


                /*$sql_data = "SELECT * FROM contacts";
                $results = mysqli_query($conn, $sql_data);
                if(mysqli_num_rows($results) > 0) {
                    //while($row = mysqli_fetch_assoc($results)) {
                        foreach($results as $datas => $data) {
                          echo "<tr><td>" . $data["id"] . "</td>" .
                           "<td>" .  $data["name"] . "</td>" . 
                           "<td>" . $data["number"] . "</td>" . 
                           "<td>" . $data["email"] . "</td>" . 
                           "<td>" . $data["address"] . "</td>" .
                           "</td></tr>";
                        }
                    };
               // }
                mysqli_close($conn); */
                ?> 

                </tbody>
            </table> -->
        </div>
    </main>
</body>
</html>