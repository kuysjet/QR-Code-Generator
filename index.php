<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QR Code Scanner</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- include the library -->
  <script src="https://unpkg.com/html5-qrcode"></script>
  
  <script src="js/script.js"></script>

</head>
<body class="bg-light">
  <div id="table-container">
    <div class="align-middle">
      <div class="container resized-container">
        <div class="card px-2 py-3">
          <div class="win text-center">
            <h4 class="intro pt-2"><b>QR CODE SCANNER</b></h4>
          </div>
        <div class="row justify-content-center">
          <div class="col-12">
            <div id="qr-reader"></div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12">
            <table id="qr-result-table" class="table table-bordered table-striped table-hover mb-0">
              <thead class="text-light">
                <tr>
                  <th>Decoded Text</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody class="text-center" id="qr-result-body"></tbody>
            </table>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>

</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>