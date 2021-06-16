<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
			
				<li class="ts-label">Main Menu</li>
				<?PHP if(isset($_SESSION['id']))
				{ ?>
					<li><a href="dashboard.php"> Dashboard</a></li>
					<li><a href="my-profile.php"> My Profile</a></li>
<li><a href="change-password.php"> Change Password</a></li>
<li><a href="book-hostel.php"> Book Hostel</a></li>
<li><a href="room-details.php"> Room Details</a></li>

<?php } else { ?>
				
				<li><a href="registration.php"> User Registration</a></li>
				<li><a href="index.php"> User Login</a></li>
				<li><a href="admin"> Admin Login</a></li>
				<?php } ?>

			</ul>
		</nav>