<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="index.php" method="POST">
            <div class="form-group">
                <label for="inputName">Name: </label>
                <input type="text" class="form-control" id="inputName" name="Name" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="inputWeight">Weight: </label>
                <input type="text" class="form-control" id="inputWeight" name="Weight" placeholder="Weight">
                <small id="weightHelp" class="form-text text-muted">in kg</small>
            </div>
            <div class="form-group">
                <label for="inputHeight">Height: </label>
                <input type="text" class="form-control" id="inputHeight" name="Height" placeholder="Height">
                <small id="heightHelp" class="form-text text-muted">in m^2</small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </div>
</body>
</html>