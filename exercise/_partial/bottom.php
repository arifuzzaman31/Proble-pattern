
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script type="text/javascript">

    	function submitForm(){
    		
    		var data = $('#forms').serialize();
				console.log(data);
				$.ajax({
					url: 'http://localhost/practice-1/exercise/class/function.php',
					type: 'POST',
					// dataType: 'JSON',
					data: data,
					success: function(response){
						console.log(response);
						// console.log('submited successfully');
					},
					error: function(response){
						console.log('some error occur');
					}
				});
    	}

		// $("#form").on('click',function(event){
		// 	event.preventDefault();
		// 	/*var fname 	= $("#fname").val();
		// 	var lname 	= $("#lname").val();
		// 	var email 	= $("#email").val();
		// 	var password= $("#password").val();
		// 	var address = $("#address").val();
		// 	var city 	= $("#city").val();
		// 	var dob 	= $("#date-of-birth").val();
		// 	var zip 	= $("#zip").val();
		// 	var radio 	= $('input[name=gender]:checked').val();
		// 	var status 	= $('input[type="checkbox"]').is(':checked') ? 1 : 0; */
		// 	// console.log(fname+lname+email+password+address+city+dob);
		// 	// if (validate()==true) {
		// 		var data = $('#form').serialize();
		// 		console.log(data);
		// 		$.ajax({
		// 			url: 'http://localhost/practice-1/exercise/class/function.php',
		// 			type: 'POST',
		// 			// dataType: 'JSON',
		// 			data: data,
		// 			success: function(data){
		// 				console.log(data);
		// 				// console.log('submited successfully');
		// 			},
		// 			error: function(data){
		// 				console.log('some error occur');
		// 			}
		// 		});

		// 	// }
		// });

	/*function validate(data){
		if (isNaN(data) || data.length >25 || data.length<3) {
			var error = "Input must be 3 to 25 Letter";
			$("#message").show();
			document.getElementById("message").innerHTML = error;

		}
			return false;
	} 

	{
	'fname': fname,
	'lname': lname,
	'email': email,
	'password': password,
	'address': address,
	'city': city,
	'dob': dob,
	'zip': zip,
	'radio': radio,
	'status': status

}*/
	
</script>
  </body>
</html>