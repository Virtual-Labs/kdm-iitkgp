<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Mechanical Engineering Department(IIT KGP)</title>
<meta name='robots' content='noindex,nofollow' />
<script type="text/javascript" src="<?php echo $base_user_dir; ?>js/jquery-latest.js"></script>
<script type="text/javascript" src="<?php echo $base_user_dir; ?>js/jquery.validate.js"></script>


  <script>
  $(document).ready(function(){
    $("#saveRegistration").validate();
  });

  function checkEmail(email)
  {
    ajaxCheckMailExists(email);
  }


  </script>

</head>

<body>
<div class="login-form">
  <div class="wrapper-header">
    <?php include("header.php"); ?>
  </div>
  <!-- End of Wrapper class -->
  <div class="wrapper-content">
    <div id="logintitle">Virtual Lab-01 Registration</div>
    <div id="divseperator"></div>
    <div id="loginbyothers">
      <div id="otherHeader"><div style="padding-top:4px;">Sign in using open ID</div></div>
	  <div id="openIdText" style=""><p>If you use any of the following services, you already have your own OpenID. Please choose one and associate it with our website. You will be taken to the respective providers website and our website will never see your password or other personal information.</p>
<p>We use the name and email address that provider gives us to set up your account. We hate spam as much as you do and will never ever share your email with a third party service.</p></div>
    </div>
    <!-- end of loginbyothers div -->
	
	
	
    <div id="loginseperator"><img src="images/seperator_line.png"></div>
    <div id="logindirect">
      <div id="otherHeader"><div style="padding-top:4px;">Enter the following details</div></div>
      <div id="login">
        <form action="database/dataInsertQuery.php?referral=saveNewUser&action=create" method="post" id="saveRegistration" name="saveRegistration">
          <table class="noBorderTable" align="left" border="0" width="100%">
            <tbody>
              <tr>
                <td class="text" align="left" width="40%"> Email id: </td>
                <td class="text" align="left" width=""><input name="email" id="email" type="text" value="" class="required email" onblur="checkEmail(this.value);">
                  <span style="color: #0099CC;font-weight: bold;">*</span> 
                  <span id="mailExists" style="display:block;color:red;"></span></td>
              </tr>
              <tr>
                <td class="text" align="left"> Password: </td>
                <td class="text" align="left"><input name="password" id="password" type="password" class="required">
                  <span style="color: #0099CC;font-weight: bold;">*</span> </td>
              </tr>
              <tr>
                <td class="text" align="left"> Confirm Password: </td>
                <td class="text" align="left"><input name="confPaswd" id="confPaswd" type="password" class="required">
                  <span style="color: #0099CC;font-weight: bold;">*</span> </td>
              </tr>
              
              <tr>
                <td class="text" align="left"> First Name: </td>
                <td class="text" align="left"><input name="f_name" id="f_name" type="text"  class="required">
		<span style="color: #0099CC;font-weight: bold;">*</span> </td>
                </td>
              </tr>
              <tr>
                <td class="text" align="left"> Last Name: </td>
                <td class="text" align="left"><input name="l_name" id="l_name" type="text" class="required">
                <span style="color: #0099CC;font-weight: bold;">*</span> </td>
                </td>
              </tr>
              <tr>
                <td class="text" align="left"> Age Group: </td>
                <td class="text" align="left"><select name="age" id="age" style="width:72%" class="required">
                    <option selected="selected" value="">--Select--</option>
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
                <td class="text" align="left"> Gender: </td>
                <td class="text" align="left"><input id="gender" name="gender" value="M" checked="checked" type="radio">
                  &nbsp;Male&nbsp;&nbsp;
                  <input id="gender" name="gender" value="F" type="radio">
                  &nbsp;Female </td>
              </tr>
              <tr>
                <td class="text" align="left"> Phone Number: </td>
                <td class="text" align="left"><input name="ph_no" id="ph_no" type="text">
                </td>
              </tr>
              <tr>
                <td class="text" align="left"> Profession: </td>
                <td class="text" align="left"><select name="profession" id="profession" style="width:72%" class="required">
                    <option selected="selected" value="">--Select--</option>
                    <option value="Student">Student</option>
                    <option value="Academician">Academician</option>
                    <option value="Others">Others</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td class="text" align="left"> College: </td>
                <td class="text" align="left"><input name="college" id="college" type="text">
                </td>
              </tr>
              <tr>
                <td class="text" align="left"> Subject: </td>
                <td class="text" align="left"><input name="subject" id="subject" type="text">
                </td>
              </tr>
              <tr>
                <td class="text" align="left"> University: </td>
                <td class="text" align="left"><input name="university" id="university" type="text">
                </td>
              </tr>
              <tr>
                <td class="text" align="left"> Country: </td>
                <td class="text" align="left"><select name="country" id="country" style="width:72%;" class="required">
                    <option selected="selected" value="">--Select--</option>
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
                <td class="text" align="left"> State: </td>
                <td class="text" align="left"><input name="state" id="state" type="text">
                </td>
              </tr>
              <tr>
			  <?php if(isset($_GET['msg']) && $_GET['msg'] == "success")
			           $msg = "Registration succesful";
					else
					   $msg = "";
			  ?>
                <td colspan="2" style="text-align:center; color:#FF0000;"><?php echo $msg; ?></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td align="left">
                  <input class="submit" value="Register" id="register" name="register" type="submit">&nbsp;&nbsp;&nbsp;
				  <input value="Cancel" id="cancel" name="cancel" type="reset">
                </td>
              </tr>
            </tbody>
          </table>
        </form>
      </div>
      <!-- End of login -->
    </div>
    <!-- end of logindirect div -->
	<div style="clear:both;"></div>
  </div>
    <div class="wrapper-footer">
	 <?php
	 include('footer.php');
	 ?>
	</div><!-- End of wrapper-footer div -->
  <!-- end of wrapper-content class -->
</div>
<!-- end of login-form -->
