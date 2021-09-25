<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://web.zetamm.com/fonts/1.5.0/css/Pyidaungsu-All">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

</head>

<body>
    <audio id="audio" hidden>
        <source src="{{ asset('assets/click_sound.mp3') }}" type="audio/mpeg">
    </audio>
    <div class="container">
        <div class="wrapper">
            <img src="{{ asset('assets/images/logo.png') }}" alt="" class="logo">

            <div class="top-card">
                <div class="inside-top-card">
                    <img src="https://ui-avatars.com/api/?name=Kyaw+Gyi" class="profile" alt="">
                    <div style="margin-left:10px">
                        <p class="top-card-name">ကိုကျော်ကြီး</p>
                        <p class="top-card-balance">ငွေလက်ကျန် : ၅၀၀၀၀ ကျပ်</p>
                    </div>
                </div>
            </div>

            <div class="annoument-text">
                <marquee>
                    မင်္ဂလာပါ။ ယနေ့ ပွဲစဉ်များသည် ပွဲကြီးပွဲကောင်းများဖြစ်သည်။ ပွဲများကို
                    မလွတ်သင့်ပါ။
                </marquee>
            </div>

            <div class="main-menu">
                <div class="grid-container">
                    <a class="grid-item click" href="#">
                        <img src="{{ asset('assets/images/svg/football-field.svg') }}" alt="" width="40">
                        <span>မောင်း</span>
                    </a>
                    <a class="grid-item click" href="#">
                        <img src="{{ asset('assets/images/svg/football.svg') }}" alt="" width="40">
                        <span>မောင်း</span>
                    </a>
                    <a class="grid-item click" href="#">
                        <img src="{{ asset('assets/images/svg/competition.svg') }}" alt="" width="40">
                        <span>လောင်းထားသော ပွဲစဉ်များ</span>
                    </a>
                    <a class="grid-item click" href="#">
                        <img src="{{ asset('assets/images/svg/calendar.svg') }}" alt="" width="40">
                        <span>ပွဲစဉ်ဟောင်းများ</span>
                    </a>
                    <a class="grid-item click" href="{{ url('deposit') }}">
                        <img src="{{ asset('assets/images/svg/deposit.svg') }}" alt="" width="40">
                        <span>ငွေသွင်း</span>
                    </a>
                    <a class="grid-item click" href="#">
                        <img src="{{ asset('assets/images/svg/withdraw.svg') }}" alt="" width="40">
                        <span>ငွေထုတ်</span>
                    </a>
                    <a class="grid-item click" href="#">
                        <img src="{{ asset('assets/images/svg/settings.svg') }}" alt="" width="40">
                        <span>ပြင်ဆင်မှု</span>
                    </a>
                    <a class="grid-item click" href="#">
                        <img src="{{ asset('assets/images/svg/auction.svg') }}" alt="" width="40">
                        <span>စည်းကမ်းနှင့်သတ်မှတ်ချက်</span>
                    </a>
                </div>
            </div>


        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    var target;

    function checkAudio() {
        if ($("#audio")[0].paused) {
            window.location.href = target;
        } else {
            setTimeout(checkAudio, 1000);
        }
    }

    $('.grid-container a').click(function(e) {
        e.preventDefault();

        target = $(this).attr('href');

        var sound = $("#audio");
        sound.get(0).play();

        setTimeout(checkAudio, 1000);
    });
</script>

</html>
