<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "mydb1";
$conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$db = $conn;
$tableName = "bank";
$columns = ['bank_id', 'bank_name'];
$fetchData = fetch_data($db, $tableName, $columns);
function fetch_data($db, $tableName, $columns)
{
  if (empty($db)) {
    $msg = "Database connection error";
  } elseif (empty($columns) || !is_array($columns)) {
    $msg = "columns Name must be defined in an indexed array";
  } elseif (empty($tableName)) {
    $msg = "Table Name is empty";
  } else {
    $columnName = implode(", ", $columns);
    $query = "SELECT " . $columnName . " FROM $tableName";
    $result = $db->query($query);
    if ($result == true) {
      if ($result->num_rows > 0) {
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $msg = $row;
      } else {
        $msg = "No Data Found";
      }
    } else {
      $msg = mysqli_error($db);
    }
  }
  return $msg;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Data Retrival</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body background="dbm.jpg" style="background-repeat:no-repeat; background-attachment: fixed; background-size: cover;">
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
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <?php echo $deleteMsg ?? ''; ?>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <th>BankID</th>
              <th>BankName</th>
            </thead>
            <tbody>
              <?php
              if (is_array($fetchData)) {
                foreach ($fetchData as $data) {
              ?>
                  <tr>
                    <td><?php echo $data['bank_id'] ?? ''; ?></td>
                    <td><?php echo $data['bank_name'] ?? ''; ?></td>
                  </tr>
              <?php
                }
              } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>