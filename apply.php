<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HOME</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<style>
  label{
display:inline-block;
width:50px;
margin-right:40px;
text-align:right;
}
fieldset{
border:none;
width:500px;
margin:0px auto;
}
</style>
</head>

<body background="coin.jpg" style="background-repeat:no-repeat; background-attachment: fixed; background-size: cover;">
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
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <center>
    <br><br>
    <h1>Application Form:</h1> <br>
    <form action="insert1.php" method="post">

      <p>
        <label for="name">Name:</label>
        <input type="text" name="Cname" id="name">
      </p>


      <p>
        <label for="age">AGE: </label>
        <input type="number" name="Cage" id="age">
      </p>


      <p>
        <label for="Gender">Gender: </label>
        <input type="text" name="Cgender" id="Gender">
      </p>


      <p>
        <label for="occupation">Occupation:</label>
        <input type="text" name="Coccupation" id="occupation">
      </p>

      <p>
        <label for="emailAddress">Email:</label>
        <input type="email" name="Cemail" id="emailAddress">
      </p>

      <p>
        <label for="phoneNumber">Contact:</label>
        <input type="number" name="Cphone" id="phoneNumber">
      </p>
       <p>
        <label for="LoanType">LoanType: </label>
        <select name="LoanType" id="LoanType">
          <option>choose Loan</option>
          <option value="HOME">Home Loan</option>
          <option value="PERSONAL">Personal Loan</option>
          <option value="CAR">Car Loan</option>
          <option value="STUDY">Study Loan</option>
          <option value="BUSINESS">Business Loan</option>
        </select>
      </p>
      <p>
        <label for="Amount">Principle Amount:</label>
        <input type="number" name="amount" id="principleAmount">
      </p>
      <input type="submit" value="Submit">
    </form>
  </center>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>