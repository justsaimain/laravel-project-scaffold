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

            <div class="card" style="margin-top: 20px">
                <div class="card-header">
                    <p class="heading-text">အကောင့်ထဲသို့ ငွေသွင်းခြင်း</p>
                    <p class="sub-heading-text">အောက်ပါအကောင့်ထံသို့ ငွေလွဲပေးပါ။</p>
                </div>
                <div class="card-body">
                    <form action="#">
                        <p class="input-title">Select Payment Provider</p>
                        <select class="form-select" name="" id="">
                            <option value="#" selected>Payment Provider</option>
                            <option value="Kpapy">Kpay</option>
                        </select>
                        <p class="input-title ">ဖုန်းနံပါတ်</p>
                        <input type="text" class="input-text" placeholder="09979857473">
                        <div>
                            <p class="input-title">လုပ်ငန်းစဉ်နံပါတ် (အနောက် ၆ လုံး)</p>
                            <span class="input-description">ငွေလွဲထားသော လုပ်ငန်းစဉ်နံပါတ်၏ နောက်ဆုံးဂဏန်း ၆ လုံးကို
                                ထည့်ပေးပါ။</span>
                        </div>
                        <input type="text" class="input-text" placeholder="012345">
                        <p class="input-description">အထက်ပါအားလုံးဖြည့်စွက်ပြီးပါက ငွေသွင်းမည် ကို နှိပ်ပြီး ခတ္တခဏ
                            စောင့်ဆိုင်းပေးပါ။</p>
                    </form>
                </div>
                <div class="card-footer">
                    <a href="{{ url('/') }}" class="button-lg click">
                        ငွေသွင်းမည်
                    </a>
                    <a class="back-link click" style="margin-top: 10px" href="{{ url('/deposit') }}">နောက်သို့</a>
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

    $('.click').click(function(e) {
        e.preventDefault();

        target = $(this).attr('href');

        var sound = $("#audio");
        sound.get(0).play();

        setTimeout(checkAudio, 1000);
    });

    function copyElementText(id) {
        var text = document.getElementById(id).innerText;
        var elem = document.createElement("textarea");
        document.body.appendChild(elem);
        elem.value = text;
        elem.select();
        document.execCommand("copy");
        document.body.removeChild(elem);
    }
</script>

</html>
