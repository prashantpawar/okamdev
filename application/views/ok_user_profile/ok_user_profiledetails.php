<?
$this->load->helper('url');
$action_url = site_url() . "/ok_user_profile/$action/";

?>

<h2>Enter ok_user_profile Details</h2>

<form name="ok_user_profiledetails" id="ok_user_profiledetails" method="POST" action="<?= $action_url; ?>">
<input type='hidden' name='id' id='id' value='<?= $id; ?>' >
<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign='top' height='20'>

            <td align='right'> <b> id:  </b> </td>

            <td>
               <?= $id; ?>
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

            <td align='right'> <b> country:  </b> </td>

            <td>
               <input type='text' name='country' id='country' value='<?= $country; ?>' />
            </td>
         </tr>
	<tr valign='top' height='20'>

            <td align='right'> <b> website:  </b> </td>

            <td>
               <input type='text' name='website' id='website' value='<?= $website; ?>' />
            </td>
         </tr>


</table>

<input type="submit" name="Submit" value="Save">
<input type="reset" name="resetForm" value="Clear Form">

</form>