$(function() {
	$("#categoria").change(function () {
		var id = $(this).val();
		$.ajax({

			type: "POST",
			url:"exibe_time.php?id="+id,
			dataType:"text",
			success: function(res) {
				$("#time2 option").remove();
				$("#time2").children(".time2").remove();
				$("#time2").append(res);
			}
		});
	});
});