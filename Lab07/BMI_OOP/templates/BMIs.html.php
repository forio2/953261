<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      echo "BMI record have been submitted to the BMIs Database";
    ?>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">
                No.
            </th>
            <th scope="col" >
                Name
            </th>
            <th scope="col">
                Weight
            </th>
            <th scope="col" >
                Height
            </th>
            <th scope="col">
                BMI
            </th>
        </tr>
        </thead>
            <?php
            foreach($table as $x){
            ?>
            <tbody>
                <tr>
                    <td>
                      <?php 
                        echo "$x[0]"; 
                      ?>
                    </td>
                    <td>
                      <?php 
                        echo " $x[1]"; 
                      ?>
                    </td>
                    <td>
                      <?php echo "$x[2]"; ?>
                    </td>
                    <td>
                      <?php echo "$x[3]"; ?>
                    </td>
                    <td>
                      <?php echo "$x[4]"; ?>
                    </td>
                </tr>
                  <?php 
            }
                  ?>
            </tbody>
    </table>
</body>
</html>