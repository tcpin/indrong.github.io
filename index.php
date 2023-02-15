<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./assets/images/icons8_love.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" /> <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Untuk Kamu yang aku sayangi</title>

    <?php date_default_timezone_set("Asia/Jakarta");
          if(isset($_GET['jawaban'])){
            $fp = fopen('Moldy.txt', 'r');
            echo '<link rel="stylesheet" href="./css/style.css" />
            </head>
            <body>
            <div class="top">Jawaban Script
            <br />
            Deka Tutorial</div>
            <div class="content">';
            while(!feof($fp)){
              echo "".fgets($fp)."<br>";
            } echo '</div></body></html>';
            die;
            fclose($fp);
          }

          // if(isset($_POST['submit'])){
          //   $date = date("d-M-Y (H:i)");
          //   $status = $_POST["Status"];
          //   $pesan = $_POST["Pesan"];
          //   $fp = fopen('Moldy.txt', 'a');
          //   fwrite($fp,$date."\nStatus :\n<strong>".$status."\n</strong> Pesan :\n<strong>".$pesan."</strong>\n\n");
          //   fclose($fp);index();
          //   }

            function index(){
               $link = "";
               if(isset($_GET["link"])){
                $link = $_GET["link"];
                }echo '<link rel="stylesheet" href="./css/style2.css" />
                </head>
                <body>
                <script src="./script/script2.js">
                </script>
                <script>timeku("'.$link.'");</script>
                </body>
                </html>'
                ;die;
                }
                ?>

                <script>
                var musik = "";
                var backgound = "";
                var gambarStiker1 = "";
                var gambarStiker2 = "";
                var gambarStiker3 = "";
                </script>

                <script src="./script/script2.js"></script>
                <link rel="stylesheet" href="./css/main.css" />
  </head>
  <body>
    <script> popupku(); </script>
    <div class="preload">
      <p>Loading dulu . . .</p>
    </div>
    <div class="open">
      <div>
        <div class="lope" onclick="ilang()">
        <i class="love material-icons-sharp"> favorite </i>
      </div>
      <h3>Surat tanggal 14 Februari 2023</h3>
    </div>
  </div>
  <div class="bg"></div>
  <div class="lopeBg"></div>
    <div class="top stiker"><img src="" /><img src="" /><img src="" /></div><div class="ucapan">
      <div id="slider">
    <!-- Ucapan awal -->
        <p>Selamat hari Valentine ayang aku Indri </p>
        <!-- <p>Maaf hanya ini yang sa bisa kasih kau untuk sekarang </p> -->
        <p>Jangan bosan ama aku yaa</p>

    <!-- Pertanyaan -->
        <p>Maaf hanya ini yang sa bisa kasih kau untuk sekarang</p>
      </div>
      <div id="slider">
    <!-- Ucapan diterima -->
        <p>peluk jauh</p>
      </div>
    </div>
    <script>

      // PENTING : jika ekstensi file berbeda silahkan ganti di bawah ini
      musik = "./music/koiiro.mp3";
      background = "./assets/images/love.gif";
      gambarStiker1 = "./assets/images/bubu_hug.gif";
      gambarStiker2 = "./assets/images/bubu_bunga.gif";
      gambarStiker3 = "./assets/images/bubu_peluk.gif";

    </script>
    <div class="button">
      <div>
        <button>Back</button>
        <button>Next</button>
      </div>
      <div>
        <button>Gamau</button>
        <button>Mau</button>
      </div>
      <div>
        <button>Kirim Pesan</button>
      </div>
    </div>
    <div class="container-pesan" style="display: none">
    <div class="kirim-pesan">
      <p>Kirim Pesan</p>
      <form method="post">
        <input name="Status" hidden class="jawaban" type="text" value="" />
        <a href="wa.me/6281340930744"><button type="button" class="btn btn-primary">Whatsapp</button></a>
      </form>
    </div>
  </div>
  <script src="./script/script.js"></script>
  </body>
</html>
