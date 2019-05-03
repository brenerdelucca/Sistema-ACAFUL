$(function() {
	$("#categoria").change(function () {
		var id = $(this).val();
		$.ajax({

			type: "POST",
			url:"exibe_time.php?id="+id,
			dataType:"text",
			success: function(res) {
				$("#time option").remove();
				$("#time").children(".time").remove();
				$("#time").append(res);
			}
		});
	});
});