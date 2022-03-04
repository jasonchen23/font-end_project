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
              <div class="outer">
                <h2 class="d-flex justify-content-center">即時匿名提問系統</h2>

                <div class="mb-3">
                    <label>提問主題(提問重點)</label>
                    <input type="text"
                    placeholder="電腦系統更新問題" 
                    name="titles"
                    class="form-control" 
                    required
                    >
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1" >
                      請敘述您的問題
                  </label>
                  <textarea placeholder="如何將..." class="form-control" id="exampleFormControlTextarea1" rows="3" name="comment"></textarea>
                </div ><br>
                <div class="button1">
                  <button class="btn btn-info button" type="submit">送出</button>
                </div>
                
                </div>
          </form>
      </div>

      <style>
            .outer{
              width: 100%;
              height: 100%;
              background-color: #F5F5F5;
              
            }
            .button1{
              display: flex;
                justify-content: flex-end;
                align-items: flex-end;
            }
            .button{
                width: 150px;
                height: 55px;
                text-align: center;
                cursor: crosshair;
                background: #000;
                color: #fff;
                transition: all .3s linear;

            }

            .button:hover{
                background-color: #666;
            }
            textarea {
          height: 150px;
          line-height: 150%;
          resize:vertical;
        }

        [type="submit"] {
          
          width: 100%;
          background:#4e9cb4;
          border-radius:5px;
          border:0;
          cursor:pointer;
          color:white;
          font-size:24px;
          padding-top:10px;
          padding-bottom:10px;
          transition: all 0.3s;
          margin-top:-4px;
          font-weight:700;
        }
        [type="submit"]:hover { background:#CC4949; }


      </style>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>