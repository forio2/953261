<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">
                    No.
                </th>
                <th scope="col" >
                    Name
                </th>
            </tr>
        </thead>
            <tbody>
                <?php
                foreach($result as $x){
                    echo "<tr>";
                    echo "<td>".$x['id']."</td>";
                    echo "<td>".$x['songname']."</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
    </table>
</body>
</html>