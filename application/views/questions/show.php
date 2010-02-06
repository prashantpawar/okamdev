<ul>
<?php 
	echo form_open($this->uri->uri_string());
	foreach($questions as $question):?>

	<li class="bullet">
		<?= $question['question_text']?>
		<ul>
			<li class="nobullet"><?php
				$data=array(
					'name'=>intval($question['id']),
					'id'=>intval($question['id']),
					'value'=>$question['answer1_id'],
					'checked'=>TRUE
					);
				echo form_radio($data);
				echo $question['answer1_text'];?>
			</li>
			<li class="nobullet"><?php
				$data=array(
					'name'=>intval($question['id']),
					'id'=>intval($question['id']),
					'value'=>$question['answer2_id'],
					'checked'=>FALSE
					);
				echo form_radio($data);
				echo $question['answer2_text'];?>
			</li>
			<li class="nobullet"><?php
				$data=array(
					'name'=>intval($question['id']),
					'id'=>intval($question['id']),
					'value'=>$question['answer3_id'],
					'checked'=>FALSE
					);
				echo form_radio($data);
				echo $question['answer3_text'];?>
			</li>
			<li class="nobullet"><?php
				$data=array(
					'name'=>intval($question['id']),
					'id'=>intval($question['id']),
					'value'=>$question['answer4_id'],
					'checked'=>FALSE
					);
				echo form_radio($data);
				echo $question['answer4_text'];?>
			</li>
		</ul>
	</li>

<?php endforeach;
	echo form_submit('submit','Submit');
	echo form_close();
?>

</ul>