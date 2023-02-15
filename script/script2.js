var html =
  '<h2>Pesan Berhasil Terkirim</h2><h3>Anda akan diarahkan ke halaman utama</h3><h4 class="timer">10</h4><p>Dibuat Oleh :</p><a href="https://github.com/tcpin" class="github"><img src="./assets/images/icons_8github.ico" height="30px" alt="" srcset="" />Moldy</a>';

document.querySelector("body").innerHTML += html;

timer = document.querySelector(".timer");
var time = timer.innerHTML;

function timeku(linkku) {
  timer.innerHTML = time;
  console.log(time);
  if (time == 0) {
    window.location.replace(linkku);
    // console.log(linkku);
  } else {
    time--;
    setTimeout(function () {
      timeku(linkku);
    }, 1000);
  }
}
