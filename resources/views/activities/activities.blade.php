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
      <h3>รายการกิจกรรมทั้งหมด</h3>

      <div class="table-responsive">
      <table class="table table-bordered table-hover">
        <thead>
          <tr class="active">
            <th>#</th>
            <th>รหัสกิจกรรม</th>
            <th>ชื่อกิจกรรม</th>
            <th>ชื่อย่อกิจกรรม</th>
            <th>เวลาเริ่ม</th>
            <th>เวลาสิ้นสุด</th>
            <th>รหัสกิจกรรม(infomed)</th>
            <th>ประเภทผู้เข้าร่วมกิจกรรม</th>
            <th>ตำแหน่งเครื่องทาบบัตร</th>
          </tr>
        </thead>
        <tbody>
          @foreach($activities as $activity)
          <tr>
            <td>{{ $activity->id }}</td>
            <td>{{ $activity->activity_id }}</td>
            <td>{{ $activity->activity_name }}</td>
            <td>{{ $activity->activity_acronym }}</td>
            <td>{{ $activity->time_start }}</td>
            <td>{{ $activity->time_end }}</td>
            <td>{{ $activity->job_id_ref }}</td>
            <td>{{ $activity->person_type }}</td>
            <td>{{ $activity->reader_location }}</td>
            <td><a href="/activities/edit/{{ $activity->id }}">Edit</a></td>
          @endforeach

          </tr>
        </tbody>
      </table>
      </div>
    </div>



  </body>
</html>
