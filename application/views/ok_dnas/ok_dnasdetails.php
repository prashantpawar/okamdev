<?
$this->load->helper('url');
$action_url = site_url() . "/ok_dnas/$action/";

?>

<h2>Enter ok_dnas Details</h2>

<form name="ok_dnasdetails" id="ok_dnasdetails" method="POST" action="<?= $action_url; ?>">
<input type='hidden' name='id' id='id' value='<?= $id; ?>' >
<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign='top' height='20'>

            <td align='right'> <b> id:  </b> </td>

            <td>
               <?= $id; ?>
            </td>
         </tr>
	<tr valign='top' height='20'>

            <td align='right'> <b> userid:  </b> </td>

            <td>
               <select name="userid" id="userid" >
				<option value="">Choose Fa_user</option><?
			 foreach ($fa_userlist as $fa_user) {
				$lookupid   = $fa_user["id"];
				$lookuptext   = $fa_user["Select display field"];
?>
				<option value="<?= $lookupid; ?>" <?= ($lookupid == $userid)?"selected=selected":""; ?> ><?= $lookuptext; ?></option>
<?			 } ?>
			</select>

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
	<tr valign='top' height='20'>

            <td align='right'> <b> answer_id:  </b> </td>

            <td>
               <select name="answer_id" id="answer_id" >
				<option value="">Choose Ok_answers</option><?
			 foreach ($ok_answerslist as $ok_answers) {
				$lookupid   = $ok_answers["id"];
				$lookuptext   = $ok_answers["answer_text"];
?>
				<option value="<?= $lookupid; ?>" <?= ($lookupid == $answer_id)?"selected=selected":""; ?> ><?= $lookuptext; ?></option>
<?			 } ?>
			</select>

            </td>
         </tr>
	<tr valign='top' height='20'>

            <td align='right'> <b> relevance_id:  </b> </td>

            <td>
               <select name="relevance_id" id="relevance_id" >
				<option value="">Choose Ok_relevancies</option><?
			 foreach ($ok_relevancieslist as $ok_relevancies) {
				$lookupid   = $ok_relevancies["id"];
				$lookuptext   = $ok_relevancies["relevancy"];
?>
				<option value="<?= $lookupid; ?>" <?= ($lookupid == $relevance_id)?"selected=selected":""; ?> ><?= $lookuptext; ?></option>
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
				$lookupid   = $ok_answers["Select lookup field"];
				$lookuptext   = $ok_answers["Select display field"];
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
				$lookupid   = $ok_answers["Select lookup field"];
				$lookuptext   = $ok_answers["Select display field"];
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
				$lookupid   = $ok_answers["Select lookup field"];
				$lookuptext   = $ok_answers["Select display field"];
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
				$lookupid   = $ok_answers["Select lookup field"];
				$lookuptext   = $ok_answers["Select display field"];
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
				$lookupid   = $ok_answers["Select lookup field"];
				$lookuptext   = $ok_answers["Select display field"];
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
				$lookupid   = $ok_answers["Select lookup field"];
				$lookuptext   = $ok_answers["Select display field"];
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