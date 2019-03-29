<?php
session_start();
if (!isset($_SESSION['logged'])) {
    header('Location:admin.html');
} else {
    
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>My Web Site</title>
</head>

<body>
    <div class="container">
        <div id="heading"><span>Въвеждане на данни</span></div>
        <form>
            <div class="form-group">
                <label for="cityName">Име на града:</label>
                <input type="text" class="form-control" id="cityName" name="cityName">
            </div>
            <div class="form-group">
                <label for="description">Описание:</label>
                <textarea class="form-control" rows="4" id="description" name="description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" id="upload">Качи данните</button>
            <a href="index.php" class="btn btn-secondary exit" id="exit">Изход</a>
        </form>


    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrit000000000y="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>

</html>
<?php
}
?>