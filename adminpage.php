<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif; background-color: #5f9ea0}

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
/*Styling the reports table*/
.leave_table{
  border-collapse: collapse;
  width: 100px;
}
td,th{
  border: 1px solid black;
  height: 50px;
  padding: 15px;
  border-bottom: 1px solid #ddd;
  /*border-collapse: collapse*/
}
tr:nth-child(even){
  background-color: #f2f2f2;
}
tr:hover{
  background-color: #ffa869;
}
#Emp_adder{
  text-align: center;
  margin:0 auto;width:75%;text-align:left;
  -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
            box-sizing: border-box;
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

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
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
hr{
  lighting-color: inherit;
}
</style>
</head>
<body>

<h2 align="center">Dodore Management</h2>
<hr style="">
<?php
//php connecting to database a connection
//echo "Hello World";
//require('page2.php');
//session_start();
echo session_id();
?>
<p><? echo "Emmanuel"; ?></p>
<p align="center" color="blue">Welcome</p><? //php echo $usrnam;  ?>
<div class="tab">
  <button class="tablinks" onclick="openmodule(event, 'Leave System')" id="defaultOpen" onmouseover="moduleinfo('Leave System')">Leave System</button>
  <button class="tablinks" onclick="openmodule(event, 'Training Manual')" onmouseover="moduleinfo('Training Manual')">Training Manual</button>
  <button class="tablinks" onclick="openmodule(event, 'Department Tasks')">Department Tasks</button>
  <button class="tablinks" onclick="openmodule(event, 'Employee Operations')">Employee Operations</button>
  <!--<button class="tablinks" onclick="openmodule(event, 'Department Operations')">Department Operations</button>-->
  <button class="tablinks" onclick="openmodule(event, 'Notice')">Workforce Notice</button>
</div>

<div id="Leave System" class="tabcontent">
  <h3>Leave Requests</h3>
  <?php  
  $mysqli = new mysqli('localhost', 'root', '', 'flexloc');
  if ($mysqli==false) {
    die("Error: Can't Connect");
  }
  $fetcher = "SELECT * FROM `leave_days_report`where `Status`='Pending'" ;
  if ($gotten = mysqli_query($mysqli, $fetcher)) {
    # code...
    if(mysqli_num_rows($gotten)>0) {
      # code...
      echo "<table id='leave_table'>";
      echo "<caption><b>Pending Leave Requests</b></caption>";
      echo "<tr>";
      echo "<th>Employee_Name</th>";
      echo "<th>No_of_Days</th>";
      echo "<th>Start_Day</th>";
      echo "<th>Report_Day</th>";
      echo "</tr>";
      while ($myrows = mysqli_fetch_array($gotten)) 
      {
        echo "<tr>";
        echo "<td>".$myrows['Employee_Name']."</td>";
        echo "<td>".$myrows['No_of_Days']."</td>";
        echo "<td>".$myrows['Start_Day']."</td>";
        echo "<td>".$myrows['Report_Day']."</td>";
        echo "</tr>";
      }
      echo "</table>";
      mysqli_free_result($gotten);
    }
    else{
      echo "No Pending Leave Requests";
    }
  }
  ?>
  <form action="approved_leave.php">
    <input type="Submit" name="Approve Requests" value="Approve All">
  </form>
  <input type="Submit" name="Decline Requests" value="Decline All" formaction="declined_leave.php">
</div>

<div id="Training Manual" class="tabcontent">
  <h3>Training Manual</h3>
  <p>Welcome To Dodore's Training Resources:</p>
  <img src="1.jpg" height="200px" width="200px">
  <object width="200" height="400" data="file1.pdf" standby="Welcome" title="Process Flowcharts"></object>
  <object width="200" height="400" data="file3.pdf" standby="Set Days" title="ICT Policy"></object>
  <embed src="file1.pdf" height="400" width="200"></embed> 
</div>

<div id="Department Tasks" class="tabcontent">
  <?php
  /*
  $connect = new mysqli('localhost','root','','flexloc');
  if ($connect==false) {
    # code...
    die("Error: Cannot Connect");
  }
  //Getting the records from database:-)
  $getrecs = "SELECT * FROM `department_table`";
  if ($fetchedls = mysqli_query($connect,$getrecs)) {
    # code...
    if (mysqli_num_rows($fetchedls)>0) {
      # code...
      echo "<table id=tasks table>";
      echo "<caption>All Department Tasks</caption>";
      echo "<tr>";
      echo "<th>Department</th>";
      echo "<th>Tasks</th>";
      echo "</tr>";
      while ($gottenls==mysqli_fetch_array($fetchedls)) {
        # code...
        echo "<tr>";
        echo "<td>".$gottenls['Department Name']."</td>";
        echo "<td>".$gottenls['Tasks']."</td>";
        echo "</tr>";
      }
      echo "</table>";
      mysql_free_result($fetchedls);
    }
    else{
      echo "No task found yet! Contact dev for details";
    }
  }
*/
  ?>

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
</div>

