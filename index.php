<!doctype html>
<html lang="en">
  <head>
    <title>即時匿名提問系統</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      <div class="container">
          <form action="doCreate.php" class="mt-3" method="post">
              <h2>即時匿名提問系統</h2>
              <div class="mb-3">
                  <label>提問主題(提問重點)</label>
                  <input type="text" 
                  name="titles"
                  class="form-control"
                  required
                  >
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">
                    請敘述您的問題
                </label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comment"></textarea>
              </div><br>
              <button class="btn btn-info" type="submit">送出!</button>
          </form>
      </div>

      <style>
            .button{
                width: 150px;
                height: 55px;
                text-align: center;
                cursor: crosshair;

            }


      </style>