<?php
session_start();
require_once '../MODEL/model.php';

$select_query = "SELECT * FROM `tripcost`";
$result = mysqli_query($connection, $select_query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>trip Details</title>
  <style>
    /* Basic CSS styles */
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th,
    td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
  </style>
</head>

<body>
  <?php include 'navbar_admin.php'; ?>
  <br><br>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-header">
          <h1 style="text-align: center;">Trip Details</h1>
        </div>

        <table id="myTable">
          <thead>
            <th>id</th>
            <th>Total Km</th>
            <th>Oil Cost</th>
            <th>Extra Cost</th>
            <th>Total Cost Cost</th>
          </thead>
          <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
              <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['total_km']; ?></td>
                <td><?php echo $row['oil_cost']; ?></td>
                <td><?php echo $row['extra_cost']; ?></td>
                <td><?php echo $row['total_cost']; ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script>
    // Basic JavaScript for table functionality
    document.addEventListener("DOMContentLoaded", function () {
      var table = document.getElementById("myTable");
      if (table) {
        table.classList.add("table", "table-bordered");
      }
    });
  </script>

</body>

</html>