<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>My Web Site</title>
</head>
<body>
    <div class="container">
       
        <div class="jumbotron">
            <h1 class="display-4">City Info</h1>
            <p class="lead">Търсене на информация за градове в България</p>
            <hr class="my-4">
            
            <form>
                <div class="form-group">
                  <label for="search-text">Въведете град</label>
                   <input type="text" class="form-control" id="search-text" autocomplete="off"/>
                   <div id="prompt"></div>
                </div>
               
                <button type="submit" class="btn btn-primary" id="submitBtn">Търси</button>
                <a class="data-upload" href="login.php"> Въвеждане на данни</a>
              </form>

          </div>
       
       <div id="data">

        <div id="city" class="city"> </div>
        <div id="image" class="image"> </div>
        <div id="opisanie" class="opisanie"></div>
       </div>
       
        
      </div>


      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
    integrit000000000y="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
     crossorigin="anonymous"></script>
     <script src="app.js"></script>
</body>
</html>