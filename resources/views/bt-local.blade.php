<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <title>BT Local Test</title>
  </head>
  <body>

    <div class="container">
      <br>
      <div class="text-center"><h3>Create Job</h3></div>
      <br>
      <div class="col-md-4 col-md-offset=4">
        <form action="" class="form-horizontal">


          <div class="form-group">
            <label for="input1" class="col-xs-4 control-label text-right">กลุ่มงาน :</label>
            <div class="col-xs-8">
              <select class="" name="" id="input1">
                <option value="0">กรุณาเลือก</option>
                <option value="1">งานสารสนเทศ</option>
                <option value="2">CSR</option>
              </select>
            </div>
          </div>

          <div class="collapse" id="div-input2">
            <div class="form-group">
              <label for="input2" class="col-xs-4 control-label text-right">งานหลัก :</label>
              <div class="col-xs-8">
                <select class="" name="" id="input2">
                  <option value="0">กรุณาเลือก</option>
                  <option value="1">งานสารสนเทศ</option>
                  <option value="2">CSR</option>
                </select>
              </div>
            </div>
          </div>


          <div class="collapse" id="div-input3">
            <div class="form-group">
              <label for="input3" class="col-xs-4 control-label text-right">งานหลัก :</label>
              <div class="col-xs-8">
                <select class="" name="" id="input3">
                  <option value="0">กรุณาเลือก</option>
                  <option value="1">งานสารสนเทศ</option>
                  <option value="2">CSR</option>
                </select>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="job_detial" class="col-xs-4 control-label text-right">รายละเอียดงาน :</label>
            <div class="col-xs-8">
              <input class="form-control" type="text" id="job_detial">
            </div>
          </div>
        </div>

        </form>
      </div>
    </div>


    <!-- <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <script src="/js/jquery-3.2.1.slim.js"></script> -->
    <script src="/js/bootstrap.js"></script>

    <script>
        $("#input1").on('change', function() {
          console.log('value changeed to ' + this.value);
          if(this.value != 0) {
            $("#div-input2").collapse("show");
          } else {
              $("#div-input2").collapse("hide");
          }
        });
    </script>

    <script>
        $("#input2").on('change', function() {
          console.log('value changeed to ' + this.value);
          if(this.value != 0) {
            $("#div-input3").collapse("show");
          } else {
              $("#div-input3").collapse("hide");
          }
        });
    </script>
  </body>
</html>
