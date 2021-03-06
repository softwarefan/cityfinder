<?php
session_start();
if (isset($_SESSION['logged'])) {
    header("Location:upload.php");
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
            <div id="heading"><span>Потребителски панел</span></div>
            <form class="login-form">
                <div class="form-group">
                    <label for="user-name">Потребителско име:</label>
                    <input type="text" class="form-control" id="user-name" name="user-name" />
    
                </div>
                <div class="form-group">
                    <label for="password">Парола:</label>
                    <input type="password" class="form-control" id="password" name="password" autocomplete="off" />
                    <div id="error-msg"></div>
                </div>
                <button type="submit" class="btn btn-primary" id="login-btn">Логни ме</button>
                <button type="reset" class="btn btn-secondary" id="exit-btn">Изчисти</button>
                <a class="data-upload" href="index.php">Обратно към началната страница</a>
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


