<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Home Page </title>

    <!-- External CSS file  -->
    <link rel="stylesheet" href="css/style.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
    <link rel="stylesheet" href="css/bankimage.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">

    <!-- Link for Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Header Nav-->
    <header>
        <div class="container-fluid" id="nav">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="padding-bottom: 10px">
                <a class="navbar-brand" href="#"> <span class="material-icons" style="font-size:40px; padding-left: 10px;"> account_balance
                    </span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link third" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="customers.php">View Customers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="transactionhistory.php">Transaction History</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <div class="title">
            <h1>Welcome to DNB Bank </h1> 
            <h4>Your Bank, Your way of life.</h4>
</div>
        <hr>
        <div class="container-fluid">

            <div class="bankimg">
                <img src="https://149494764.v2.pressablecdn.com/wp-content/uploads/2020/11/businessman-watering-dollar-plant-growth-wealth-investment-concept-bank-building-exterior_48369-19931.jpg"
                    alt="Bank Image">
            </div>
        </div>
    </main>

    <link rel="stylesheet" href="css/footer.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
    <?php
    include 'footer.php';
    ?>
</body>

</html>