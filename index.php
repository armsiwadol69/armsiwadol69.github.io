<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Please select a language... | โปรดเลือกภาษา...</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <style media="screen">
    body {
      color: white;
      font-family: 'Prompt', sans-serif;
      animation: gradient 100s linear infinite;
    }
      .image-background {
      height: 100vh;
      min-height: 500px;
      background-image: url("images/card_after_training.jpg");
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      }

    </style>
  </head>
  <body>
    <div class='image-background'>
      <div class='container h-100'>
        <div class='row h-100 align-items-center'>
          <div class='col-12 text-center rounded shadow' style="background-color:rgba(0,0,0,0.6);">
          <h1 class='display-2 font-weight-bold'>Siwadol's Portfolio</h1>
            <h1 class='display-5 font-weight-bold'>WELCOME | ยินดีต้อนรับ</h1>
            <h5 class=''>Please select a language... | โปรดเลือกภาษา...</h5>
            
<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12">
  <a type="button" href="indexPort_en.html" class="btn btn-primary btn-block my-2"><i class="bi-translate"></i> English | อังกฤษ</a>
  </div>
  <div class="col-lg-6 col-md-6 col-sm-12">
  <a type="button" href="indexPort_th.html" class="btn btn-primary btn-block my-2 disabled" disabled><i class="bi-translate"></i> Thai | ภาษาไทย</a>
  </div>
</div>

          </div>
        </div>
      </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <script type="text/javascript">
    // Set the date we're counting down to
    var countDownDate = new Date("Jan 13, 2022 02:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

      // Get today's date and time
      var now = new Date().getTime();

      // Find the distance between now and the count down date
      var distance = countDownDate - now;

      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Display the result in the element with id="demo"
      document.getElementById("timer").innerHTML = days + " วัน " + hours + " ชั่วโมง "
      + minutes + " นาที " + seconds + " วินาที ";

      // If the count down is finished, write some text
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("timer").innerHTML = "Happy New Year!";
      }
    }, 1000);


    </script>
  </body>
</html>
