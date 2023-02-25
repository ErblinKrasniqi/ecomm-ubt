<?php 
  include_once './includes/dbh.inc.php';

  // check if user clicked the delete button
  if (isset($_POST['delete'])) {
    $id = $_POST['delete'];
    $sql = "DELETE FROM users WHERE usersId=$id";
    mysqli_query($conn, $sql);
    header("Refresh:0");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Table</title>

    <link rel="stylesheet" href="css/style.css">

    <style>


        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 200px;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #ddd;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .delete-button {
            background-color: #f44336;
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .delete-button:hover {
            background-color: #d6372a;
        }
    </style>
</head>
<body>
<?php
    include_once("header.php");

    ?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM users;";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if($resultCheck > 0){
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['usersId'] . "</td>";
                        echo "<td>" . $row['usersUid'] . "</td>";
                        echo "<td>" . $row['usersEmail'] . "</td>";
                        echo "<td>" . $row['usersName'] . "</td>";
                        echo "<td>
                                <form method='POST' action=''>
                                    <button type='submit' name='delete' value='" . $row['usersId'] . "'>Delete</button>
                                </form>
                              </td>";
                        echo "</tr>";
                    }
                }
            ?>
            
        </tbody>
    </table>

</body>
</html>
