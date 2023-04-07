<?php
$insert=false;
$servername="localhost";
$username="root";
$password="";
$database="GYM";
$conn = mysqli_connect($servername,$username,$password,$database);

if (!$conn) {
    die("sorry! we failed to connect" . mysqli_connect_error());
}
$id=$_GET['updateid'];
$sql="SELECT * FROM `customers` WHERE `c_no`='$id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$email=$row["email"];
$contact_no=$row["contact_no"];
$description=$row["description"];
if ($_SERVER['REQUEST_METHOD']=='POST') {
$email=$_POST["email"];
$contact_no=$_POST["contact_no"];
$description=$_POST["description"];
$sql="UPDATE `customers` SET `c_no`='$id', `email` = '$email', `contact_no` = '$contact_no', `description` = '$description' WHERE `c_no` = '$id' ";
$result=mysqli_query($conn,$sql);

if($result) {
header('location:updel.php');
  }
else {
 echo "the query was not recorded successfully because of this error-->";
}
}
// }
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>contact us page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
  <div class="background">
    <!-- navbar starts hear -->
    <nav class="navbar navbar-expand-lg " style="background-color: #afd6f2;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">BeFit</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="/gym/gymregistration.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/gym/about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/gym/contact_us.php">Contact Us</a>
            </li>
          </ul>
          <!-- <button type="button" class="btn btn-outline-danger d-flex" type="submit">login</button>
          <button type="button" class="btn btn-outline-primary d-flex " type="submit"
            style="margin-left:5px ;">register</button> -->

        </div>
      </div>
    </nav>

    <div class="continue">
      <img src="1.jpg" alt="image">
      <!-- // one form mustbe put here -->
      <div class="formfill container">
        <form method="POST">
          <div class="mb-1">
            <label for="email" class="form-label"> Enter your email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value=<?php echo $email; ?>>
          </div>
          <div class="mb-1">
            <label for="contact_no" class="form-label"> Enter contact no</label>
            <input type="number" class="form-control" id="contact_no" name="contact_no" value=<?php echo $contact_no; ?>>
          </div>
          <div class="mb-3">
            <label for="description" class="form-label" >Write your querries here</label>
            <textarea class="form-control" id="description" name="description" rows="3"  ></textarea>
          </div>
          <button type="submit" class="btn btn-primary">update</button>

        </form>
      </div>


      <footer class="container" style="position:relative; top: 90px;">
        <!-- <p class="float-end"><a href="#">Back to top</a></p> -->
        <p class="ml-14">ruvigym © 2022–2023 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
      </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"></script>
    <style>
      .continue img {
        display: flex;
        height: 100vh;
        width: 100vw;
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
      }

      .formfill {
        width: 600px;
        margin-left: 22px;
        margin-top: 22px;
        margin-bottom: 150px;
      }

      .formfill label {
        color: rgb(92, 227, 215);
      }

      .container p {
        color: rgb(37, 6, 78);
      }

      .updelcont #para {
        background-color: wheat;
        margin-top: 22px;
      }
    </style>
</body>

</html>