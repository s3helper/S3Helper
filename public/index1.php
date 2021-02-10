<head style=''>
    <script data-ad-client="ca-pub-3838357691293907" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <header style='background-color: grey; width: 95vw; height: 10%; margin-top: 500px; border-radius: 40px; margin-left: 2.5vw; margin-right: 2.5vw; margin-top: 12px'>
    <div class='nav-bar' style=''><h1 class='logo' style='font-family: SFProDSB, sans-serif; display: inline;'>	S3Helper<p style='font-family: SFProDR, sans-serif; display: inline; font-size: 15px;'>beta 0.2.1</p></h1></div>
    <div class='header' style='text-align: center; margin-top: 100px;'>
    <a href='https://forms.gle/MruiUm5MXkyTsuAcA'><p style='display: inline; text-align: center; font-family: SFProDM, sans-serif;'>Submit Watch Faces</p></a><div><p class='sub-heading' style='text-align: center; font-family: SFProDR, sans-serif; margin-bottom: 0px; margin-top: 0px;'>A curation of the best Series 3 Apple watch faces provided by Buddywatch.</p><p class='sub-heading' style='text-align: center; font-family: SFProDR, sans-serif; margin-top : 0px;'>QR Codes on Desktop Now Availible!</p></div></div></header>
<link rel="stylesheet" type="text/css" href="style.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="/fonts/fonts.css" media="screen"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style='margin: 0px;'>
    
<div class='main-grid' style='display:grid; grid-template-areas: watch;'>
<?php 
// Server credentials  
$servername = "localhost"; 
$username = "id15986286_jackthetoolboy"; 
$password = "QS@1Ft#qe*w=(!G("; 
$dbname = "watchfaces"; 
 
// Creating mysql connection 
$conn = new mysqli($servername, $username, $password, $dbname); 
 
// Checking mysql connection 
if ($conn->connect_error) { 
  die("Connection failed: " . $conn->connect_error); 
} 
 
// Writing a mysql query to retrieve data  
$sql = "SELECT #, name, description FROM watchfaces"; 
$result = $conn->query($sql); 
 
?>

<?php

//Step1
 $db = mysqli_connect('localhost','id15986286_jackthetoolboy','QS@1Ft#qe*w=(!G(','id15986286_s3buddy')
 or exit( mysqli_error($dbc) );
//Step2
$query = "SELECT * FROM watchfaces";
mysqli_query($db, $query) or die('Error hi querying database.');

$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);

while ($row = mysqli_fetch_array($result)) {
 echo "<div loading='lazy' class='watch' style='display: inline-block;'>
           <div class='back-color' style=' border-radius: 20px; box-shadow: 0 3px 12px -1px rgba(7,10,25,.2), 0 22px 27px -20px rgba(7,10,25,.2); background-color: $row[basecolor]; margin-right: 0px;'>
            <div class='highlight' style='border-radius: 20px; box-shadow: 0 3px 12px -1px rgba(7,10,25,.2), 0 22px 27px -20px rgba(7,10,25,.2); background-color: $row[highlightcolor]; z-index: 999;'>
                <img loading='lazy' class='image' style=' border-radius: 20px; 	-webkit-transition: 0.25s all ease-in;' src='/images/$row[imagelink]'>
            </div>
           </div>
          <div class='title_div' style='text-align: center; font-family: SFProDSB, sans-serif'>$row[name]</div>
            <p class='description' style='font-family: SFProDR, sans-serif; margin-top: -5px; text-align: center;'>'$row[description]'</p>
             <div class='download'>
              <a href='/faces/$row[facefilelink]'>
                <img src='Symbol and Text - Light@3x.png' class='download-light'>
                <img src='Symbol and Text - Dark@3x.png' class='download-dark'>
              </a>
            <script>
function on() {
  document.getElementById('overlay').style.display = 'block';
}

function off() {
  document.getElementById('overlay').style.display = 'none';
}
</script>
          <div>
          <div class='qr-code' onclick='on()'><p class='qr-button' style='font-family: SFProDR, sans-serif; display: inline-block;'>Scan QR Code</p><div style='margin-left: 10px; padding-top: 3%;'><img class='qr-icon' src='qrcode.viewfinder.png'><img class='white-qr-icon' src='white.qrcode.viewfinder.png'><p class='qr-button' style='font-family: SFProDR, sans-serif; display: inline-block;'>Scan QR Code</p></div></div><div style='color: white; pointer: hover;' id='overlay' onclick='off()'>
  <div id='text'><p class='qr-heading'>Download Face on iPhone</p><img src='https://api.qrserver.com/v1/create-qr-code/?size=150x150&format=svg&bgcolor=RRGGBB&data=https://watchdatabase.000webhostapp.com/faces/$row[facefilelink]'><p class='qr-subheading'>Scan the QR code above with Camera app on iPhone.</p></div><style>
#text{
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
  height: max-content;
  width: max-content;
  color: white;
  transform: translate(-50%,-50%);
  -ms-transform: translate(-50%,-50%);
}
</style>



</div>
          </div>
          
          </div>
          <p class='description' style='font-family: SFProDL, sans-serif; margin left:0px; text-align: center;'>$row[model]</p>
          
 </div>";
}
mysqli_close($db);
?>
</body>