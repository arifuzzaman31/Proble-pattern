<div class="card mt-4">
	<div class="card-body">
		<form class="needs-validation" novalidate id="form">
		  <div class="form-row">
		    <div class="col-md-6 mb-6">
		      <label for="validationCustom01">First name</label>
		      <input type="text" class="form-control" id="first_name" placeholder="First name" name="first_name">
		      <div id="first_name_msg">
		        	
		      </div>
		    </div>
		    <div class="col-md-6 mb-6">
		      <label for="validationCustom02">Last name</label>
		      <input type="text" class="form-control" id="last_name" placeholder="Last name" name="last_name">
		      <div id="last_name_msg">
		        	
		      </div>
		    </div>
		  </div>
		   <div class="form-row">
		    <div class="col-md-6 mb-6">
		      <label for="validationCustom01">Email</label>
		      <input type="email" class="form-control" id="email" placeholder="email" name="email">
		      <div id="email_msg">
		        
		      </div>
		    </div>
		    <div class="col-md-6 mb-6">
		      <label for="validationCustom02">Date of Birth</label>
		      <input type="date" class="form-control" id="date_of_birth" placeholder="Date of Birth" name="dob">
		      <div id="dob_msg">
		      
		      </div>
		    </div>
		    <div class="col-md-6 mb-6">
		      <label for="validationCustomUsername">Contact No.</label>
		      <div class="input-group">
		        <input type="text" class="form-control" id="contact" placeholder="Contact Number" name="contact">
		        <div id="contact_msg">
		          
		        </div>
		      </div>
		    </div>
		    <div class="col-md-6 mb-6">
		      <label for="validationCustomUsername">City</label>
		      <div class="input-group">
		        <input type="text" class="form-control" id="validationCustom03" placeholder="City" name="city">
		      <div id="city_msg">
		        
		      </div>
		      </div>
		    </div>
		  </div>
		  <div class="form-row">
		    <div class="col-md-6 mb-3">
		     <label for="validationCustom04">State</label>
		      <input type="text" class="form-control" id="state" placeholder="State" name="state">
		      <div id="state_msg">
		        
		      </div>
		    </div>
		    <div class="col-md-6 mb-6">
		      <label for="validationCustom05">Zip</label>
		      <input type="text" class="form-control" id="zip_code" placeholder="Zip" name="zip">
		      <div id="zip_msg">
		        
		      </div>
		    </div>
		  </div>

		 	<div class="form-check">
			  <input class="form-check-input" type="radio" name="gender" id="gender" value="male" checked>
			  <label class="form-check-label" for="exampleRadios1">
			    Male
			  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="female">
		  <label class="form-check-label" for="exampleRadios2">
		    Female
		  </label>
		</div>
	  <div class="form-group">
	    <div class="form-check">
	      <input class="form-check-input" type="checkbox" value="1" id="invalidCheck" name="status">
	      <label class="form-check-label" for="invalidCheck">
	        Agree to terms and conditions
	      </label>
	      <div id="invalid-feedback">
	        
	      </div>
	    </div> 
	  </div>
	  <span class="btn btn-primary" id="addrecord" type="submit" onclick="submits()">Submit</span>
	</form>
	</div>
</div>

</script>
