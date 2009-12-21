(function(){
	console.log('here');
	
	var _ = {}
	
	var answerDiv = null;
	
	var answerHandlersAdded = false;
	
	_.initialize = function() {	
	}
	
	
	$('.xg_answer_button').toggle(
		function() {
			$(this).parent().next().slideDown(500);
			_.addAnswerHandlers();
			answerHandlersAdded = true;
		}, 
		function() { 
			$(this).parent().next().slideUp(500); 
		}
	);
	
	_.addAnswerHandlers = function() {
		if (answerHandlersAdded) { return; }
		$('.xg_cancel_answer').bind('click', function() {
			$(this).parent().parent().slideUp(500);
		});
		$('.xg_submit_answer').bind('click', function() {
			
		});
		$('.xg_ideal_answer :checkbox').bind('click', function() {
			var count = parseInt($(this).parent().attr('count'));
			if ($(this).is(':checked')) {
				if (count >= 2) {
					$(this).attr('checked', false);
					$(this).siblings('.xg_error_text').show();
					return;
				}
				count++;
			} else {
				$(this).siblings('.xg_error_text').hide();
				count--;
			}
			$(this).parent().attr('count',count);
		});
	}

	
	_.initialize();
})();