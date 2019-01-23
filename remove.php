
<?php

if(array_key_exists("submit", $_POST)){
    
    $link = mysqli_connect("shareddb-m.hosting.stackcp.net","mydatabase-313031249c",
"lgle8x4yyg","mydatabase-313031249c");
    
    
    if(mysqli_connect_error()) {
        
        die ("Failed to connect database!");
        
    }else{
        
        
        
$query = "SELECT email FROM users WHERE email='".mysqli_real_escape_string($link, $_POST['email'])."' LIMIT 1";
        
        $result = mysqli_query($link, $query);
        
        if (mysqli_num_rows($result)>0){
            
            $query = "DELETE FROM users WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."' LIMIT 1";
        
        $result = mysqli_query($link, $query);
        
        if($result){
            
            $details = "<p style='font-size:25px;color:green;'>Deleted</p>";
            
        }
            
        }else{
            
            $details = "<p style='font-size:25px;color:red;'>Failed</p>";
            
        }
    }

}







?>













<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Test Registration Form</title>
    
    <style type="text/css">
      
        html { 
          background: url() no-repeat center center fixed; 
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
            }
          
          body {
              
              background: none;
              
          }
        
        #main {
            
            position: absolute;
            margin: auto;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 530px;
            height: 600px;
            background-color: #91ccd5;
            border-radius: 5px;
            opacity: 0.9;
            
            
            
        }
        
        .caption {
            
            color: #7648a1;
            font-size: 23px;
            text-align: center;
            margin-bottom: 10px;
            margin-top: 3px;
            font-weight: bold;
            
        }
        
        #submit {
            
            margin-left: 220px;
            
        }
        
        #toggle {
            
            color: blue;
            cursor:pointer;
            
        }
        
        #submit {
            
            margin-bottom: 10px;
            
        }
        
        @media (max-width:600px) {
            
            #main {
                
                background-color: #91ccd5;
                opacity: 0.8;
                width: 100%;
                height: 100%;
                
            }
            
        }
      
      </style>
  </head>
  <body>
    
    
    
    <div class="container" id="main">
        
        <div class="caption" id="caption">Delete Details</div>
        
        
        <br>
        <form method="post">
  
    <div class="form-group">
    <label for="email">Enter your email address</label>
    <input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter your email">
    
  </div>
  <br>
  <button type="submit" class="btn btn-danger" id="submit" name="submit">Delete</button>
  
</form>
       
       
        <div class="alert alert-primary" role="alert">
  <? echo $details; ?>
 
  
</div>
        <div id="footer">View <a href="details.php" id="">your details</a> || <a href="index.php">New Registration</a></div>
        
        <p id="author" style="float:bottom;">Author: Subhojit Ghosh</p>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
    <script type="text/javascript">
      
        
        
       
      
      
      </script>
  </body>
</html>