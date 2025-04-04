<!DOCTYPE html>
<html lang="id">
<meta charset='UTF-8' />
<meta content='width=device-width, initial-scale=1, user-scalable=1, minimum-scale=1, maximum-scale=5' name='viewport' />
<meta content='IE=edge' http-equiv='X-UA-Compatible' />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Sono:wght@600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
<script src="https://unpkg.com/typeit@8.7.0/dist/index.umd.js"></script>
<link href="https://feeldreams.github.io/dibacayuk/style.css" rel="stylesheet" type="text/css" />
<script src="https://kit.fontawesome.com/4f3ce16e3e.js" crossorigin="anonymous"></script>

<head>
    <title>Terima Kasih Donatur</title>
    <link rel="icon" type="image/x-icon" href="https://malasid.github.io/favicon.png">
    <meta name="description" content="HTML Donasi">
    <style>
        body::before{
            content: "\2764\2764\2764 Ackmad Elfan Purnama \2764\2764\2764";
        }
    </style>
</head>

<body>

    <audio src="../assets/sounds/soundrack-atunaTufuli.mp3" id="linkmp3" class="sembunyi"></audio>

    <div id="bodyblur">
        <img src="https://feeldreams.github.io/pics/awan.jpg" id="wallpaper" />
    </div>

    <div id='Content'>

        <div id="ftAwal">
            <img src="https://feeldreams.github.io/pandaputih.gif" id="ftoAwal" />
        </div>

        <div id="loveIn">
            <label class='lovein'>&#10084;</label>
        </div>
        <p id="ket">Sentuh simbol hati ini!</p>

        <div class="kumpulanstiker">
            <img src="https://feeldreams.github.io/pusn.gif" id="fotostiker" />
            <img src="https://feeldreams.github.io/wortel.gif" id="fotostiker1" />
            <img src="https://feeldreams.github.io/ngumpet.gif" id="fotostiker2" />
            <img src="https://feeldreams.github.io/bwa2.gif" id="fotostiker3" />
        </div>

        <div>
            <div id='pergeseran'>

                <p><b>
                        <span>Assalamu'alaikum</span>
                    </b></p>

                <p><b>
                        <span>Terima kasih atas donasi Anda</span>
                    </b></p>

                <p><b>
                        <span>Baca pesan penting ini sampai akhir ya</span>
                    </b></p>

            </div>
        </div>

        <p id="ketgeser">Klik untuk geser!</p>

        <div style="position: relative;">
            <blockquote id='bq'>
                <p id="kalimat">Kami sangat berterima kasih atas kebaikan hati Anda dalam berdonasi. Dengan kontribusi Anda, kami dapat terus membantu saudara-saudara kita yang membutuhkan. Setiap rupiah yang Anda sumbangkan adalah harapan baru bagi mereka.</p>
                <p id="pesanAkhir">Semoga Allah SWT membalas kebaikan Anda dengan pahala yang berlipat ganda. Aamiin.</p>
            </blockquote>
            <a href="../" style="text-decoration: none; color: #fff; display: inline-flex; position: fixed; bottom: 100px; left: 50%; transform: translateX(-50%);">Kembali ke Halaman Utama</a>
        </div>

    </div>

    <script>
        const body = document.querySelector("body");
        const iniwp = [];
        iden = 1;
        const swalst = Swal.mixin({
            timer: 2500,
            allowOutsideClick: false,
            showConfirmButton: false,
            timerProgressBar: true,
            imageHeight: 90,
        });
        audio = new Audio('' + linkmp3.src);
        ftganti = 0;
        fungsi = 0;
        fungsiAwal = 0;
        deffotostiker = fotostiker.src;

        function berjatuhan() {
            const heart = document.createElement("div");
            heart.className = "fas fa-heart";
            heart.style.left = (Math.random() * 90) + "vw";
            heart.style.animationDuration = (Math.random() * 3) + 2 + "s";
            body.appendChild(heart);
        }
        setInterval(function name(params) {
            var heartArr = document.querySelectorAll(".fa-heart");
            if (heartArr.length > 100) {
                heartArr[0].remove()
            }
        }, 100);
        Content.style = "opacity:1;margin-top:14vh";
        const swals = Swal.mixin({
            allowOutsideClick: false,
            cancelButtonColor: '#FF0040',
            imageHeight: 80,
        });
    </script>
    <script src="https://malasid.github.io/html/makasiayang.js"></script>
</body>

</html>