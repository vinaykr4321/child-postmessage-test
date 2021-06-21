<!DOCTYPE html>
<html>
<head>
	<title>Iframe Child Window</title>
</head>
<body>
	<h1>Message is : <span id="getMessage"></span></h1>
	<button id="btn">Update</button>
	<script type="text/javascript">
		// window.addEventListener('message', function(event){
		// 	var getMessage = document.getElementById("getMessage");
		// 	getMessage.innerHTML = event.data;
		// },false)

		// var btn = document.getElementById("btn");
		// btn.addEventListener('click', function(){
		// 	var iframe = document.getElementById("iframediv");
		// 	window.parent.postMessage('Sended data '+ Math.random()*50,'*')
		// })
		setTimeout(function(){
			var gradesdata = {grades:60};
			gradesdata = JSON.stringify(gradesdata);
			var message = {
				action: "saveGrades",
				payload: gradesdata
			}
			message = JSON.stringify(message);
			window.parent.postMessage(message,'*')	
		}, 4000);
		
	</script>
</body>
</html>
