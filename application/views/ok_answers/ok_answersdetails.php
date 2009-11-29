<?
$this->load->helper('url');
$action_url = site_url() . "/ok_answers/$action/";

?>

<h2>Enter ok_answers Details</h2>

<form name="ok_answersdetails" id="ok_answersdetails" method="POST" action="<?= $action_url; ?>">
<input type='hidden' name='id' id='id' value='<?= $id; ?>' >
<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign='top' height='20'>

            <td align='right'> <b> id:  </b> </td>

            <td>
               <?= $id; ?>
            </td>
         </tr>
	<tr valign='top' height='20'>

            <td align='right'> <b> answer_text:  </b> </td>

            <td>
               <textarea cols=35 rows=7 NAME='answer_text' id='answer_text' ><?= $answer_text; ?></textarea>
            </td>
         </tr>


</table>

<input type="submit" name="Submit" value="Save">
<input type="reset" name="resetForm" value="Clear Form">

</form>