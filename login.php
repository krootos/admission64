<!DOCTYPE html>
<html lang="en">

<?php
include 'header.php';
?>

<body>

  <?php
  include 'menu.php';
  ?>

  <!-- Page Content -->
  <div class="container">

    <div class="row">
      <?php
      include 'left_menu.php';
      ?>



      <div class="col-lg-9">


        <!-- /.card -->

        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            <i class="fa fa-arrow-circle-right"></i>
            <font color="#1498A3" size="4">&nbsp;เข้าสู่ระบบพิมพ์ใบสมัคร </font>
          </div>
          <div class="card-body">
            <table class="table">
              <tbody>
                <tr>
                  <td>
                    <div class='list-group'>
                      <table width='100%' align='center'>
                        <tr>
                          <td>
                            <form method='post' action='stu_register/ck_login.php'>
                              <div class='form-group' align='center'>
                                <label>ชื่อผู้ใช้</label>
                                <input type='text' name='id_card' class='form-control' placeholder='เลขบัตรประจำตัวประชาชน' maxlength='13'>
                              </div>
                              <div class='form-group' align='center'>
                                <label>รหัสผ่าน</label>
                                <input type='password' name='id_card2' class='form-control' placeholder='เลขบัตรประจำตัวประชาชน' maxlength='13'>
                              </div>
                              <button type='submit' class='btn btn-info btn-block'>เข้าสู่ระบบ</button>
                            </form>
                            </li>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <font color='red' size='2'>*เข้าสู่ระบบเฉพาะกรณีที่สมัครแล้ว <br>เพื่อเข้าแก้ไขข้อมูลการสมัครและพิมพ์ใบสมัคร</font><br>

                          </td>
                        </tr>
                      </table>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><span id="sp_result"></span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col-lg-9 -->

    </div>

  </div>
  <!-- /.container -->

  <?php
  include 'footer.php';
  ?>

</html>