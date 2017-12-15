<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel='stylesheet' href='/css/fullcalendar.css' />
    <script src='/js/jquery-3.2.1.js'></script>
    <script src='/js/moment.min.js'></script>
    <script src='/js/fullcalendar.js'></script>
    <script src='/js/locale-th.js'></script>



    <script>
        $(document).ready(function() {

            // page is now ready, initialize the calendar...

            $('#calendar').fullCalendar({
                // put your options and callbacks here
                header: {
				left: 'prev,next today',
               	center: 'title',
				// right: 'month,agendaWeek,agendaDay'
                // right: 'listDay,listWeek,month'
                right: 'month,agendaWeek,agendaDay,listMonth'
                },

                footer: {
				left: 'prev,next today',
               	center: 'title',
				// right: 'month,agendaWeek,agendaDay'
                // right: 'listDay,listWeek,month'
                right: 'month,agendaWeek,agendaDay,listMonth'
                },
        		// customize the button names,
                // otherwise they'd all just say "list"
                views: {
                    listDay: { buttonText: 'list day' },
                    listWeek: { buttonText: 'list week' }
                },
                //defaultView: 'listWeek',

                dayClick: function() {
                    alert('a day has been clicked!');
                },
                locale: 'th',
                events: [
                    {
                        title  : 'morning',
                        start  : '2017-12-01'
                    },
                    {
                        title  : 'topic',
                        start  : '2017-12-05',
                        end    : '2017-12-07'
                    },
                    {
                        title  : 'lecture',
                        start  : '2017-12-09T12:30:00',
                        allDay : false // will make the time show
                    }
                ]
            })

        });
    </script>
</head>
<body>
    <div id="calendar"></div>

    
</body>
</html>