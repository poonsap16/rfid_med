<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rfid Medicine Record</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        html, body, th, td {
            font-family: 'Lato', Arial;
        }
        body {
            padding-top: 30px;
        }
        li.active {
            color: #666663!important;
            border-color: #E8E8E8!important;
            background-color: #fffff6!important;
            text-align: center;
            font-weight: bold;
            font-style: italic;
        }
    </style>

  </head>
  <body>
    <div class="container">
      <h3>เพิ่มกิจกรรม</h3>
      <hr>
        <form action="" method="">

          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label for="act_id">รหัสกิจกรรม :</label>
                <input type="text" class="form-control" id="activity_id">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="act_name">ชื่อกิจกรรม :</label>
                <input type="text" class="form-control" id="actitity_name">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="act_acronym">ชื่อย่อกิจกรรม :</label>
                <input type="text" class="form-control" id="actitity_acronym">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-2">
              <div class="form-group">
                <label for="t_start">เวลาเริ่มกิจกรรม :</label>
                <input type="time" class="form-control" id="time_start">
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="t_end">เวลาสิ้นสุดกิจกรรม :</label>
                <input type="time" class="form-control" id="time_end">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="job_ref">รหัสงาน infomed :</label>
                  <input type="text" class="form-control" id="job_id_ref">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="p_type">ประเภท/ผู้เข้าร่วมกิจกรรม :</label>
                  <input type="text" class="form-control" id="person_type">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="r_location">เครื่องทาบบัตร :</label>
                <input type="text" class="form-control" id="reader_location">
              </div>
            </div>
          </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- <div class="col-md-4">
      <div class="input-group">
        <span class="input-group-addon">เครื่องทาบบัตร</span>
        <input type="text" class="form-control" id="reader_location">
      </div>
    </div> -->

    <div class="container">
      <h3>เพิ่มกิจกรรม</h3>
      <hr>
        <form action="" method="">

          <div class="row">
            <div class="col-md-2">
              <div class="input-group">
                <span class="input-group-addon">รหัสกิจกรรม</span>
                <input type="text" class="form-control" id="activity_id">
              </div>
            </div>
            <div class="col-md-4">
              <div class="input-group">
                <span class="input-group-addon">ชื่อกิจกรรม</span>
                <input type="text" class="form-control" id="actitity_name">
              </div>
            </div>
            <div class="col-md-2">
              <div class="input-group">
                <span class="input-group-addon">ชื่อย่อกิจกรรม</span>
                <input type="text" class="form-control" id="actitity_acronym">
              </div>
            </div>


          <!-- <div class="row"> -->
            <div class="col-md-2">
              <div class="input-group">
                <span class="input-group-addon">เวลาเริ่ม</span>
                <input type="time" class="form-control" id="time_start">
              </div>
            </div>
            <div class="col-md-2">
              <div class="input-group">
                <span class="input-group-addon">เวลาสิ้นสุด</span>
                <input type="time" class="form-control" id="time_end">
              </div>
            </div>
          </div>
          <!-- </div> -->

          <div class="row">
            <div class="col-md-4">
              <div class="input-group">
                <span class="input-group-addon">รหัสงาน infomed</span>
                  <input type="text" class="form-control" id="job_id_ref">
              </div>
            </div>
            <div class="col-md-4">
              <div class="input-group">
                <span class="input-group-addon">ประเภท/ผู้เข้าร่วมกิจกรรม</span>
                  <input type="text" class="form-control" id="person_type">
              </div>
            </div>
            <div class="col-md-4">
              <div class="input-group">
                <span class="input-group-addon">เครื่องทาบบัตร</span>
                <input type="text" class="form-control" id="reader_location">
              </div>
            </div>
          </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

  </body>
</html>
