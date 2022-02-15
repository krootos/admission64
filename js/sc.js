// Add Record
function addRecord() {
    // get values

    var nid = $("#nid").val();
    var hid = $("#hid").val();
    var faid = $("#faid").val();
    var maid = $("#maid").val();
    var paid = $("#paid").val();
    var ename = $("#ename").val();
    var esurname = $("#esurname").val();
    var enickname = $("#enickname").val();
    var birthpro = $("#birthpro").val();
    var bro = $("#bro").val();
    var broblm = $("#broblm").val();
    var visit = $("#visit").val();
    var direct = $("#direct").val();
    var pay = $("#pay").val();
    var weight = $("#weight").val();
    var height = $("#height").val();
    var healthy = $("#healthy").val();
    var fareligion = $("#fareligion").val();
    var fajobprovince = $("#fajobprovince").val();
    var fablood = $("#fablood").val();
    var faincome = $("#faincome").val();
    var mareligion = $("#mareligion").val();
    var majobprovince = $("#majobprovince").val();
    var mablood = $("#mablood").val();
    var maincome = $("#maincome").val();
    var pareligion = $("#pareligion").val();
    var pajobprovince = $("#pajobprovince").val();
    var pablood = $("#pablood").val();
    var paincome = $("#paincome").val();
    var enicknameth = $("#enicknameth").val();
    // Add record

   // alert ($("#enicknameth").val());
    
    $.post("ajax/addRecord.php", {
        nid: nid,
        hid: hid,
        faid: faid,
        maid: maid,
        paid: paid,
        ename: ename,
        esurname: esurname,
        enickname: enickname,
        birthpro: birthpro,
        bro: bro,
        broblm: broblm,
        visit: visit,
        direct: direct,
        pay: pay,
        weight: weight,
        height: height,
        healthy: healthy,
        fareligion: fareligion,
        fajobprovince: fajobprovince,
        fablood: fablood,
        faincome:faincome,
        mareligion: mareligion,
        majobprovince: majobprovince,
        mablood: mablood,
        maincome:maincome,
        pareligion: pareligion,
        pajobprovince: pajobprovince,
        pablood: pablood,
        paincome:paincome,
        enicknameth:enicknameth
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        //readRecords();
        window.location="index.php?add=yes";

        // clear fields from the popup
        //  $("#regisno").val("");
    $("#hid").val("");
    $("#faid").val("");
    $("#maid").val("");
    $("#paid").val("");
    $("#ename").val("");
    $("#esurname").val("");
    $("#enickname").val("");
    $("#birthpro").val("");
    $("#bro").val("");
    $("#broblm").val("");
    $("#visit").val("");
    $("#direct").val("");
    $("#pay").val("");
    $("#weight").val("");
    $("#height").val("");
    $("#healthy").val("");
    $("#fareligion").val("");    
    $("#fajobprovince").val(""); 
    $("#fablood").val(""); 
    $("#faincome").val(""); 
    $("#mareligion").val("");    
    $("#majobprovince").val(""); 
    $("#mablood").val(""); 
    $("#maincome").val(""); 
    $("#pareligion").val("");    
    $("#pajobprovince").val(""); 
    $("#pablood").val(""); 
    $("#paincome").val(""); 
    $("#enicknameth").val(""); 
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
            //NID, HID, ENAME, ESURNAME, ENICKNAME, BIRTHPRO, BRO, BROBLM, VISIT, DIRECT, PAY, WEIGHT, HEIGHT, HEALTHY
            //FARELIGION, FAJOBPROVINCE, FABLOOD, FAINCOME, MARELIGION, MAJOBPROVINCE, MABLOOD, MAINCOME, PARELIGION, PAJOBPROVINCE, PABLOOD, PAINCOME, NICKNAMETH
            $("#ed_hid").val(user.HID);
            $("#ed_faid").val(user.FAID);
            $("#ed_maid").val(user.MAID);
            $("#ed_paid").val(user.PAID);
            $("#ed_ename").val(user.ENAME);
            $("#ed_esurname").val(user.ESURNAME);
            $("#ed_enickname").val(user.ENICKNAME);
            $("#ed_birthpro").val(user.BIRTHPRO);
            $("#ed_bro").val(user.BRO);
            $("#ed_broblm").val(user.BROBLM);
            $("#ed_visit").val(user.VISIT);
            $("#ed_direct").val(user.DIRECT);
            $("#ed_pay").val(user.PAY);
            $("#ed_weight").val(user.WEIGHT);
            $("#ed_height").val(user.HEIGHT);
            $("#ed_healthy").val(user.HEALTHY);
            $("#ed_fareligion").val(user.FARELIGION);
            $("#ed_fajobprovince").val(user.FAJOBPROVINCE);
            $("#ed_fablood").val(user.FABLOOD);
            $("#ed_faincome").val(user.FAINCOME);
            $("#ed_mareligion").val(user.MARELIGION);
            $("#ed_majobprovince").val(user.MAJOBPROVINCE);
            $("#ed_mablood").val(user.MABLOOD);
            $("#ed_maincome").val(user.MAINCOME);
            $("#ed_pareligion").val(user.PARELIGION);
            $("#ed_pajobprovince").val(user.PAJOBPROVINCE);
            $("#ed_pablood").val(user.PABLOOD);
            $("#ed_paincome").val(user.PAINCOME);
            $("#ed_enicknameth").val(user.NICKNAMETH);
            $("#ed_u1").text("ชื่อ " + user.SNAMEFA + " " + user.FNAMEFA + " " + user.LNAMEFA);
            $("#ed_u2").text("ชื่อ " + user.SNAMEMA + " " + user.FNAMEMA + " " + user.LNAMEMA);
            $("#ed_u3").text("ชื่อ " + user.SNAMEPA + " " + user.FNAMEPA + " " + user.LNAMEPA);
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}


function GetUserDetailsFa(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_fa").val(id);
    $.post("ajax/readUserDetailsFa.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var pa = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#u1").text("ชื่อ " + pa.SNAMEFA + " " + pa.FNAMEFA + " " + pa.LNAMEFA);
            $("#u2").text("ชื่อ " + pa.SNAMEMA + " " + pa.FNAMEMA + " " + pa.LNAMEMA);
            $("#u3").text("ชื่อ " + pa.SNAMEPA + " " + pa.FNAMEPA + " " + pa.LNAMEPA);

        }
    );
    // Open modal popup
    $("#add_new_record_modal").modal("show");
}



