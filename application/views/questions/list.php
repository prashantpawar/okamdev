<div _submitUrl="">
<?php
foreach($questions as $question) {
?>
		<div class="xg_question_answer" id="<?=$question['id'] ?>">
			<div class="xg_question">
				<div class="xg_question_text"><?= $question['question_text'] ?></div>
				<input type="button" class="xg_answer_button" value="Answer"/>
			</div>
			<div class="xg_answer_relevancy" style="display:none;">
				<div class="xg_answer">
				<?php
				for($i=1; $i<=$numAnswers; $i++) { ?>
					<input type="radio" name="<?= 'answer_'.$question['id'] ?>" value="<?= $question['answer'.$i.'_id'] ?>"/> <?= $question['answer'.$i.'_text'] ?>
				<?php } ?>
				</div>
				<div class="xg_ideal_answer" count="0">
					<h2>Your Ideal Answer would be...</h2>
					<div class="xg_error_text" style="display:none;">Please select a maximum of two answers</div>
					<?php
					for($i=1; $i<=$numAnswers; $i++) { ?>
						<input type="checkbox" name="<?= 'ideal_answer_'.$question['id'] ?>" value="<?= $question['answer'.$i.'_id'] ?>"/> <?= $question['answer'.$i.'_text'] ?>
					<?php } ?>
				</div>
				<div class="xg_relevancy">
					<h2>The answer is...</h2>
					<ul>
						<?php
						foreach($relevancies as $relevancy) { ?>
							<input type="radio" name="<?= 'relevancy_'.$question['id'] ?>" value="<?= $relevancy[0] ?>" /><?=$relevancy[1]?>
						<?php } ?>
					</ul>
				</div>
				<div class="buttonGroup">
					<input type="button" class="xg_submit_answer" value="Submit" />
					<input type="button" class="xg_cancel_answer" value="Cancel" />
				</div>
			</div>
		</div>
	<?php
}
?>
<script src="../../public/js/core/jquery-1.3.2.min.js"></script>
<script src="../../public/js/questionsList.js"></script>