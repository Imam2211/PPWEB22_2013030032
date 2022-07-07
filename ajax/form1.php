<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ajax</title>
	<script type="text/javascript" src="jquery-3.6.0.min.js"></script>
</head>
<body>
	<h2>Ajax</h2>
	Input 1 <input type="text" name="id" id="id">
	<br><hr>
	Output : <span id="output"></span>
	
</body>
</html>
<script type="text/javascript">
	$(document).ready(function() {
		$('#id').keyup(function(){
			proses_data();
		})
		function proses_data(){
			var id = $('#id').val();
			$.ajax({
				type 	: "POST",
				url	 	: "get_mhs.php",
				data 	: 'id='+id,
				success : function(res){
					$('#output').html(res);
				}
			})
		}		
	})
</script>