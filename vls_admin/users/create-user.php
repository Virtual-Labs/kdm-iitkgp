<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>VLS1-Admin Panel (Create new user)</title>
</head>

<body>

<div class="adminpanel">
<div id="dashboardleftpanels">
<?php
include('../panels/leftpanel.php');
?>
</div>
<div id="dashboardtoppanels">
<?php
include('../panels/toppanel.php');
?>
</div>
<div id="dashboardbodypanels">
<div id="contentTitle"><div id="contentLogo"><img src="../../images/users.png" /></div><div id="contentText">Add New User</div></div>
<div id="login" style="margin-top:25px; margin-left:25px;">
        <form action="../database/dataInsertQuery.php?referral=createNewUser&action=create" method="post" >
          <table class="noBorderTable" align="left" border="0" width="100%">
            <tbody>
              <tr>
                <td class="text" align="left" width="20%"> Email id </td>
                <td class="text" align="left" width=""><input name="email" id="email" type="text" size="50">
                  <span style="color:#0099CC;font-weight: bold;">*</span> </td>
              </tr>
              <tr>
                <td class="text" align="left"> Password </td>
                <td class="text" align="left"><input name="password" id="password" type="password" type="text" size="50">
                  <span style="color: #0099CC;font-weight: bold;">*</span> </td>
              </tr>
              <!--<tr>
                <td class="text" align="left"> Confirm Password: </td>
                <td class="text" align="left"><input name="confPaswd" id="confPaswd" type="password" size="50">
                  <span style="color: #0099CC;font-weight: bold;">*</span> </td>
              </tr>-->
              <!--<tr>
                <td colspan="2">&nbsp;</td>
              </tr>-->
              <tr>
                <td class="text" align="left"> First Name </td>
                <td class="text" align="left"><input name="f_name" id="f_name" type="text" size="50">
                </td>
              </tr>
              <tr>
                <td class="text" align="left"> Last Name </td>
                <td class="text" align="left"><input name="l_name" id="l_name" type="text" size="50">
                </td>
              </tr>
              <tr>
                <td class="text" align="left"> Age Group </td>
                <td class="text" align="left"><select name="age" id="age" style="width:40%">
                    <option selected="selected" value="Select">--Select--</option>
                    <option value="0-15">0 - 15</option>
                    <option value="16-20">16 - 20</option>
                    <option value="21-25">21 - 25</option>
                    <option value="26-30">26 - 30</option>
                    <option value="31-35">31 - 35</option>
                    <option value="36-40">36 - 40</option>
                    <option value="41-45">41 - 45</option>
                    <option value="46-50">46 - 50</option>
                    <option value="Above 50">Above 50</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td class="text" align="left"> Gender </td>
                <td class="text" align="left"><input id="gender" name="gender" value="M" checked="checked" type="radio">
                  &nbsp;Male&nbsp;&nbsp;
                  <input id="gender" name="gender" value="F" type="radio">
                  &nbsp;Female </td>
              </tr>
              <tr>
                <td class="text" align="left"> Phone Number </td>
                <td class="text" align="left"><input name="ph_no" id="ph_no" type="text" size="50">
                </td>
              </tr>
              <tr>
                <td class="text" align="left"> Profession </td>
                <td class="text" align="left"><select name="profession" id="profession" style="width:40%">
                    <option selected="selected" value="Select">--Select--</option>
                    <option value="Student">Student</option>
                    <option value="Academician">Academician</option>
                    <option value="Others">Others</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td class="text" align="left"> College </td>
                <td class="text" align="left"><input name="college" id="college" type="text" size="50">
                </td>
              </tr>
              <tr>
                <td class="text" align="left"> Subject </td>
                <td class="text" align="left"><input name="subject" id="subject" type="text" size="50">
                </td>
              </tr>
              <tr>
                <td class="text" align="left"> University </td>
                <td class="text" align="left"><input name="university" id="university" type="text" size="50">
                </td>
              </tr>
              <tr>
                <td class="text" align="left"> Country </td>
                <td class="text" align="left"><select name="country" id="country" style="width:40%">
                    <option selected="selected" value="Select">--Select--</option>
                    <option value="India">India</option>
                    <option value="Australia">Australia</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Canada">Canada</option>
                    <option value="China">China</option>
                    <option value="Finland">Finland</option>
                    <option value="France">France</option>
                    <option value="Germany">Germany</option>
                    <option value="Ireland">Ireland</option>
                    <option value="Italy">Italy</option>
                    <option value="Japan">Japan</option>
                    <option value="Kuwait">Kuwait</option>
                    <option value="Netherlands">Netherlands</option>
                    <option value="New Zealand">New Zealand</option>
                    <option value="Oman">Oman</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Sweden">Sweden</option>
                    <option value="Switzerland">Switzerland</option>
                    <option value="United States">United States</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="Other">Other</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td class="text" align="left"> State </td>
                <td class="text" align="left"><input name="state" id="state" type="text" size="50"></td>
              </tr>
              <tr>
                <td class="text" align="left"> Role </td>
                <td class="text" align="left"><select name="user_type" id="user_type" style="width:40%">
                    <option selected="selected" value="Select">--Select--</option>
                    <option value="Admin">Administrator</option>
                    <option value="Normal">Normal</option>
					</select>
				</td>
              </tr>
			  
              <tr>
                <td colspan="2" style="color:#FF0000;text-align:center; font-size:15px;"><?php if(isset($_GET['msg']) && $_GET['msg'] == 'success') echo 'User created successfully!'; ?></td>
              </tr>
              <tr>
                <td>&nbsp;
                  <input type="hidden" value="newUser" name="newUser"></td>
                <td style="width:10px; text-align:left;">
                  <input type="image" src="../../images/addNewUser.jpg" />
                </td>
              </tr>
            </tbody>
          </table>
        </form>
      </div>
      <!-- End of login -->

</div>

<div id="dashboardseperator">
</div>

<div id="dashboardrightpanels">
<div style="height:42px;"></div>
<?php
include('../tabs/create-tab-right.php');
?>

</div>

</div><!--End of adminpanel class -->

</body>
</html>
