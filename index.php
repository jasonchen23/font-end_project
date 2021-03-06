<!doctype html>
<html lang="en">

<head>
  <title>即時匿名提問系統</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.0.2 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

  <div id="bg" class="darkmode-background"></div>
  <div class="container">
    <form action="doCreate.php" class="mt-5" method="post">
      <div class="outer container">
        <h2 class="d-flex justify-content-center mt-2">即時匿名提問系統</h2>

        <div class="mb-3">
          <label>提問主題(提問重點)</label>
          <input type="text" placeholder="電腦系統更新問題" class="feedback-input" name="titles" class="form-control" required>
        </div>
        <div class="form-group mb-2">
          <label for="exampleFormControlTextarea1">
            請敘述您的問題
          </label><br>
          <textarea placeholder="如何將..." id="textarea" class="feedback-input" name="comment" required></textarea>
        </div><br>
        <div class="mb-2">
          <button class="btn btn-info button" type="submit">送出</button>
        </div>

      </div>
    </form>
  </div>

  <style>
    .outer {
      width: 75%;
      height: 100%;
      background-color: #ece6e6a8;
      margin:0px auto;
      border: 2px solid rgba(121, 120, 120, 0.1); 
      

    }
    .feedback-input {
      color: rgb(10, 7, 56);
      font-weight: 450;
      font-size: 17px;
      border-radius: 5px;
      line-height: 20px;
      /* 行距 */
      background-color: transparent;
      border: 2px solid #73aad6;
      transition: all 0.5s;
      padding: 13px;
      margin-bottom: 15px;
      width: 100%;
      box-sizing: border-box;
      outline: 0;
    }
    .feedback-input:focus {
      border: 2px solid #9162628e;
    }
    #textarea {
      height: 200px;
    }
    .button {
      width: 100%;
      background: #4e9cb4f8;
      border-radius: 5px;
      border: 0;
      cursor: pointer;
      color: white;
      font-size: 24px;
      padding-top: 10px;
      padding-bottom: 10px;
      transition: all 0.5s;
      margin-top: -4px;
      font-weight: 700;
    }

    [type="submit"]:hover {
      background: linear-gradient(to bottom right, #ffd2d256, #f3f3fa36, #f1e1ff86);
      color: #000;
    }
    .darkmode-background {
      background: #eee;
      position: fixed;
      pointer-events: none;
      z-index: -10;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
    }
    .button {
      isolation: isolate;
    }
    .darkmode--activated .logo {
      mix-blend-mode: difference;
    }
  </style>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
  <script>
    const options = {
      bottom: '32px', // default: '32px'
      right: '100px', // default: '32px'
      left: '32px', // default: 'unset'
      time: '0.3s', // default: '0.3s'
      mixColor: '#fff', // default: '#fff'
      backgroundColor: '#fff',  // default: '#fff'
      buttonColorDark: '#100f2c',  // default: '#100f2c'
      buttonColorLight: '#fff', // default: '#fff'
      saveInCookies: true, // default: true,
      label: '🌙', // default: '🌓'
      autoMatchOsTheme: false // default: true
    }

    const darkmode = new Darkmode(options);
    darkmode.showWidget();
    function addDarkmodeWidget() {
      new Darkmode().showWidget();
    }
    window.addEventListener('load', addDarkmodeWidget);
    const background = document.createElement("div");
  </script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.birds.min.js"></script>
  <script>
      VANTA.BIRDS({
          el: "#bg",
          mouseControls: true,
          touchControls: true,
          gyroControls: false,
          minHeight: 200.00,
          minWidth: 200.00,
          scale: 1.00,
          scaleMobile: 1.00,
          color1: 0x4e1f1f,
          birdSize: 1.70,
          quantity: 3.00
      })
  </script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>
  <script>
  VANTA.NET({
    el: "#bg",
    mouseControls: true,
    touchControls: true,
    gyroControls: false,
    minHeight: 200.00,
    minWidth: 500.00,
    scale: 1.00,
    scaleMobile: 1.00,
    color: 0x673737,
    backgroundColor: 0xc1b7ab,
    points: 8.00,
    maxDistance: 26.00,
    spacing: 20.00
  })
  </script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.clouds.min.js"></script>
<script>
VANTA.CLOUDS({
  el: "#bg",
  mouseControls: true,
  touchControls: true,
  gyroControls: false,
  minHeight: 200.00,
  minWidth: 200.00
})
</script> -->
</body>

</html>