<?
$this->load->helper('url');
$action_url = site_url() . "/ok_questions/$action/";

?>

<h2>Enter ok_questions Details</h2>

<form name="ok_questionsdetails" id="ok_questionsdetails" method="POST" action="<?= $action_url; ?>">
<input type='hidden' name='id' id='id' value='<?= $id; ?>' >
<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign='top' height='20'>

            <td align='right'> <b> id:  </b> </td>

            <td>
               <?= $id; ?>
            </td>
         </tr>
	<tr valign='top' height='20'>

            <td align='right'> <b> question_text:  </b> </td>

            <td>
               <textarea cols=35 rows=7 NAME='question_text' id='question_text' ><?= $question_text; ?></textarea>
            </td>
         </tr>
	<tr valign='top' height='20'>

            <td align='right'> <b> addedbyuser_id:  </b> </td>

            <td>
               <select name="addedbyuser_id" id="addedbyuser_id" >
				<option value="">Choose Fa_user</option><?
			 foreach ($fa_userlist as $fa_user) {
				$lookupid   = $fa_user["id"];
				$lookuptext   = $fa_user["user_name"];
?>
				<option value="<?= $lookupid; ?>" <?= ($lookupid == $addedbyuser_id)?"selected=selected":""; ?> ><?= $lookuptext; ?></option>
<?			 } ?>
			</select>

            </td>
         </tr>
	<tr valign='top' height='20'>

            <td align='right'> <b> answer1:  </b> </td>

            <td>
               <select name="answer1_id" id="answer1_id" >
				<option value="">Choose Ok_answers</option><?
			 foreach ($ok_answerslist as $ok_answers) {
				$lookupid   = $ok_answers["id"];
				$lookuptext   = $ok_answers["answer_text"];
?>
				<option value="<?= $lookupid; ?>" <?= ($lookupid == $answer1_id)?"selected=selected":""; ?> ><?= $lookuptext; ?></option>
<?			 } ?>
			</select>

            </td>
         </tr>
	<tr valign='top' height='20'>

            <td align='right'> <b> answer2:  </b> </td>

            <td>
               <select name="answer2_id" id="answer2_id" >
				<option value="">Choose Ok_answers</option><?
			 foreach ($ok_answerslist as $ok_answers) {
				$lookupid   = $ok_answers["id"];
				$lookuptext   = $ok_answers["answer_text"];
?>
				<option value="<?= $lookupid; ?>" <?= ($lookupid == $answer2_id)?"selected=selected":""; ?> ><?= $lookuptext; ?></option>
<?			 } ?>
			</select>

            </td>
         </tr>
	<tr valign='top' height='20'>

            <td align='right'> <b> answer3:  </b> </td>

            <td>
               <select name="answer3_id" id="answer3_id" >
				<option value="">Choose Ok_answers</option><?
			 foreach ($ok_answerslist as $ok_answers) {
				$lookupid   = $ok_answers["id"];
				$lookuptext   = $ok_answers["answer_text"];
?>
				<option value="<?= $lookupid; ?>" <?= ($lookupid == $answer3_id)?"selected=selected":""; ?> ><?= $lookuptext; ?></option>
<?			 } ?>
			</select>

            </td>
         </tr>
	<tr valign='top' height='20'>

            <td align='right'> <b> answer4:  </b> </td>

            <td>
               <select name="answer4_id" id="answer4_id" >
				<option value="">Choose Ok_answers</option><?
			 foreach ($ok_answerslist as $ok_answers) {
				$lookupid   = $ok_answers["id"];
				$lookuptext   = $ok_answers["answer_text"];
?>
				<option value="<?= $lookupid; ?>" <?= ($lookupid == $answer4_id)?"selected=selected":""; ?> ><?= $lookuptext; ?></option>
<?			 } ?>
			</select>

            </td>
         </tr>
	<tr valign='top' height='20'>

            <td align='right'> <b> answer5:  </b> </td>

            <td>
               <select name="answer5_id" id="answer5_id" >
				<option value="">Choose Ok_answers</option><?
			 foreach ($ok_answerslist as $ok_answers) {
				$lookupid   = $ok_answers["id"];
				$lookuptext   = $ok_answers["answer_text"];
?>
				<option value="<?= $lookupid; ?>" <?= ($lookupid == $answer5_id)?"selected=selected":""; ?> ><?= $lookuptext; ?></option>
<?			 } ?>
			</select>

            </td>
         </tr>
	<tr valign='top' height='20'>

            <td align='right'> <b> answer6:  </b> </td>

            <td>
               <select name="answer6_id" id="answer6_id" >
				<option value="">Choose Ok_answers</option><?
			 foreach ($ok_answerslist as $ok_answers) {
				$lookupid   = $ok_answers["id"];
				$lookuptext   = $ok_answers["answer_text"];
?>
				<option value="<?= $lookupid; ?>" <?= ($lookupid == $answer6_id)?"selected=selected":""; ?> ><?= $lookuptext; ?></option>
<?			 } ?>
			</select>

            </td>
         </tr>


</table>

<input type="submit" name="Submit" value="Save">
<input type="reset" name="resetForm" value="Clear Form">

</form>