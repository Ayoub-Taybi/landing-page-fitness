<html>
    <head>
        <title>Thank you</title>
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <style>

        .thank-you{
            display:flex;
            align-items:center;
            flex-direction:column;
            height:100%;
        }
        .thank-you-content{
            max-width:500px;
            margin:auto;
        }
        .thank-you-content h3{
            font-size:50px;
        }
        .thank-you-content p{
            margin:20px 0px;
            color:#666;
        }
        .thank-you-content #check{
            font-size:80px;
            color:#00c2e8;
            margin-bottom:10px;
        }
            /*----------- reset ---------------*/
    .btn-primary{
        background:#00c2e8;
        color:#fff;
        text-align:center;
        border-radius:3px;
        margin:auto;
        box-shadow: 0 0px 10px #00bfe5;
        border:none;
        padding: 0.8rem 2.7rem;
        display: inline-block;
    }
    .btn-primary i{
        margin-right:10px;
    }
    .btn-primary:hover{
        color:#00c2e8;
        background:#fff;
    }
    /*----------- end reset ---------------*/
    </style>
    <body>

        <div class="thank-you text-center">
            <div class="thank-you-content">
                <i class="fa fa-check-circle" id="check" aria-hidden="true"></i>
                <h3>Thank you !</h3>
                <p>Your order was sent successfully </p>
                <p>We will process your order soon </p>
                <a href="index.php" class="btn-primary"><i class="fa fa-long-arrow-left"></i> back to home page</a>
            </div>
            
        </div>

       <!-- script  -->
       <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>