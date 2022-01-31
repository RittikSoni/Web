<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
   <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
$csv='E:\\SOFTWARES\\Xampp\\htdocs\\webteam_alumini\\alumini_info.csv';
$fh=fopen($csv,'r'); 
         $i=0;
         $flag=0;
 while(list($image_url,$company,$email,$name) = fgetcsv($fh,1000,',') ){


echo '<div class="container">
<div class="card">
            <div class="content">
                <div class="imgBx">
              <div class="imgm">';
               
              
               
    printf("<img src=' %s ' style='position: absolute;top: 0;left: 0;width: 200px;height: 200px;object-fit: cover;'/>",$image_url);   
    
echo' </div>

</div>
<div class="contentBx">';
                   printf("<h5>%s</h5>",$name);   
                   printf("<h5>%s</h5>",$company); 
                   printf("<h5>%s</h5>",$email);  
echo '             </div>
                <div class="sci">
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>

    </div>';
 
    }
    ?>
</body>
</html>