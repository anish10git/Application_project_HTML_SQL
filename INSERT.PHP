<?php
        //database connection
        $conn = mysqli_connect("localhost", "root", "", "mydb1");
        if ($conn === false) {
          die("ERROR: Could not connect. " . mysqli_connect_error());
        }
         // data retrival form form
        $loan_id = $_POST['LoanType'];
        $amount =  $_POST['amount'];
        $year = $_POST['year'];

        $sql = "SELECT interests FROM b_interest WHERE loan_id = '$loan_id'";
        $resul = mysqli_query($conn, $sql);
        $num_results = mysqli_num_rows($result);
        
        ?>

        <!DOCTYPE html>
        <html>
        <head>
          <title>Data Retrival</title>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        </head>
        <body background="rr.jpeg" style="background-repeat:no-repeat; background-attachment: fixed; background-size: cover;">
          <!-- code for nav bar --> 
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
  <!-- code for nav is ending -->
          <br><br><br>
          <div class="container">
            <div class="row">
              <div class="col-sm-8">
                <?php echo $deleteMsg ?? ''; ?>
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <th>Bank Name</th>
                      <th>Loan Type</th>
                      <th>Interest Rate(in %)</th>
                      <th>PrincipleAmount</th>
                      <th>Installment</th>
                      <th>Total Amount </th>
                    </thead>
                    <tbody>
                      <?php
                      $db = $conn;
                     
                        $sql5 = "SELECT bank.bank_name, b_interest.interests FROM b_interest inner join loan on b_interest.loan_id = loan.loan_id INNER JOIN bank ON b_interest.bank_id = bank.bank_id WHERE loan.loan_id ='$loan_id'";
                        $result = mysqli_query($conn, $sql5);
                      while ($row = mysqli_fetch_assoc($resul)) {
                        $installment = (float)(($row['interests'] * $amount * $year) / 100);
                        $total = (float)($amount + $installment);
                      ?>
                        <tr>
                          <td><?php echo $row['bank.bank_name'] ?? ''; ?></td>
                          <td><?php echo $loan_id ?? ''; ?></td>
                          <td><?php echo $row['b_interest.interests'] ?? ''; ?></td>
                          <td><?php echo $amount ?? ''; ?></td>
                          <td><?php echo $installment ?? ''; ?></td>
                          <td><?php echo $total ?? ''; ?></td>
                        </tr>
                      <?php
                      }
                      mysqli_close($conn); ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        </body>

        </html>