<?php require_once "web/header.php"; ?>
<div class="col-lg-8 auto">
<form name="frmAdd" method="post" action="" id="frmAdd"
    onSubmit="return validate();">
    <div id="mail-status"></div>
    <div>
        <label style="padding-top: 20px;">Name</label> <span
            id="name-info" class="info"></span><br /> <input type="text"
            name="name" id="name" class="demoInputBox"
            value="<?php echo $result[0]["name"]; ?>">
    </div>
    <div>
        <label>Roll Number</label> <span id="roll-number-info"
            class="info"></span><br /> <input type="text"
            name="roll_number" id="roll_number" class="demoInputBox"
            value="<?php echo $result[0]["roll_number"]; ?>">
    </div>
    <div>
        <label>Date of Birth</label> <span id="dob-info" class="info"></span><br />
        <input type="text" name="dob" id="dob" class="demoInputBox"
            value="<?php echo $result[0]["dob"]; ?>">
    </div>
    <div>
        <label>Class</label> <span id="class-info" class="info"></span><br />
        <input type="text" name="class" id="class" class="demoInputBox"
            value="<?php echo $result[0]["class"]; ?>">
    </div>
    <div>
        <input type="submit" name="add" id="btnSubmit" value="Save" />
    </div>
    </div>
    </div>
    <script>
function validate() {
    var valid = true;   
    $(".demoInputBox").css('background-color','');
    $(".info").html('');
    
    if(!$("#name").val()) {
        $("#name-info").html("(required)");
        $("#name").css('background-color','#FFFFDF');
        valid = false;
    }
    if(!$("#roll_number").val()) {
        $("#roll-number-info").html("(required)");
        $("#roll_number").css('background-color','#FFFFDF');
        valid = false;
    }
    if(!$("#dob").val()) {
        $("#dob-info").html("(required)");
        $("#dob").css('background-color','#FFFFDF');
        valid = false;
    }
    if(!$("#class").val()) {
        $("#class-info").html("(required)");
        $("#class").css('background-color','#FFFFDF');
        valid = false;
    }   
    return valid;
}
</script>
    </body>
    </html>