<!DOCTYPE html>
<html lang="en">
    <head>

    <title>Motsobobet</title>

    <link href="plugins/plugins/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="screen">
    <link href="plugins/plugins/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">


    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="plugins/AdminLTE.min.css">
   
    </head>
  
  <!-- date and timer -->
    <script language="javascript" type="text/javascript">
        /* Visit http://www.yaldex.com/ for full source code
and get more free JavaScript, CSS and DHTML scripts! */
        <!-- Begin
        var timerID = null;
        var timerRunning = false;
        function stopclock (){
            if(timerRunning)
                clearTimeout(timerID);
            timerRunning = false;
        }
        function showtime () {
            var now = new Date();
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds()
            var timeValue = "" + ((hours >12) ? hours -12 :hours)
            if (timeValue == "0") timeValue = 12;
            timeValue += ((minutes < 10) ? ":0" : ":") + minutes
            timeValue += ((seconds < 10) ? ":0" : ":") + seconds
            timeValue += (hours >= 12) ? " P.M." : " A.M."
            document.clock.face.value = timeValue;
            timerID = setTimeout("showtime()",1000);
            timerRunning = true;
        }
        function startclock() {
            stopclock();
            showtime();
        }
        window.onload=startclock;
        // End -->
    </SCRIPT> 
    <!--==============================================================BODY========================================================================== -->

<body>
  <!-- nav top -->
   <div class="navbar navbar-inverse">
        <div class="navbar-inner">
            <div class="pull-right">
                <form name="clock">
                    <i id="clock" class="icon-time"></i>
                    <input  class="span2" id="trans" type="submit"  name="face" value="">
                </form>
            </div>
            <!-- clock  -->
            <div class="date">
                <i class="icon-calendar " id="clock"></i>
                <?php
                $Today = date('y:m:d');
                $new = date('l, F d, Y', strtotime($Today));
                echo $new;
                ?>
            </div>
            <div class="welcome">
            </div>
        </div>
    </div>
    <!-- navtop end -->

    <!-- Main content -->
    <section class="content container-fluid">
      <div class="box">
        <div class="box-header bg-gray" align="center">
            <section class="content-header">
              <h1><i class="fa fa-undo"></i>
                BACKUP AND RESTORE DATABASE
              </h1>
              <br>
            </section>
        </div>
        <br>
          <div class="box">
            <div class="box-body">
            <label>EXPORT DATABASE<i>(backup)</i></label>
            <br><br>
            <a href="backup.php" class="btn btn-primary "><i class="fa fa-download">&nbsp</i>Export</a>
            <br><p><br> <i>Exports an SQL file(.sql) of your database</i></p>
            <p><i><small>Format name is (backup_DB- (date today).sql )</small></i></p>

            </div>
          </div>


          <div class="box">
            <br>
            <div class="box-body">
            <label>IMPORT DATABASE<i>(.sql extension only)</i></label>
            <br>
      
          <form action="import.php" method="post" enctype="multipart/form-data">
              <p>
                <input type="file" name="database"></p>
                <br>
                <button type="submit" class="btn btn-success" name="import"><span class="glyphicon glyphicon-import">&nbsp</span>Import</button>
              <p style=""><br><i>Select the database file(.sql)</i></p>
          </form>
            </div>
          </div>
      </div>
    </section>


</body>
</html>