function UpdateUserDetails() {
    // get values
    var hid = $("#ed_hid").val();
    var faid = $("#ed_faid").val();
    var maid = $("#ed_maid").val();
    var paid = $("#ed_paid").val();
    var ename = $("#ed_ename").val();
    var esurname = $("#ed_esurname").val();
    var enickname = $("#ed_enickname").val();
    var birthpro = $("#ed_birthpro").val();
    var bro = $("#ed_bro").val();
    var broblm = $("#ed_broblm").val();
    var visit = $("#ed_visit").val();
    var direct = $("#ed_direct").val();
    var pay = $("#ed_pay").val();
    var weight = $("#ed_weight").val();
    var height = $("#ed_height").val();
    var healthy = $("#ed_healthy").val();

    var fareligion = $("#ed_fareligion").val();
    var fajobprovince = $("#ed_fajobprovince").val();
    var fablood = $("#ed_fablood").val();
    var faincome = $("#ed_faincome").val();
    var mareligion = $("#ed_mareligion").val();
    var majobprovince = $("#ed_majobprovince").val();
    var mablood = $("#ed_mablood").val();
    var maincome = $("#ed_maincome").val();
    var pareligion = $("#ed_pareligion").val();
    var pajobprovince = $("#ed_pajobprovince").val();
    var pablood = $("#ed_pablood").val();
    var paincome = $("#ed_paincome").val();
    var enicknameth = $("#ed_enicknameth").val();

    // get hidden field value
    var id = $("#hidden_user_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateUserDetails.php", {
            id: id,
            hid: hid,
            faid: faid,
            maid: maid,
            paid: paid,
            ename: ename,
            esurname: esurname,
            enickname: enickname,
            birthpro: birthpro,
            bro: bro,
            broblm: broblm,
            visit: visit,
            direct: direct,
            pay: pay,
            weight: weight,
            height: height,
            healthy: healthy,
            fareligion: fareligion,
            fajobprovince: fajobprovince,
            fablood: fablood,
            faincome:faincome,
            mareligion: mareligion,
            majobprovince: majobprovince,
            mablood: mablood,
            maincome:maincome,
            pareligion: pareligion,
            pajobprovince: pajobprovince,
            pablood: pablood,
            paincome:paincome,
            enicknameth:enicknameth
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload Users by using readRecords();
            //readRecords();
            window.location="index.php?editeother=yes";
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