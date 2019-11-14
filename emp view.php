<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif; background-color: #5f9ea0;}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  /*background-color: #f1f1f1;*/
  width: 30%;
  height: 500px;
  color: #99ffcc;
  /*background: linear-gradient(to right, #ff66ff 48%, #6666ff 100%);*/
  text-decoration-color: #99ffcc;
}
body{
  background-color: #5f9ea0
}
/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}
.welcome_msg{
  display: block;
  transition-timing-function: ease-in-out;
  text-decoration-style: wavy;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}
.hrlight{

}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: 500px;
  /*background: linear-gradient(to right, #ff66ff 58%, #00ffff 100%);*/
}
</style>
</head>
<body>

<h2 align="center">Dodore Management</h2>
<h3 class="welcome_msg">
<?php
//php connecting to database a connection
//echo "Hello World";
//require('page2.php');
//echo "Welcome $usrnam";
//echo "Welcome".$_SESSION["logged_in"];
//include('page2.php');
echo "Welcome "; echo $_SESSION['loggedin'];
//echo $usrnam;
?>
</h3>
<p><?// echo "Emmanuel"; ?></p>
<p align="center" color="blue">Welcome</p>
<?php
 //include('page2.php');
 //echo $usrnam;
 //echo "Session logged in is".$_SESSION["logged_in"]; 
?>
<div class="tab">
  <button class="tablinks" onclick="openmodule(event, 'Leave System')" id="defaultOpen">Leave System</button>
  <button class="tablinks" onclick="openmodule(event, 'Training Manual')">Training Manual</button>
  <button class="tablinks" onclick="openmodule(event, 'Department Tasks')">Department Tasks</button>
  <button class="tablinks" onclick="openmodule(event, 'Posted Notice')">Posted Notices</button>

  <button class="tablinks" onclick="openmodule(event, 'Notice')">Workforce Notice</button>
</div>

<div id="Leave System" class="tabcontent">
  <h3>Leave System</h3>
  <p>
    <h4>Apply for Leave here:</h4>
    <form action="Leave_apply.php" name="leave_form" method="POST" onsubmit="return(validateleave())">
      <table>
        <tr>
          <td>Name of Applicant:</td>
          <td><input type="text" name="applicant_name" style="width: 400px" value="<?php echo $_SESSION['loggedin']?>" disabled=""></td>
        </tr>
        <tr>
          <td>Type of Leave Applying</td>
          <td><select name="leave_type" style="width: 400px">
            <option>Annual Leave</option>
            <option>Compassionate Leave</option>            
            <option>Emergency Leave</option>
            <option>Sick Leave</option>
            <option>Unpaid Leave</option>
          </select></td>
        </tr>
        <tr>
          <td>No. of Days for Application:</td>
          <td><input type="text" name="No_of_days" onkeypress="validate(event)" id="daysnum" onsubmit="return(validateleave())" style="width: 400px"></td>
        </tr>
        <tr>
          <td>Start Day:</td>
          <td><input type="date" name="start_day" style="width: 500px"></td>
        </tr>
        <tr>
          <td>Reporting Day:</td>
          <td><input type="date" name="end_day" style="width: 500px"></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="Submit" name="apply" value="Apply"></td>
        </tr>
        <tr>
          <td>Status</td>
          <td><input type="text" value="Pending" name="leave_status" disabled=""></td>
        </tr>
      </table>
    </form>
  </p>
</div>

<div id="Training Manual" class="tabcontent">
  <h3>Training Manual</h3>
  <p>Welcome To Dodore's Training Resources:</p>
  <img src="1.jpg" height="200px" width="200px">
  <object width="200" height="400" data="file1.pdf" standby="Welcome" title="Process Flowcharts"></object>
  <object width="200" height="400" data="file3.pdf" standby="Set Days" title="ICT Policy"></object>
  <embed src="file1.pdf" height="400" width="200"></embed>
  <!--<input type="file" name="file1" src="file1.pdf">--> 
</div>

<div id="Department Tasks" class="tabcontent">
  <h3>Tasks</h3>
  <p>1. Fill in meeting with Finance team</p>
  <hr>
  <p>2. Train CRM team on the new System </p>
  <hr>
  <p>3. Add the Payment Instructions Module</p>
  <hr>
  <p>4. Office Support </p>
  <hr>
  <p>5. Maintenance Check of Laptop hardware </p>
  <hr>
  <p>6. Develop Merchant App </p>
  <hr>
  <p>7. Process Flowcharts for system.</p>
  <?php

  ?>
</div>
<div id="Notice" class="tabcontent">
  <h3>Workforce Board</h3>
  <hr id="hrlight">
  <h4>Enter what you want to Notify here:</h4>
  <form action="Workforcenotice.php" method="POST">
    <table cellpadding="2">
      <tr>
        <td>Enter Notice to send:</td>
        <td><textarea rows="4" cols="50" name="notice_sent"></textarea>></td>
      </tr>
      <tr>
        <td>Sent by:</td>
        <td><input type="text" name="noticesender" value="<?php echo $_SESSION['loggedin'];?>" disabled=""></td>
        <td><input type="submit" name="sendnotice" value="Send My notice"></td>
      </tr>
    </table>
  </form>
  <!--<input type="text" name="noticeboard" width="70%" height="70%">-->
  
</div>

<script>
function openmodule(evt, moduleName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(moduleName).style.display = "block";
  evt.currentTarget.className += " active";
}
function validateleave()
{
  if (document.getElementById(daysnum) > 21) {
    alert("No of Days Cannot be greater than 21! Annual leave maximum is 21!");
    document.leave_form.No_of_days.focus();
    return false;
  }
  return(true);
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

</body>
</html> 
