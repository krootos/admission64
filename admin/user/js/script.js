// Add Record
function addRecord() {
    // get values
    var regisno = $("#regisno").val();
    var regispwd = $("#regispwd").val();
    var regisnaid = $("#regisnaid").val();

    // Add record
    $.post("ajax/addRecord.php", {
        regisno: regisno,
        regispwd: regispwd,
        regisnaid: regisnaid
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        //readRecords();
        window.location="index.php?add=yes";

        // clear fields from the popup
        $("#regisno").val("");
        $("#regispwd").val("");
        $("#regisnaid").val("");
    });
}

// READ records ตอนนี้ไม่ได้ใช้งาน
function readRecords() {
    $.get("ajax/readRecords.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}


function DeleteUser(id) {
    var conf = confirm("Are you sure, do you really want to delete User?");
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

function GetUserDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id").val(id);
    $.post("ajax/readUserDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_regisno").val(user.RegisNO);
            $("#update_regispwd").val(user.RegisPWD);
            $("#update_regisnaid").val(user.RegisNaID);
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateUserDetails() {
    // get values
    var regisnaid = $("#update_regisnaid").val();  
    var regisnewnaid = $("#update_regisnewnaid").val();
    
    

    

    // get hidden field value
    var id = $("#hidden_user_id").val();


    confirm(regisnaid);
    confirm(regisnewnaid);

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateUserDetails.php", {
            id: id,
            regisnaid: regisnaid,
            regisnewnaid: regisnewnaid
            
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload Users by using readRecords();
            //readRecords();
            window.location="index.php?edite=yes";
        }
    );
}
function DestroySes(){
    window.location="index.php?destroysearch=yes";
}

$(document).ready(function () {
    // READ recods on page load
    //readRecords(); // calling function
});