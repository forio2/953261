<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <a href="ShowGuestBook.php">Show Guest Book</a>
    <a href="index.php">Home</a>
    <h1>The following visitors have signed our guest book</h1>

    <?php
        $pdoStmt = $pdo->query('Select * FROM GuestBook');
        $count = $pdoStmt->fetchAll();
    ?>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">
                  First name
                </th>
                <th scope="col" >
                  Last name
                </th>
            </tr>
        </thead>
              <?php
              foreach($count as $x) {
                ?>
                <tbody>
                    <tr>
                        <td>
                            <?php echo $x[1]; ?>
                        </td>
                        <td>
                            <?php echo $x[2]; ?>
                    </tr>
                  <?php  
              }
                  ?>
                </tbody>
            </table>
</body>
</html>