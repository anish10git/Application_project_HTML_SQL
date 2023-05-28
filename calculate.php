<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HOME</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body background="money.jpg" style="background-repeat:no-repeat; background-attachment: fixed; background-size: cover;">
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
  <center>
    <br><br>
    <h1>Let's Calculate Interest: </h1>
    <form action="insert2.php" method="post">
      <br><br>

      <p>
        <label for="LoanType"> Choose Loan Type: </label>
        <select name="LoanType" id="LoanType">
          <option>choose Loan</option>
          <option value="HOME">Home Loan</option>
          <option value="PERSONAL">Personal Loan</option>
          <option value="CAR">Car Loan</option>
          <option value="STUDY">Study Loan</option>
          <option value="BUSINESS">Business Loan</option>
        </select>
      </p>
        <br>
      <p>
        <label for="Amount">Principle Amount:</label>
        <input type="number" name="amount" id="principleAmount">
      </p>
      <p>
        <label for="year">Tennure(in Years.):</label>
        <input type="number" default=1 name="year" id="year">
      </p> <br>
      <input type="submit" name="save_select" value="Calculate">
    </form>
  </center>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>