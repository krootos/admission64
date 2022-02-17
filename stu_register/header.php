

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>:: ระบบรับสมัครนักเรียนออนไลน์ โรงเรียนธาตุนารายณ์วิทยา ::</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="img/icons/favicon.ico" />
  <!-- Custom styles for this template -->
  <link href="css/shop-item.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript">
    function countDown() {
      var timeA = new Date(); // วันเวลาปัจจุบัน
      var timeB = new Date("May 12,2020 16:30:01"); // วันเวลาสิ้นสุด รูปแบบ เดือน/วัน/ปี ชั่วโมง:นาที:วินาที
      //  var timeB = new Date(2012,1,24,0,0,1,0); 
      // วันเวลาสิ้นสุด รูปแบบ ปี,เดือน;วันที่,ชั่วโมง,นาที,วินาที,,มิลลิวินาที    เลขสองหลักไม่ต้องมี 0 นำหน้า
      // เดือนต้องลบด้วย 1 เดือนมกราคมคือเลข 0
      var timeDifference = timeB.getTime() - timeA.getTime();
      if (timeDifference >= 0) {
        timeDifference = timeDifference / 1000;
        timeDifference = Math.floor(timeDifference);
        var wan = Math.floor(timeDifference / 86400);
        var l_wan = timeDifference % 86400;
        var hour = Math.floor(l_wan / 3600);
        var l_hour = l_wan % 3600;
        var minute = Math.floor(l_hour / 60);
        var second = l_hour % 60;
        var showPart = document.getElementById('showRemain');
        showPart.innerHTML = "" + wan + " วัน " + hour + " ชั่วโมง " +
          minute + " นาที " + second + " วินาที";
        if (wan == 0 && hour == 0 && minute == 0 && second == 0) {
          clearInterval(iCountDown); // ยกเลิกการนับถอยหลังเมื่อครบ
          // เพิ่มฟังก์ชันอื่นๆ ตามต้องการ
        }
      }
    }
    // การเรียกใช้
    var iCountDown = setInterval("countDown()", 1000);
  </script>
