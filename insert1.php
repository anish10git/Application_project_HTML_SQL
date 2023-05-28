<!DOCTYPE html>
<html>
<head>
    <title>Insert page1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body background="rr.jpeg" style="background-repeat:no-repeat; background-attachment: fixed; background-size: cover;">

<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
      <h2 class="navbar-brand">ANISH'S Project</h2>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="calculate.php">CalculateInterest</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.cibil.com/freecibilscore">CIBIL Score</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="apply.php">Apply</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              SeeDetails
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="bankretrieve.php">BANK</a></li>
              <li><a class="dropdown-item" href="loanretrive.php">LOAN</a></li>
              <li><a class="dropdown-item" href="interestRetrival.php">Interest Rate</a></li>
              <li><a class="dropdown-item" href="customerretrive.php">CustomerData</a></li>

            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <br><br><br>
    <center>
        <?php
        //database  connection
        $conn = mysqli_connect("localhost", "root", "", "mydb1");
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. ". mysqli_connect_error());
        }
        // Taking all 6 values from the form data(input)
        $Cname =  $_REQUEST['Cname'];
        $Cage = $_REQUEST['Cage'];
        $Cgender =  $_REQUEST['Cgender'];
        $Coccupation = $_REQUEST['Coccupation'];
        $Cemail = $_REQUEST['Cemail'];
        $Cphone = $_REQUEST['Cphone'];
        $loan_Name = $_REQUEST['LoanType'];
        $amount = $_REQUEST['amount'];

        $sql = "INSERT INTO customer  VALUES ('','$Cname',
            '$Cage','$Cgender','$Coccupation','$Cemail','$Cphone','$loan_Name','$amount')";
         if ($conn->query($sql) === TRUE) {
            echo " Data Sent to Banks successfully\n Thank You!!";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          $conn->close();
          ?>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>