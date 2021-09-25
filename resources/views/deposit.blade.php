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
                    <div class="payment-div">
                        <h3>KBZ Pay</h3>
                        <p>Ko Kyaw Kyaw</p>
                        <p style="cursor: pointer" id="kbz-pay" onclick="copyElementText(this.id)">09979857473
                            <small style="color: #717171;  font-size:10px">Click to
                                Copy</small>
                        </p>

                    </div>
                    <div class="payment-div">
                        <h3>Wave Money</h3>
                        <p>Ko Kyaw Kyaw</p>
                        <p style="cursor: pointer" id="kbz-pay" onclick="copyElementText(this.id)">09979857473
                            <small style="color: #717171;  font-size:10px">Click to
                                Copy</small>
                        </p>
                    </div>
                    <div class="payment-div">
                        <h3>AYA Bank</h3>
                        <p>Ko Kyaw Kyaw</p>
                        <p style="cursor: pointer" id="kbz-pay" onclick="copyElementText(this.id)">09979857473
                            <small style="color: #717171;  font-size:10px">Click to
                                Copy</small>
                        </p>
                    </div>
                    <div class="payment-div">
                        <h3>CB Bank</h3>
                        <p>Ko Kyaw Kyaw</p>
                        <p style="cursor: pointer" id="kbz-pay" onclick="copyElementText(this.id)">09979857473
                            <small style="color: #717171;  font-size:10px">Click to
                                Copy</small>
                        </p>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ url('/deposit2') }}" class="button-lg click">
                        လုပ်ငန်းစဉ် ပေးပို့မည်
                    </a>
                    <a class="back-link click" style="margin-top: 10px" href="{{ url('/') }}">နောက်သို့</a>
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
        alert('Copied to clipboard.')
    }
</script>

</html>
