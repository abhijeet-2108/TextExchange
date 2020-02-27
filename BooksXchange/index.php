<html>

    <head>
        <!-- including libraries -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="styles.css">
        <link href="https://fonts.googleapis.com/css?family=Oswald:300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>

    <body>

        <!-- Top -->
        <div class="container-fluid" style = "background-color: #343A40">
            <!-- Logo + top left text -->
            <div class="row topColorSet">
                
                <!-- Logo -->
                <div class="col-md-2">
                    <img src="logo.png" width="150px">
                </div>

                <!-- Text -->
                <div class="col-md-1 ml-n5">
                    <h1 class="topHeadStyler mt-5">
                        TEXTEXCHANGE.COM
                    </h1>
                </div>

                <!-- Login text -->
                <div class="ml-auto mr-3">
                    <a href="signin.php" style="font-size:15px;" class="editButtonColor float-right mt-3 btn btn-info d-flex align-items-center" role="button">
                        <i class="material-icons mr-2">
                            account_circle
                        </i>   
                        MY ACCOUNT
                    </a>                 
                </div>

            </div>

            <!-- Navigation bar -->
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark mt-4">
            
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Trending</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                    </li>
                </ul>

                <!-- Search box -->
                <form class="form-inline my-lg-0" action="/action_page.php">
                    <input style="width: 300px;" class="form-control" type="text" placeholder="Search by user or book">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>
            
            </nav>  

        </div>
        
    
        
<?php 
    for ($i = 1; $i <= 3; $i++) 
    { 
        $rand = rand(0, 1);
        if($rand == 0)
            $str = 'Available';
        else $str = 'Unavailable';
        
        $rand = rand(0, 1);
        if($rand == 0)
            $price = rand(0, 1000);
        else $price = 0
?> 
        <div class="container mt-3 mb-3">
            <div class="row">
                <div class="col-md-2">
                    <img src="book.jpg" width="150px;">
                </div>
                <div class="col-md-4">
                    Name : Charlie and the chocolate factory
                    <br>
                    <br>
                    Description : Charlie is a stupid kid, who meets an wannabe inventor Silly Wonka...
                    <br>
                    <br>
                    Pricing : 
                    <?php
                        if($price == 0)
                            print("<strong>Free</strong>");
                        else print($price);
                    ?>
                    <br>
                    <br>
                    Availibility : <strong>
                    <?php
                        print($str);
                    ?>
                    </strong>
                </div>
                <div class="col-md-4">
                  <button type="button" class=
                          "btn btn-primary"
                          <?php
                            if($str == 'Unavailable')
                                print(" disabled")
                          ?>
                          
                          >Buy</button>
                </div>
            </div>
        </div>

<?php 
    } 
?> 
    </body>
</html>