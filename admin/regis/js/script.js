
// READ records ตอนนี้ไม่ได้ใช้งาน
function readRecords() {
    $.get("ajax/readRecords.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}


function UnconfirmUser(id) {
    var conf = confirm("Are you sure, do you really want to unconfirm register?");
    if (conf == true) {
        $.post("ajax/deleteUser.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                //readRecords();
                window.location="index.php?delete=yes";
            }
        );
    }
}

function ConfirmUser(id) {
    var conf = confirm("Are you sure, do you really want to confirm Register?");
    if (conf == true) {
        $.post("ajax/updateUserDetails.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                //readRecords();
                window.location="index.php?addRS=yes";
            }
        );
    }
}

function UnconfirmExamtest(id) {
    var conf = confirm("UnComfirm examination?");
    if (conf == true) {
        $.post("ajax/deleteExam.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                //readRecords();
                window.location="index.php?delete=yes";
            }
        );
    }
}

function ConfirmExamtest(examno, examid, nid) {
    var conf = confirm("Comfirm examination?");
    if (conf == true) {
        $.post("ajax/insertexam.php", {
                examno: examno,
                examid: examid,
                nid: nid
            },
            function (data, status) {
                // reload Users by using readRecords();
                //readRecords();
                //window.location="index.php?le=<?php echo $le; ?>&op=<?php echo $op; ?>";
            }
        );
    }
}


$(document).ready(function () {
    // READ recods on page load
    //readRecords(); // calling function
});