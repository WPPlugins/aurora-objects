<div class="wrap">

	<h2 id="write-post">AWS For Wordpress - Google Authenticator</h2>

	<!--
	<a href="http://yoast.com/">
		<div id="yoast-icon"
		     style="background: url('http://cm_plugin/wp-content/plugins/wordpress-seo/images/wordpress-SEO-32x32.png') no-repeat;"
		     class="icon32">
			<br/>
		</div>
	</a>
	-->

	<div class="separator"></div>

	<div class="postbox-container" style="width:600px; padding: 0 20px 0 0;">

		<p>Google Authenticator protects your Wordpress site from hijacking by adding an extra layer of security.</p>

		<p>
			With 2-step verification signing in to your site will require a code generated by the Google Authenticator app in addition to your username and password.
		</p>

		<p>Please refer to the instructions below.</p>

		<div class="separator"></div>

		<h2>Step 1: Install the Google Authenticator app</h2>

		<p>
			To get started, you first need to install the Google Authenticator app on your phone:
		</p>

		<table>
			<tr>
				<td>
					<a href="https://itunes.apple.com/au/app/google-authenticator/id388497605" target="_blank"><img src="<?php echo plugins_url();?>/aws-for-wp/images/icon_apple.png" alt="" /></a>
				</td>
				<td width="40"></td>
				<td>
					<a href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&hl=en" target="_blank"><img src="<?php echo plugins_url();?>/aws-for-wp/images/icon_android2.png" alt="" /></a>
				</td>
			</tr>
			<tr>
				<td><a href="https://itunes.apple.com/au/app/google-authenticator/id388497605" target="_blank">Download iPhone app</a></td>
				<td></td>
				<td><a href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&hl=en" target="_blank">Download Android app</a></td>
			</tr>
		</table>

		<div class="separator"></div>

		<h2>Step 2: Configure Google Authenticator</h2>

		<p>
			Once you've installed the Google Authenticator app onto your phone, you need to configure your blog to use it.
		</p>

		<p>
			Your Google Authenticator settings can be found in <a href="<?php echo admin_url('profile.php');?>">your user profile</a>,
			under the section labelled <strong>Google Authenticator Settings</strong>.
		</p>

		<p>
			To enable Google Authenticator for your site you need to:
		</p>

		<ol>
			<li>Set it to "Active"</li>
			<li>Click on "Create new secret"</li>
			<li>Scan the QR code with the Google Authenticator app on your phone</li>
		</ol>

		<p>
			<strong>Note:</strong> It's extremely important that you scan the QR code after activating Google Authenticator.
			If you don't do this, you will not be able to log back into your site.
		</p>

		<div class="separator"></div>

		<h2>Step 3: Automatically backup your Google Authenticator key </h2>

		<p>
			Losing your Google Authenticator key can be a disaster -- if your phone is lost or stolen you won't
			be able to log into your site anymore.
		</p>

		<p>
			<a href="<?php echo admin_url();?>admin.php?page=aws_for_wp_cloudmanager_signup">Sign up for a free Cloudmanager Lite account</a>
			and we'll save a backup of your site administrator's Google Authenticator key just in case things go wrong.
		</p>
	</div>

	<?php include 'sidebar.php';?>

</div>

