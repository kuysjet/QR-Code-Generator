<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <title>api - QRcode</title>
  </head>

  <style>
    /*body{
	background-color: #bebebe;
}*/
h4{
	text-align: center;
	letter-spacing: 2px;
	color:  #ddd;
}
h5{
	letter-spacing: 1px;
	text-align: center;
	font-weight: bold;
}
.panel-heading{
	background-color:  #283747;
}
.panel-footer{
	background-color: white;
}
.panel{
	border: 1px solid #d1d1d1;
}
.row{
	margin-top: 100px;
}
.input-group {
  padding-bottom: 1%;
}
.getBtn{
	background-color: #283747;
	color: #ddd;
	letter-spacing: 2px;
	font-size: 16px;
	height: 50px;
}

.getBtn:hover{
	background-color: #ddd;
}
input[type="text"] {
  background-color : /*#d1d1d1; */ transparent;
  border: 2px solid white;
  border-bottom: 1px solid #d1d1d1;
  padding: 10px;
  letter-spacing: 1px;
  width: 100%;
  font-size:16px;
  color:black;
}
.qrCode{
	color: black;
}
/* #displayQR{

} */
li{
	padding: 5px;
}
input[type="textarea"] {
  background-color : /*#d1d1d1; */ transparent;
  border: 2px solid white;
  border-bottom: 1px solid #d1d1d1;
  padding: 10px;
  letter-spacing: 2px;
  width: 100%;
  color:black;
  font-size:16px;

}
.glyphicon{
	background-color: transparent;
	border: 1px solid white;
}
.qrCode{
	color:black;
}
#displayQR img {
    /*margin-left:15%;*/
    margin-left:150px;
    margin-top:20px;
}
.panel{
	 box-shadow: 5px 5px 5px #888888;
}
form{
	background-color: white;
	
	margin-top: -10px;
}
input [type="text"]{
	width: 400px;
}
ul{
	margin-top:-30px;
}

  </style>

  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-md-offset-1">
          <div class="panel ">
            <div class="panel-heading">
              <h4>Generate QR code with message</h4>
            </div>
            <div class="panel-body">
              <h5>INSTRUCTIONS:</h5>
              <br><br>
              <ul>
                  <li>Fill up the form</li>
                  <li>Click the button</li>
                  <li>Message sent via QR code!</li>
                </ul> 
            </div>
            <div class="panel-footer">
              <form action="javascript:getQR()"> 
                
                <br>
                <div class="input-group">
                  <span class="input-group-addon glyphicon glyphicon-phone"></span>
                  <input type="text" class="inputs" id="mobile" placeholder="phone number" required="required"></input>
                </div><br>
                <div class="input-group">
                  <span class="input-group-addon glyphicon glyphicon-pencil"></span>
                  <input type="text" class="" id="message" placeholder="message" required="required" />
                </div><br>
                <input type="submit" value="Generate QR Code" class="btn form-control getBtn"></input>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-6" style="margin-top:100px;">
           <div id="displayQR" class="qr">
             <h4 class="qrCode">Your QR code will be displayed here!</h4>
           </div>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <script>
  function getQR(){

      var mobile = $('#mobile').val();
      var message = $('#message').val();
      var theLink = 'http://www.ecuanota.com/api-send-sms?key=NzI2-YmMy-YjI2-NTk3-Nzcw-MWE5-Nzc5-M2E0-YWQ3-MTQ4-N2Y6&mobile='+mobile+'&message='+message;
      var link = encodeURIComponent(theLink);
      var qrCode="https://chart.googleapis.com/chart?cht=qr&chs=250x250&chl="+link;

      $('#displayQR').html('<h4 class="qrCode">Generated QR code</h4><img src="'+qrCode+'"></img>');
      $('#displayQR').effect('pulsate',{times:3}, 200);

    }
    </script>

  </body>
</html>