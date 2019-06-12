$( document ).ready(function() {
    // console.log( "ready!" );
    $("#getipdata-btn").click(function(e) {
		e.preventDefault();

		var getIP = $("input#getipvalue").val();
		// console.log( getIP );
		//var dataString = data: {ip: getIP},
		$.ajax({
			type: "POST",
			url: "whodis.php",
			data: {ip: getIP},
			success: function(data) {
				$('#getipvalue').val('');
				$('#ipdata').html("<p>processing..</p>").hide().fadeIn(1500, function() {
					$('#ipdata').append(data);
				});;
			}
		});
		return false;
    });


});
