<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support | Cov2019stats.live </title>
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
       <h1>Support Us</h1>
       <h5>Do you Like what we are doing and would want us to remain online<br/>Support Now</h5>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-sm-6 margin">
                 <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                          Support Us Today
                        </div>
                        <p class="card-text">  Cov2019stats.live - 
                                 A Platform that keeps track of the latest statistics for the Novel Coronavirus(Covid 19). 
                                 If you've found the site helpful or useful then please consider Supporting us With some bitcoins.
                                 <br/>
                                 <br/>
                                 <a href="https://twitter.com/Smartob2?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @Smartob2</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>         
                        </p>
                    </div>
                 
                 </div>
            </div>
            <div class="col-sm-6 margin">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            Support Us with Bitcoins
                        </div>

                        <form method="POST"  onsubmit="onBTCPayFormSubmit(event);return false"  action="https://mainnet.demo.btcpayserver.org/api/v1/invoices" class="btcpay-form btcpay-form--block">
                        <input type="hidden" name="storeId" value="GEKQseBtUPG8WMpcKqVbHHqTKXRv1kZKdD8aJK2pPPUo" />
                        <input type="hidden" name="jsonResponse" value="true" />
                        <input type="hidden" name="notifyEmail" value="ajanifarouq@gmail.com" />
                        <div class="btcpay-custom-container">
                        <div class="btcpay-custom">
                        <button class="plus-minus" onclick="event.preventDefault(); var price = parseInt(document.querySelector('#btcpay-input-price').value); if ('-' == '-' && (price - 1) < 1) { return; } document.querySelector('#btcpay-input-price').value = parseInt(document.querySelector('#btcpay-input-price').value) - 1;">-</button>
                        <input id="btcpay-input-price" name="price" type="text" min="1" max="1000000000" step="1" value="10" style="width: 3em;" oninput="event.preventDefault();isNaN(event.target.value) || event.target.value <= 0 ? document.querySelector('#btcpay-input-price').value = 10 : event.target.value"  />
                        <button class="plus-minus" onclick="event.preventDefault(); var price = parseInt(document.querySelector('#btcpay-input-price').value); if ('+' == '-' && (price - 1) < 1) { return; } document.querySelector('#btcpay-input-price').value = parseInt(document.querySelector('#btcpay-input-price').value) + 1;">+</button>
                        </div>
                        <select name="currency">
                        <option value="USD" selected>USD</option>
                        <option value="GBP">GBP</option>
                        <option value="EUR">EUR</option>
                        <option value="BTC">BTC</option>
                        </select>
                        </div>
                        <button type="submit" class="submit" name="submit" style="min-width:209px; min-height:57px; border-radius: 4px;border-style: none;background-color: #0f3b21;" alt="Pay with BtcPay, Self-Hosted Bitcoin Payment Processor"><span style="color:#fff">Support Us</span>
                        <img src="https://mainnet.demo.btcpayserver.org/img/logo.svg" style="width:104.5px;">
                        </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <footer  class="footer footermargin2 py-3 bg-dark">
        <div class="container text-center">
        <span class="text-muted">Copyright &copy;2020, <a href="index.php"> Cov2019stats.live</a></span>
     
        </div>
    
    </footer>

    <script>if(!window.btcpay){    var head = document.getElementsByTagName('head')[0];   var script = document.createElement('script');   script.src='https://mainnet.demo.btcpayserver.org/modal/btcpay.js';   script.type = 'text/javascript';   head.append(script);}function onBTCPayFormSubmit(event){    var xhttp = new XMLHttpRequest();    xhttp.onreadystatechange = function() {        if (this.readyState == 4 && this.status == 200) {            if(this.status == 200 && this.responseText){                var response = JSON.parse(this.responseText);                window.btcpay.showInvoice(response.invoiceId);            }        }    };    xhttp.open("POST", event.target.getAttribute('action'), true);    xhttp.send(new FormData( event.target ));}</script><style type="text/css"> .btcpay-form { display: inline-flex; align-items: center; justify-content: center; } .btcpay-form--inline { flex-direction: row; } .btcpay-form--block { flex-direction: column; } .btcpay-form--inline .submit { margin-left: 15px; } .btcpay-form--block select { margin-bottom: 10px; } .btcpay-form .btcpay-custom-container{ text-align: center; }.btcpay-custom { display: flex; align-items: center; justify-content: center; } .btcpay-form .plus-minus { cursor:pointer; font-size:25px; line-height: 25px; background: #DFE0E1; height: 30px; width: 45px; border:none; border-radius: 60px; margin: auto 5px; display: inline-flex; justify-content: center; } .btcpay-form select { -moz-appearance: none; -webkit-appearance: none; appearance: none; color: currentColor; background: transparent; border:1px solid transparent; display: block; padding: 1px; margin-left: auto; margin-right: auto; font-size: 11px; cursor: pointer; } .btcpay-form select:hover { border-color: #ccc; } #btcpay-input-price { -moz-appearance: none; -webkit-appearance: none; border: none; box-shadow: none; text-align: center; font-size: 25px; margin: auto; border-radius: 5px; line-height: 35px; background: #fff; } </style>

</body>
</html>