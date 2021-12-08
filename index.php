<?php

  include 'component/data_processor.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cov2019stats.live | Covid-19 Stats</title>
    <!--- Bootstrap CSS -->
    <link rel="stylesheet" href="component/asset/css/bootstrap.min.css"> 
    <!--- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/52f89fe52d.js" crossorigin="anonymous"></script>
    <!--My Stylesheet -->
    <link  rel="stylesheet"  href="component/style.css">
    <!-- Javascript -->
    <script src="component/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbartext">
     <a href="index.php"> Cov2019stats.live</a>    
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsed" aria-controls="collapsed" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="collapsed">
      <ul class="navbar-nav mr-auto">
          <li class="nav-item">
                 <a class="nav-link" href="index.php">Data</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="map.php">Maps</a>
           </li>

          <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
             <a class="nav-link" href="contact.php">Contact</a>
          </li>
     </ul>
     <a href="https://twitter.com/Smartob2?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @Smartob2</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
     <button class="btn-success">
           <a href="support.php">Support Us</a>
     </button>
     </div>
</nav>


   
   <div class="container-fluid color bg-dark p-5 text-center align h-100">
      <div class="col-sm-12">
         <h1>World Covid-19 Stats</h1>
         <h5 class="subtitle">  Cov2019stats.live  helps you keep track of all COVID-19 cases around the globe.</h5>
      </div>   
   </div>

   

    <div class="container text-center my-3">
        <div class="row">
            <div class="col-4 text-warning">
                <i class="fas fa-check-circle"></i>
              <h5>Total Confirmed</h5>
              <?php echo $total_confirmed; ?>
            </div>
            <div class="col-4 text-success">
            <i class="fas fa-walking"></i>
              <h5>Total Recovered</h5>
              <?php echo $total_recovered; ?>
            </div>
            <div class="col-4 text-danger">
            <i class="far fa-sad-tear"></i>
              <h5>Total Deceased</h5>  
              <?php echo $total_deaths; ?>
           </div>
      </div>
    </div>

    <div class="container">
      <div class="row h-100 justify-content-center align-items-center">
             <div class="col-10 col-sm-8 col-sm-6">
                    <div class="input-group">
                        <input type="text" class="form-control " id="countryEntered" placeholder="Enter Country" onkeyup="searchFun()"><br/>
                      
                     
                    </div>
             </div>
            
        </div>
   </div>  
   <div class="container text-center">
        <div class="row">
            <div class="col-sm-12">
            <p class="subtitle">Note. when searching for cases in United State the Word 'US' should be used then scrow down a little.</p>
            </div>

        </div>
    </div>
   
    <div class="container">
    
    
        <table class="table  table-bordered" id="table">
           <thead class="thead-dark " >
               <tr>
                  <th scope="col">Countries</th>
                  <th scope="col">Confirmed</th> 
                  <th scope="col">Recovered</th> 
                  <th scope="col">Deaths</th>  
              
               </tr>
           </thead> 
           <tbody>
              <?php
                 foreach($data as $key => $value){
                     $increaseConfirmed = number_format($value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed']);
                     $increaseRecovered = $value[$days_count]['recovered'] - $value[$days_count_prev]['recovered'];
                     $increaseDeaths    = $value[$days_count]['deaths'] - $value[$days_count_prev]['deaths'];
              ?>
               <tr>
                   <td><?php echo $key;?></td>
                   <td class="bg-color-yellow">
                       <?php echo number_format($value[$days_count]['confirmed']);?>
                       <?php if($increaseConfirmed !=0){?>
                      <small class="text-danger pl-3"><i class="fas fa-arrow-up"><?php echo $increaseConfirmed ?></i></small> 
                       <?php }?>
                   </td>
                   <td class="bg-color-green">
                       <?php echo number_format($value[$days_count]['recovered']);?>
                       <?php if($increaseRecovered !=0){?>
                      <small class="text-success pl-3"><i class="fas fa-arrow-up"><?php echo $increaseRecovered ?></i></small> 
                       <?php }?>
                       
                   </td >
                   <td class="bg-color-red">
                       <?php echo number_format($value[$days_count]['deaths']);?>
                       <?php if($increaseDeaths !=0){?>
                      <small class="text-danger pl-3"><i class="fas fa-arrow-up"><?php echo $increaseDeaths ?></i></small> 
                       <?php }?>
                       
                   </td>
               </tr>

              <?php }?>
           </tbody>
         
       </table>
    
    
  </div>  
    
  <script src="component/asset/js/bootstrap.min.js"></script> 

</body>
</html>