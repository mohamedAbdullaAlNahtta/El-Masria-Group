	<aside class="left-sidebar">
		<!-- Sidebar scroll-->
		<div class="scroll-sidebar">
			<!-- User profile -->
			<div class="user-profile">
				<!-- User profile image -->
				<div class="profile-img"><img style="border: 1px solid #000" src="<?php echo $user->user_profile_img; ?>"></div>
				<!-- User profile text-->
				<div class="profile-text"> <a href="#" id="dropdown-toggle-link-u-dropdown" class="dropdown-toggle link u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" ><?php echo $user->name; ?><span class="caret"></span></a>
					<div class="dropdown-menu animated flipInY" style="padding: 5px; border-radius: 5px">

						<a href="index?module=Change_Password" class="dropdown-item"><i class="mdi mdi-account-key"></i> <?php echo $lang['Change Password']; ?>  </a>
						<div class="dropdown-divider"></div> <a href="logout?language=<?php echo $language; ?>&theme=<?php echo $theme; ?>" class="dropdown-item"><i class="fa fa-power-off"></i> <?php echo $lang['Logout']; ?> </a>
					</div>
				</div>
			</div>
			<!-- End User profile text-->
			<!-- Sidebar navigation-->
			<br>
			<nav class="sidebar-nav">
				<ul id="sidebarnav">
					<li class="nav-devider" style="margin:5px 0px 0px 0px"></li>
					<li class="nav-small-cap" style="color:#b39454"><?php echo $lang['El Masria Group']; ?> <span class="label label-rounded label-success"> <?php echo $lang['V 1.0.0']; ?> </span></li>
					<li class="nav-devider" style="margin:5px 0px 0px 0px"></li>
					<br>

					<?php
					// getting the Authoriszed Navgationbar
					$userRoleId            = $userRole->get_user_role($user->username);
					$html_nav_bar   = $navBar->get_html_nav_bar($userRoleId); 
					echo $html_nav_bar;
					?>	

				</ul>
			</nav>
			<!-- End Sidebar navigation -->
		</div>
		<!-- End Sidebar scroll-->
		<!-- Bottom points-->
		<div class="sidebar-footer">
			<!-- item-->
			<a href="index?module=Change_theme" class="link" data-toggle="tooltip" title="<?php echo $lang['Theme']; ?>"><i class="mdi mdi-theme-light-dark"></i></a>
			<!-- item-->
			<a href="index?module=Change_Language" class="link" data-toggle="tooltip" title="<?php echo $lang['Language']; ?>"><i class="fa fa-language"></i></a>
			<!-- item-->
			<a href="logout?language=<?php echo $language; ?>&theme=<?php echo $theme; ?>" class="link" data-toggle="tooltip" title="<?php echo $lang['Logout']; ?>"><i class="mdi mdi-power"></i></a>
		</div>
		<!-- End Bottom points-->
	</aside>