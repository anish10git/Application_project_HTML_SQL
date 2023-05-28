<?php
        $conn = mysqli_connect("localhost", "root", "", "mydb1");
        if ($conn === false) {
          die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        $loan_Name = $_POST['LoanType'];
        $amount =  $_POST['amount'];
        $year = $_POST['year'];

        $sql = "SELECT interestRate FROM interest WHERE loan_Name = '$loan_Name'";
        $result = mysqli_query($conn, $sql);
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

          <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
            <div class="container-fluid">
              <h2 class="navbar-brand">ANISH'S Project</h2>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="two.php">CalculateInterest</a>
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
          <div class="container">
            <div class="row">
              <div class="col-sm-8">
                <?php echo $deleteMsg ?? ''; ?>
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <th>Bank</th>
                      <th>LoanName</th>
                      <th>Interest Rate(in %)</th>
                      <th>Principle</th>
                      <th>Installment</th>
                      <th>Total Amount </th>
                    </thead>
                    <tbody>
                      <?php
                      $db = $conn;
                      $tableName = "interest";
                      $sql5 = "SELECT bank_name, interestRate FROM interest WHERE loan_Name = '$loan_Name'";
                      $resul = mysqli_query($conn, $sql5);
                      while ($row11 = mysqli_fetch_assoc($resul)) {
                        $installment = (float)(($row11['interestRate'] * $amount * $year) / 100);
                        $total = (float)($amount + $installment);
                      ?>
                        <tr>
                          <td><?php echo $row11['bank_name'] ?? ''; ?></td>
                          <td><?php echo $loan_Name ?? ''; ?></td>
                          <td><?php echo $row11['interestRate'] ?? ''; ?></td>
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