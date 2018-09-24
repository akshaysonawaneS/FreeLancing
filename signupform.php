<div class="modal fade" id="exampleModalCenter2" tabindex="0" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="changeheight modal-content">
      
      <div class="modal-body">
		<img src="img_avatar1.png" class="avatar">
		<div class="logincontent">
			<form action="signupform.inc.php" method="post">
				<div class="textbox">
					<i class="fa fa-envelope-open"></i>
					<input type="text" name="email" placeholder="Email" required><br>
				</div>
				<div class="textbox">
					<i class="fa fa-user"></i>
					<input type="text" name="suname" placeholder="Username" required><br>
				</div>
				<div class="textbox">
					<i class="fa fa-unlock"></i>
					<input type="password" name="spass" placeholder="Password" required>
				</div >
				<div class="rbtns">
					Tasker<input type="radio" value="tasker" name="typeofuser" class="radiobtn">
					Freelancer<input type="radio" value="freelancer" name="typeofuser" class="radiobtn">
				</div>
				
				<button type="submit" name="submit" id="signbtn">Sign up</button>
			</form>
		</div>
      </div>
    </div>
  </div>
</div>