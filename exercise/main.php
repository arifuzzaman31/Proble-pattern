
<?php 
	require_once('_partial/top.php')
?>
  <div class="container">
  		<div class="card mt-4">
  			<div class="card-header">
  				<h2>Create an Parson</h2>
  			</div>
  			<div class="card-body">
  				<div class="alert alert-danger" id="message" role="alert" style="display: none"></div>
				<form id="forms">
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="inputEmail4">First Name</label>
				      <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
				    </div>
				    <div class="form-group col-md-6">
				      <label for="inputPassword4">Last Name</label>
				      <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
				    </div>
				  </div>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="inputEmail4">Email</label>
				      <input type="email" class="form-control" id="email" name="email" placeholder="Email">
				    </div>
				    <div class="form-group col-md-6">
				      <label for="inputPassword4">Password</label>
				      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputAddress2">Address</label>
				    <input type="text" class="form-control" id="address"  name="address"placeholder="Apartment, studio, or floor">
				  </div>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="inputCity">City</label>
				      <input type="text" class="form-control" id="city" name="city">
				    </div>
				    <div class="form-group col-md-4">
				      <label for="inputState">DoB</label>
				      <input type="text" class="form-control" id="date_of_birth" name="date_of_birth">
				    </div>
				    <div class="form-group col-md-2">
				      <label for="inputZip">Zip Code</label>
				      <input type="text" class="form-control" id="zip_code" name="zip_code">
				    </div>
				  </div>
				  <fieldset class="form-group">
				    <div class="row">
				      <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
				      <div class="col-sm-10">
				        <div class="form-check">
				          <input class="form-check-input" type="radio" name="gender" value="male">
				          <label class="form-check-label" for="gridRadios1">
				            Male
				          </label>
				        </div>
				        <div class="form-check">
				          <input class="form-check-input" type="radio" name="gender" value="female">
				          <label class="form-check-label" for="gridRadios2">
				            Female
				          </label>
				        </div>
				      </div>
				    </div>
				  </fieldset>
				  <div class="form-group">
				    <div class="form-check">
				      <input class="form-check-input" type="checkbox" id="checkbox" name="checkbox" value="1">
				      <label class="form-check-label" for="gridCheck">
				        Check me out
				      </label>
				    </div>
				  </div>
				  <button type="button" onclick="submitForm()" class="btn btn-primary">Submit</button>
				</form>
  			</div>
  		</div>
  </div>
<?php 
	require_once('_partial/bottom.php')
?>