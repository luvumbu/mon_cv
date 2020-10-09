<h1>Connexion</h1>
<form>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email"   placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		<div id="error_mail_c" class="display_none">
        <i class="fa fa-remove"></i>
    </div>
	
	</div>
  <div class="form-group">
    <label for="password1">Password</label>
    <input type="password" class="form-control" id="password1" placeholder="Password">
		<div id="error_password_c" class="display_none">
        <i class="fa fa-remove"></i>
    </div>
	
	</div> 
  <div  type="submit" class="btn btn-primary" onclick="button_connection()">Submit</div >
</form>



