    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script type="text/javascript">

    	// $(document).ready(function(){
    	// 	viewData();
    	// });

    	$('#add-data').on('click',function(){
    		$('#modal').modal();
    		$('.modal-body').load('addform.php');
    	});

    	function viewData(){
    		$.ajax({
    			url: 'func.php',
    			type: 'GET',
    			dataType: 'json',
    			// data: { 'action':view },
    			success: function(data){
    				console.log(data);
    			},
    			error: function(){

    			}
    		});
    	}

        $("#addrecord").on('click', function(e){
            // console.log($("#first_name").val());
        })
        function submits(){
            // alert('dsfsd');
            // e.preventDefault();  
            let data = $('#form').serializeArray();
            var formData = {};

            $.map(data, function(n, i){
                formData[n['name']] = n['value'];
            });
            // console.log(data);
            if(formData.first_name == ''){
                $('#first_name_msg').text("Fill up the name field !").css('color','red');
                return false;
            }else if(formData.last_name == ''){
                $('#last_name_msg').text("Fill up the last_name field !").css('color','red');
                return false;
            }else if(formData.email == ''){
                $('#email_msg').text("Fill up the email field !").css('color','red');
                return false;
            }else if(formData.dob == ''){
                $('#dob_msg').text("Fill up the dob field !").css('color','red');
                return false;
            }else if(formData.contact == ''){
                $('#contact_msg').text("Fill up the contact field !").css('color','red');
                return false;
            }else if(formData.city == ''){
                $('#city_msg').text("Fill up the city field !").css('color','red');
                return false;
            }else if(formData.state == ''){
                $('#first_name_msg').text("Fill up the state field !").css('color','red');
                return false;
            }else if(formData.zip == ''){
               $('#zip_msg').text("Fill up the zip field !").css('color','red');
                return false;
            }else if(formData.status == ''){
               $('#invalid-feedback').text("You must agree before submitting!").css('color','red');
                return false;
            }else{
                // console.log(formData.contact);
            $.ajax({
                url: 'saveData.php',
                type: 'POST',
                dataType: 'json',
                data: formData,
                success: function(data){
                    console.log(data);
                },
                error: function(){

                }
            });

            }

        }
    </script>
  </body>
</html>