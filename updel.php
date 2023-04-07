<?php

$servername="localhost";
$username="root";
$password="";
$database="GYM";
$conn = mysqli_connect($servername,$username,$password,$database);
if (!$conn) {
    die("sorry! we failed to connect" . mysqli_connect_error());
}
 ?>
 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>contact us page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
   
  </head>
  <body>

    <div class="background">
     <!-- navbar starts hear -->
     <nav class="navbar navbar-expand-lg " style="background-color: #afd6f2;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">BeFit</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="/sports/sportsregistration.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="/sports/about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/sports/contact_us.php">Contact Us</a>
              </li>
            </ul>
            <!-- <button type="button" class="btn btn-outline-danger d-flex" type="submit">login</button>
            <button type="button" class="btn btn-outline-primary d-flex " type="submit" style="margin-left:5px ;">register</button> -->
           
          </div>
        </div>
      </nav>
     <div class="container">
     <table class="table " id="myTable">
  <thead>
    <tr>
      <th scope="col">SNO</th>
      <th scope="col">Title</th>
      <th scope="col">Contact_no</th>
      <th scope="col">Description</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

  <?php
  
$sql="SELECT * FROM `customers`";
$result=mysqli_query($conn,$sql);
while($row =mysqli_fetch_assoc($result)) {
    $id=$row['c_no'];
    $email=$row['email'];
    $contact_no=$row['contact_no'];
    $description=$row['description'];
 echo " <tr>
 <th scope='row'>".$id."</th>
 <td>".$email."</td>
 <td>".$contact_no."</td>
 <td>".$description."</td>
 <td><button class='btn btn-primary'><a href='update.php? updateid=".$id."' class='text-light'>update</a></button>  <button class='btn btn-danger'> <a href='delete.php? deleteid=".$id."' class='text-light'>delete</a> </button></td>
</tr>";

}
?>
   
  </tbody>
</table>
</div>

      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script
  src="https://code.jquery.com/jquery-3.6.1.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
  crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
  </body>
</html>