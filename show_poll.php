<html>
<body>
<div id="demo">
<h1>The XMLHttpRequest Object</h1>
<button type="button" onclick="show_poll()">Change Content</button>

</div>
<script >
function show_poll(){
	$.ajax({
		type: "POST", 
		url: "show-poll.php", 
		processData : false,
		beforeSend: function() {
			$("#overlay").show();
		},
		success: function(responseHTML){
			$("#overlay").hide();
			$("#poll-content").html(responseHTML);
		}
	});
}
</script>
</body>
</html>
