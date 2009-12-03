<ul>
<?php foreach($questions as $question):?>

	<li>
		<?= $question['question_text']?>
		<ol>
			<li><?= $question['answer1_text']?></li>
			<li><?= $question['answer2_text']?></li>
			<li><?= $question['answer3_text']?></li>
			<li><?= $question['answer4_text']?></li>
		</ol>
	</li>

<?php endforeach;?>
</ul>