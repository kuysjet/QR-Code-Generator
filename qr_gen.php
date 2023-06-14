<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">  
    <title>QR Code Generator</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/qr_gen.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   
  </head>

  <body class="bg-light">
    <div class="wrapper border">
      <header class="text-center">
        <h1><b>QR Code Generator</b></h1>
        <p>Paste a url or enter text to create QR code</p>
      </header>
      <div class="form">
        <input type="text" spellcheck="false" placeholder="Enter text or url">
        <button class="btn btn-primary">Generate QR Code</button>
      </div>
      <div class="qr-code">
        <img src="" alt="qr-code">
      </div>
    </div>

    <script src="js/qr_gen.js"></script>
    
  </body>
</html>