<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Cov2019stats.live</title>
    <!--- Bootstrap CSS -->
    <link rel="stylesheet" href="component/asset/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    
    <!--- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/52f89fe52d.js" crossorigin="anonymous"></script>
    <!--My Stylesheet -->
    <link  rel="stylesheet"  href="component/style.css">
    <!-- Javascript -->
    <script src="component/asset/js/bootstrap.min.js"></script>
    <script src="component/script.js"></script>
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

<div class="jumbotron color bg-dark text-center">
       <h1>Contact</h1>
</div>




<div class="container  md-10">
        <div class="row">
            <div class="col-sm-6 margin">
                <div class="card">
                    <div class="card-body">
                          <h1 class="card-title">
                             Contact Form
                          </h1>
                          <form action="processor.php" method="post">
                             <div class="form-group">
                                 <label for="name">Full Name</label>
                                 <input type="text" class="form-control" name="name" placeholder="Full Name">
                             </div>
                             <div class="form-group">
                                 <label for="email">Email</label>
                                 <input type="text" class="form-control" name="email" placeholder="Email">
                             </div>
                             <div class="form-group">
                                 <label for="subject">Subject</label>
                                 <input type="text" class="form-control" name="subject" placeholder="Subject">
                             </div>
                             <div class="form-group">
                                 <label for="message">message</label>
                                 <textarea class="form-control" row="15" col="30" name="message" ></textarea>
                             </div>
                             <button class="btn-success center" type="submit" name="submit">SEND</button>
                          </form>
                        
                   </div>
                </div>

            </div>

            <div class="col-sm-6 margin">
                <div class="card">
                 <div class="card-body">
                    <h1 class="card-title">
                        Social media
                    </h1>
                    <p class="card-text">
                        <ul>
                            <li>
                            <a href="https://twitter.com/Smartob2?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @Smartob2</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </li>
                            <li>
                            <a href="https://twitter.com/codeman112?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @codeman112</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </li>
                            <li>
                            <a class="subtitle" href="www.linkedin.com/in/ajani-farouq">Follow on linked</a>
                            </li>
                            <li>
                            <a class="subtitle" href="https://www.instagram.com/smartobtech/">Follow on instagram</a> 
                            </li>
                        </ul>
                     
                    </p>

                 </div>
                </div>

            </div>

        </div>
    </div>
    
     
   <footer  class="footer footermargin1 py-3 bg-dark">
        <div class="container text-center">
        <span class="text-muted">Copyright &copy;2020, <a href="index.php"> Cov2019stats.live</a></span>
     
        </div>
    
    </footer>
</body>
</html>