<?
$this->load->helper('url');
$action_url = site_url() . "/ok_users/$action/";

?>

<h2>Enter ok_users Details</h2>

<form name="ok_usersdetails" id="ok_usersdetails" method="POST" action="<?= $action_url; ?>">
<input type='hidden' name='id' id='id' value='<?= $id; ?>' >
<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign='top' height='20'>

            <td align='right'> <b> id:  </b> </td>

            <td>
               <?= $id; ?>
            </td>
         </tr>
	<tr valign='top' height='20'>

            <td align='right'> <b> role_id:  </b> </td>

            <td>
               <select name="role_id" id="role_id" >
				<option value="">Choose Ok_roles</option><?
			 foreach ($ok_roleslist as $ok_roles) {
				$lookupid   = $ok_roles["id"];
				$lookuptext   = $ok_roles["name"];
?>
				<option value="<?= $lookupid; ?>" <?= ($lookupid == $role_id)?"selected=selected":""; ?> ><?= $lookuptext; ?></option>
<?			 } ?>
			</select>

            </td>
         </tr>
	<tr valign='top' height='20'>

            <td align='right'> <b> username:  </b> </td>

            <td>
               <input type='text' name='username' id='username' value='<?= $username; ?>' />
            </td>
         </tr>
	<tr valign='top' height='20'>

            <td align='right'> <b> password:  </b> </td>

            <td>
               <input type='password' name='password' id='password' value='<?= $password; ?>' />
            </td>
         </tr>
	<tr valign='top' height='20'>

            <td align='right'> <b> email:  </b> </td>

            <td>
               <input type='text' name='email' id='email' value='<?= $email; ?>' />
            </td>
         </tr>
	<tr valign='top' height='20'>

            <td align='right'> <b> banned:  </b> </td>

            <td>
               <input type='text' name='banned' id='banned' value='<?= $banned; ?>' />
            </td>
         </tr>
	<tr valign='top' height='20'>

            <td align='right'> <b> ban_reason:  </b> </td>

            <td>
               <input type='text' name='ban_reason' id='ban_reason' value='<?= $ban_reason; ?>' />
            </td>
         </tr>
	<tr valign='top' height='20'>

            <td align='right'> <b> newpass:  </b> </td>

            <td>
               <input type='text' name='newpass' id='newpass' value='<?= $newpass; ?>' />
            </td>
         </tr>
	<tr valign='top' height='20'>

            <td align='right'> <b> newpass_key:  </b> </td>

            <td>
               <input type='text' name='newpass_key' id='newpass_key' value='<?= $newpass_key; ?>' />
            </td>
         </tr>
	<tr valign='top' height='20'>

            <td align='right'> <b> newpass_time:  </b> </td>

            <td>
               <input type='text' name='newpass_time' id='newpass_time' value='<?= $newpass_time; ?>' />
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
	<tr valign='top' height='20'>

            <td align='right'> <b> created:  </b> </td>

            <td>
               <input type='text' name='created' id='created' value='<?= $created; ?>' />
            </td>
         </tr>
	<tr valign='top' height='20'>

            <td align='right'> <b> modified:  </b> </td>

            <td>
               <input type='text' name='modified' id='modified' value='<?= $modified; ?>' />
            </td>
         </tr>


</table>

<input type="submit" name="Submit" value="Save">
<input type="reset" name="resetForm" value="Clear Form">

</form>