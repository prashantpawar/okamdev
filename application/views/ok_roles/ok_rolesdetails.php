<?
$this->load->helper('url');
$action_url = site_url() . "/ok_roles/$action/";

?>

<h2>Enter ok_roles Details</h2>

<form name="ok_rolesdetails" id="ok_rolesdetails" method="POST" action="<?= $action_url; ?>">
<input type='hidden' name='id' id='id' value='<?= $id; ?>' >
<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign='top' height='20'>

            <td align='right'> <b> id:  </b> </td>

            <td>
               <?= $id; ?>
            </td>
         </tr>
	<tr valign='top' height='20'>

            <td align='right'> <b> parent_id:  </b> </td>

            <td>
               <select name="parent_id" id="parent_id" >
				<option value="">Choose Ok_roles</option><?
			 foreach ($ok_roleslist as $ok_roles) {
				$lookupid   = $ok_roles["id"];
				$lookuptext   = $ok_roles["name"];
?>
				<option value="<?= $lookupid; ?>" <?= ($lookupid == $parent_id)?"selected=selected":""; ?> ><?= $lookuptext; ?></option>
<?			 } ?>
			</select>

            </td>
         </tr>
	<tr valign='top' height='20'>

            <td align='right'> <b> name:  </b> </td>

            <td>
               <input type='text' name='name' id='name' value='<?= $name; ?>' />
            </td>
         </tr>


</table>

<input type="submit" name="Submit" value="Save">
<input type="reset" name="resetForm" value="Clear Form">

</form>