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
	<tr valign='top' height='20'>

            <td align='right'> <b> question_id:  </b> </td>

            <td>
               <select name="question_id" id="question_id" >
				<option value="">Choose Ok_questions</option><?
			 foreach ($ok_questionslist as $ok_questions) {
				$lookupid   = $ok_questions["id"];
				$lookuptext   = $ok_questions["question_text"];
?>
				<option value="<?= $lookupid; ?>" <?= ($lookupid == $question_id)?"selected=selected":""; ?> ><?= $lookuptext; ?></option>
<?			 } ?>
			</select>

            </td>
         </tr>


</table>

<input type="submit" name="Submit" value="Save">
<input type="reset" name="resetForm" value="Clear Form">

</form>