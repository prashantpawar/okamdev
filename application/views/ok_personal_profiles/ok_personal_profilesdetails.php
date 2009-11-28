<?
$this->load->helper('url');
$action_url = site_url() . "/ok_personal_profiles/$action/";

?>

<h2>Enter ok_personal_profiles Details</h2>

<form name="ok_personal_profilesdetails" id="ok_personal_profilesdetails" method="POST" action="<?= $action_url; ?>">
<input type='hidden' name='id' id='id' value='<?= $id; ?>' >
<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign='top' height='20'>

            <td align='right'> <b> id:  </b> </td>

            <td>
               <?= $id; ?>
            </td>
         </tr>
	<tr valign='top' height='20'>

            <td align='right'> <b> location:  </b> </td>

            <td>
               <input type='text' name='location' id='location' value='<?= $location; ?>' />
            </td>
         </tr>


</table>

<input type="submit" name="Submit" value="Save">
<input type="reset" name="resetForm" value="Clear Form">

</form>