<div id="Employee Operations" class="tabcontent">
  <h3>Employee Operations</h3>
  <form id="Emp_adder" action="registeremp.php" method="POST">
    <table cellpadding="2">
      <tr>
        <td>Employee Name:</td>
        <td><input type="text" name="empname" width="193px"></td>
      </tr
      <tr>
        <td>Employee Department</td>
        <!--<input type="text" name="emp_department" width="193px">-->
        <td><select name="emp_department" style="width: 170px;">
        <option>ICT</option>
        <option>Finance</option>
        <option>Data Quality</option>
        <option>CRM</option>
        <option>Operations</option>
      </select></td>
      </tr>
      <tr>
        <td>Employee Role:</td>
        <td><select name="emp_role" style="width: 170px">
          <option>Supervisor</option>
          <option>Standard User</option>
        </select></td>
      </tr>
      <tr>
        <td>Employee No.:</td>
        <td><input type="text" name="emp_no" width="193px" onkeypress="validate(event)"></td>
      </tr>
      <tr>
        <td>Employee Leave Days:</td>
        <td><input type="text" name="emp_leave" width="193px" value="21"></td>
      </tr>
      <tr>
        <td>Employee Password:</td>
        <td><input type="Password" name="emp_passwd" width="193px"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" name="Submit" value="Add Employee" align="center"></td>
      </tr>
    </table>
  </form>
  <!--
  <form id="Emp_adder" action="registeremp.php" method="POST">
    <h4>Add Employee</h4>
    Employee Name:<input type="text" name="empname" width="193px"><br>
    Employee Department:<input type="text" name="emp_department" width="193px"><br>
    Employee No.:<input type="text" name="emp_no" width="193px"><br>
    Employee Leave Days:<input type="text" name="emp_leave" width="193px" value="21"><br>
    Employee Password:<input type="Password" name="emp_passwd" width="193px"><br>
    <input type="submit" name="Submit" value="Add Employee" align="center">
  </form>
-->
</div>
<!--
<div id="Department Operations" class="tabcontent">
  <h3>Department Operations</h3>
  <h4><b>Add Department tasks here:</b></h4>
  <form action="department.php" method="POST">
    <table cellpadding="2">
      <tr>
        <td>Department Name :<br></td>
        <td><select style="width: 300px" name="dept_namer">
          <option>ICT</option>
          <option>Operations</option>
          <option>CRM</option>
          <option>Finance</option>
        </select></td>
      </tr>
      <hr>
      <tr>
        <td>Department No.</td>
        <td><input type="Text" name="dept_numbr" width="300px" onkeypress="validate(event)"><br></td>
        <td><br></td>
      </tr>
      <tr>
        <td>Department Tasks:</td>
        <td><input type="text" name="dept_tasks" width="60%" style="width: 400px"></td>
      </tr>
    </table>
    //Button to add Task elements
    <div id="dynamicCheck">
        <div id="newElementId"></div>
        <input type="button" value="Add Task" onclick="createNewElement();" name="tasksadded" />
        </div>
        <input type="Submit" name="Submit" value="Update/Add Department">
  </form>
</div>
-->
<div id="Notice" class="tabcontent">
  <h3>Workforce Board</h3>
  <h4>Enter what you want to Notify here:</h4>
  <form action="Workforcenotice.php" method="POST">
    <table cellpadding="2">
      <tr>
        <td>Enter Notice to send:</td>
        <td><textarea rows="4" cols="50" name="notice_sent"></textarea>></td>
      </tr>
      <tr>
        <td>Sent by:</td>
        <td><input type="text" name="noticesender" value="<?php echo "Admin";?>"></td>
      </tr>
      <tr>
        <td><input type="submit" name="sendnotice" value="Send My notice"></td>
      </tr>
      
    </table>
  </form>
  <!--<input type="text" name="noticeboard" width="70%" height="70%">-->
  
</div>
<!--scripts go here:-)-->
<!--script for the individual modules-->
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
//Script to hover info
function moduleinfo(moduleName)
{
  if (moduleName == "Leave System") {
    //document.write("Add Employees Here");
  }
}
//script to validate numbers are entered in numbers field
function validate(evt) {
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
  } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
  }
  var regex = /[0-9]|\./;
  if( !regex.test(key) && regex.test(key)>21) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
//Function to add tasks in task tab:-)
function createNewElement() {
    // First create a DIV element.
  var txtNewInputBox = document.createElement('div');

    // Then add the content (a new input box) of the element.
  txtNewInputBox.innerHTML = "<input type='text' id='newInputBox' style='width: 400px'>";

    // Finally put it where it is supposed to appear.
  document.getElementById("newElementId").appendChild(txtNewInputBox);
}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
</body>
</html> 
