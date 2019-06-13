			<main class="registrateContainer">
				<h1>Napravi nalog na našem sajtu!</h1>
				<div class="registrateBox">
						<img class="avatarRegistrate" src="../assets/css/pictures/avatar.png">
						<h1>Registrate</h1>
						<form>
							<label for="first_name">First Name</label>
							<input type="text" name="first_name" placeholder="Enter First Name" value="">
							<label for="last_name">Last Name</label>
							<input type="text" name="last_name" placeholder="Enter Last Name" value="">
							<label for="email">E-mail</label>
							<input type="email" name="email" placeholder="johndoe@xmpl.com" value="">
							<label for="password">Password</label>
							<input type="password" name="password" placeholder="Enter Password">
							<label for="re_password">Re-Type Password</label>
							<input type="password" name="re_password" placeholder="Enter Password">
							<label for="gender">Gender</label><br>
							Male<input type="radio" name="gender" value="M" placeholder="">
							Female<input type="radio" name="gender" value="F" placeholder="">
							<label for="birthday">Birthday</label>
							<input type="date" name="birthday" min="1900-01-01" placeholder="">
							<label for="terms">Accept the Terms & Conditions of this site</label>
							<input type="checkbox" name="terms[]" value="agreement" placeholder="">I agree with the Terms & Conditions.
							<input type="submit" name="sbmt_btn" value="Register">
						</form>
				</div>
			</main>