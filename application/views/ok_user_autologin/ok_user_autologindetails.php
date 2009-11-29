<?
$this->load->helper('url');
$action_url = site_url() . "/ok_user_autologin/$action/";

?>

<h2>Enter ok_user_autologin Details</h2>

<form name="ok_user_autologindetails" id="ok_user_autologindetails" method="POST" action="<?= $action_url; ?>">
<input type='hidden' name='key_id' id='key_id' value='<?= $key_id; ?>' >
<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign='top' height='20'>

            <td align='right'> <b> key_id:  </b> </td>

            <td>
               <input type='text' name='key_id' id='key_id' value='<?= $key_id; ?>' />
            </td>
         </tr>
	<tr valign='top' height='20'>

            <td align='right'> <b> user_id:  </b> </td>

            <td>
               <select name="user_id" id="user_id" >
				<option value="">Choose Ok_users</option><?
			 foreach ($ok_userslist as $ok_users) {
				$lookupid   = $ok_users["id"];
				$lookuptext   = $ok_users["username"];
?>
				<option value="<?= $lookupid; ?>" <?= ($lookupid == $user_id)?"selected=selected":""; ?> ><?= $lookuptext; ?></option>
<?			 } ?>
			</select>

            </td>
         </tr>
	<tr valign='top' height='20'>

            <td align='right'> <b> user_agent:  </b> </td>

            <td>
               <input type='text' name='user_agent' id='user_agent' value='<?= $user_agent; ?>' />
            </td>
         </tr>
	<tr valign='top' height='20'>

            <td align='right'> <b> last_ip:  </b> </td>

            <td>
               <input type='text' name='last_ip' id='last_ip' value='<?= $last_ip; ?>' />
            </td>
         </tr>
	<tr valign='top' height='20'>

            <td align='right'> <b> last_login:  </b> </td>

            <td>
               <input type='text' name='last_login' id='last_login' value='<?= $last_login; ?>' />
            </td>
         </tr>


</table>

<input type="submit" name="Submit" value="Save">
<input type="reset" name="resetForm" value="Clear Form">

</form>