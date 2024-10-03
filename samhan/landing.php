<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ceebad55d6.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
    <title>Samhan logistic</title>
</head>
<style>
    body{
        background-image: url(assets/BACKGROUND\ PUDAR/A.png);
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
    }
    .container{
        margin-top: 30vh;
    }
    .title{
        font-size: 1.2rem;
        color: #c50404;
        font-weight: bold;
    }
    .iconl{
        width: 120px;
        cursor: pointer;
    }
    
</style>
<body>
    <div class="container text-center">
        <div class="title">Hi, selamat datang di SAMHAN LOGISTIC</div>
        <div class="row mt-2">
            <div class="kiri col text-end">
                <img src="assets/iconcargo.png" id="cargo" class="iconl" alt="...">
            </div>
            <div class="kanan col text-start">
            <img src="assets/trucking.png" class="iconl" id="trucking" alt="...">
            </div>
        </div>
    </div>
</body>
<script>
    // $("#my_image").attr("src","second.jpg");
    

    $( "#cargo" )
    .on( "mouseover", function() {
        $(this).attr("src","assets/iconcargomerah.png");
    } )
    .on( "mouseout", function() {
        $(this).attr("src","assets/iconcargo.png");
    } );

    $( "#trucking" )
    .on( "mouseover", function() {
        $(this).attr("src","assets/truckingmerah.png");
    } )
    .on( "mouseout", function() {
        $(this).attr("src","assets/trucking.png");
    } );
    


   
</script>
</html>