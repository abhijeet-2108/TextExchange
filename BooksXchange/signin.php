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
    
    <body style="background-image: url('lowpoly (1).png');">
        <div class="container-fluid" style = "background-color: #343A40">
            <!-- Logo + top left text -->
            <div class="row pb-4 topColorSet">
                
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
            </div>
        </div>

        <div class="row mt-4">
            <div class = "col-sm-4">
            </div>

            <div class = "col-sm-4">
                <div class="jumbotron" style="background-color: rgba(52, 58, 64, 0.876); color: orangered;">

                    <form action="/action_page.php">
                        <div class="form-group">
                            <label for="email">Email address:</label>
                            <input type="email" class="form-control" placeholder="Enter email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" placeholder="Enter password" id="pwd">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <div class="form-group mt-5 mb-n5 text-center">
                            <label">
                                New? <a href="signup.php">Sign Up</a> Here
                            </label>
                        </div>
                        
                    </form>

                </div>
            </div>

            <div class = "col-sm-4">
            </div>

        </div>
    </body>
</html>