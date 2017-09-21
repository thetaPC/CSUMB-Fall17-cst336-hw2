<!DOCTYPE html>
<html>
    <head>
        <title>Homework 2</title>
        <meta charset="utf-8">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            
            <?php
                global $list;
                $list = array();
            ?>
            
            <div class="row">
                <div class="col-md-offset-1">
                    <h1>Pick out of a Hat!</h1>
                </div>
                <div class="col-md-offset-1">
                    <p1>Seperate items by commas</p1>
                </div>
            </div>
            
        
            <div class="row">
                <div class="col-md-offset-1">
                    <form action="push.php" method="post">
                        <div class="row">
                            <div class="col-md-5 no-pad-right">
                                <div class="form-group">
                                    <input type="text" name="item" class="form-control" id="item" placeholder="Yes, No">
                                </div>
                            </div>
                            <div class="col-md-5 no-pad-left">
                                <button id="pick" type="submit" class="btn btn-info">Pick</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
            
            
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
            
            
        </script>
    </body>
</html>