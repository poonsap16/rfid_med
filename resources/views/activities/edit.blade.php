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
      <h3>แก้ไขข้อมูลกิจกรรม # {{ $data->id}}</h3>
      <hr>
        <form action="/activities/update/{{ $data->id}}" method="POST">
          <input type="hidden" name="_method" value="PATCH">
          {{ csrf_field() }}
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label for="act_id">รหัสกิจกรรม :</label>
                <input type="text" class="form-control" name="activity_id" value={{ $data->activity_id }}>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="act_name">ชื่อกิจกรรม :</label>
                <input type="text" class="form-control" name="activity_name" value={{ $data->activity_name }}>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="act_acronym">ชื่อย่อกิจกรรม :</label>
                <input type="text" class="form-control" name="activity_acronym" value={{ $data->activity_acronym }}>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-2">
              <div class="form-group">
                <label for="t_start">เวลาเริ่มกิจกรรม :</label>
                <input type="time" class="form-control" name="time_start" value={{ $data->time_start }}>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="t_end">เวลาสิ้นสุดกิจกรรม :</label>
                <input type="time" class="form-control" name="time_end" value={{ $data->time_end }}>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="job_ref">รหัสงาน infomed :</label>
                  <input type="text" class="form-control" name="job_id_ref" value={{ $data->job_id_ref }}>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="p_type">ประเภท/ผู้เข้าร่วมกิจกรรม :</label>
                  <input type="text" class="form-control" name="person_type" value={{ $data->person_type }}>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="r_location">เครื่องทาบบัตร :</label>
                <input type="text" class="form-control" name="reader_location" value={{ $data->reader_location }}>
              </div>
            </div>
          </div>
                <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>



  </body>
</html>
