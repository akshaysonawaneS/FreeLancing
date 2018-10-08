<div class="modal" id="exampleModalCenter1" tabindex="0" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      
      <div class="modal-body" autofocus>
		<img src="img_avatar1.png" class="avatar">
		
		<div class="logincontent">
		<form action="loginform.inc.php" method="post">
			<div class="textbox">
				<i class="fa fa-user"></i>
				<input type="text" name="uname" placeholder="Username" required><br>
			</div>
			<div class="textbox">
				<i class="fa fa-unlock"></i>
				<input type="password" name="pass" placeholder="Password" required>
			</div>
			<?php
				if($_SESSION['error']=='wrong_pass'){
					echo "<p style='color:red ; position:absolute ;'>wrong username or password</p></div>";
				}
			?>
			
			
			<button id="logbtn" name="submit" type="submit">Login</button>
			
		</form>
		</div>
      </div>
    </div>
  </div>
</div>