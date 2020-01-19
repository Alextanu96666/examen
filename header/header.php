<?php
include '../Functions/header_functions.php';

$mylogo = new Logo();
$mydata = $mylogo->getLogo();   

 

if(isset($_SERVER['HTTPS']) &&  
            $_SERVER['HTTPS'] === 'on') 
    $link = "https"; 
    else
        $link = "http"; 
  
$link .= "://"; 
$link .= $_SERVER['HTTP_HOST']; 
$link .= "/examensarbete/projekt/index.php"; 
 

?>

 
     
      

<?php
foreach ($mydata as $row) {?>
  
 <style>
    <?php include '../web/css/projekt.css'; ?>
 </style>
 <script src="https://kit.fontawesome.com/a076d05399.js"></script>
 <container class = "main-header">
    <div class = "main-container">
        <div class="column-container">
            
            <!-- left column -->
            <div class ="left-column columns">
                <div class="nav icons">
                  <span class="icon-hamburger">  <i class="fas fa-bars hamburger"></i> </span>
                    
                </div>
            </div>
            <!-- middle column -->
            <div class="middle-column columns">
                <div class="logo">
                    <span class="logo-position">
                    <a href = <?php echo($link)?>> <img src = "../images<?php echo($row['path'])?>"> </a>
                    </span>     
                </div>
            </div>
    
             <!-- right column -->
             <div class="right-column columns">
                <div class="mini-cart">
                    <span class="mini-cart-icon">
                    <i class='fas fa-shopping-cart'></i>
                    </span>
                    </div>
                </div>
             </div>

        </div>
    </div>
 </container>

 <?php 
}

?>