<head style=''>
    <script data-ad-client="ca-pub-3838357691293907" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <header style='background-color: grey; width: 95vw; height: 10%; margin-top: 500px; border-radius: 40px; margin-left: 2.5vw; margin-right: 2.5vw; margin-top: 12px'>
    <div class='nav-bar' style=''><h1 class='logo' style='font-family: SFProDSB, sans-serif; display: inline;'>	S3Buddy<p style='font-family: SFProDR, sans-serif; display: inline; font-size: 15px;'>beta</p></h1></div>
    <div class='header' style='text-align: center; margin-top: 100px;'>
    <a href='https://forms.gle/MruiUm5MXkyTsuAcA'><p style='display: inline; text-align: center; font-family: SFProDM, sans-serif;'>Submit Watch Faces</p></a><div><p class='sub-heading' style='text-align: center; font-family: SFProDR, sans-serif; margin-bottom: 0px; margin-top: 0px;'>A curation of the best Series 3 Apple watch faces provided by Buddywatch.</p><p class='sub-heading' style='text-align: center; font-family: SFProDR, sans-serif; margin-top : 0px;'>QR Codes on Desktop Coming Soon!</p></div></div></header>
<link rel="stylesheet" type="text/css" href="style.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="/fonts/fonts.css" media="screen"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style='margin: 0px;'>
    
<div class='main-grid' style='display:grid; grid-template-areas: watch;'>
<?php

$f = fopen('https://csv1.netlify.com/feed.csv', 'r');

while(!feof($f)) {

    $row = fgetcsv($f);

    if (!empty($row)) {
          echo "
          <div loading='lazy' class='watch' style='display: inline-block;'>
           <div class='back-color' style=' border-radius: 20px; box-shadow: 0 3px 12px -1px rgba(7,10,25,.2), 0 22px 27px -20px rgba(7,10,25,.2); background-color: $row[6]; margin-right: 0px;'>
            <div class='highlight' style='border-radius: 20px; box-shadow: 0 3px 12px -1px rgba(7,10,25,.2), 0 22px 27px -20px rgba(7,10,25,.2); background-color: $row[5]; z-index: 999;'>
                <img loading='lazy' class='image' style=' border-radius: 20px;' src='/images/$row[1]'>
            </div>
           </div>
          <div class='title_div' style='text-align: center; font-family: SFProDSB, sans-serif'>$row[0]</div>
            <p class='description' style='font-family: SFProDR, sans-serif; margin-top: -5px; text-align: center;'>'$row[7]'</p>
             <div class='download'>
              <a href='/faces/$row[2]'>
                <img src='Symbol and Text - Light@3x.png' class='download-light'>
                <img src='Symbol and Text - Dark@3x.png' class='download-dark'>
              </a>
            
          <div>
          <div class='qr-code'><img class='qr-icon' src='qrcode.viewfinder.png'><img class='white-qr-code.png' src='white.qrcode.viewfinder.png'></div>
          </div>
          
          </div>
          <p class='description' style='font-family: SFProDL, sans-serif; margin left:0px; text-align: center;'>$row[4]</p>
          
 </div>"     
        ;
    }
}
 ?>
<p> <?php $row[0] ?> </p>
</body>