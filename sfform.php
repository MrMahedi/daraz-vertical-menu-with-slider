<?php 
// cf code

function my_custom_password_form()
{
	global $post;
	$label = 'pwbox-' . (empty($post->ID) ? rand() : $post->ID);
	$output = '

	<div class="boldgrid-section">

		<div class="formContainer">

			<img src="https://zeedhost.com/amar/wp-content/uploads/2023/02/formimage.jpeg" width="289" />
			<h2 class="sfheading">This case study requires a password</h2>
			<form action="' . esc_url(site_url('wp-login.php?action=postpass', 'login_post')) . '" class="form-inline post-password-form" method="post">
				<p class="sfformtext1">Please enter the password that you were given or <br>  <a href="#" class="sflink"> contact me </a> to request one </p>
				<div class="sfinputArea">
				  <div class="sfinput">
				     <input name="post_password" id="' . $label . '" type="password" placeholder="Enter you password" class="sfform-control" />
				  </div>
				  <div class="sfinputButton">
				     <button type="submit" name="Submit" class="sfbutton-primary">' . esc_attr_x('SUBMIT', 'post password form') . '</button>
				  </div>
				</div>
				
			</form>

			<div class="sfinfobox">
				<div class="sfinfobox1">
				<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M7.09373 12.15H8.21873V7.65001H7.09373V12.15ZM7.59998 6.26251C7.77498 6.26251 7.92185 6.20626 8.0406 6.09376C8.15935 5.98126 8.21873 5.83751 8.21873 5.66251C8.21873 5.48751 8.15935 5.33751 8.0406 5.21251C7.92185 5.08751 7.77498 5.02501 7.59998 5.02501C7.42498 5.02501 7.2781 5.08751 7.15935 5.21251C7.0406 5.33751 6.98123 5.48751 6.98123 5.66251C6.98123 5.83751 7.0406 5.98126 7.15935 6.09376C7.2781 6.20626 7.42498 6.26251 7.59998 6.26251ZM7.59998 15.9C6.57498 15.9 5.60623 15.7031 4.69373 15.3094C3.78123 14.9156 2.98435 14.3781 2.3031 13.6969C1.62185 13.0156 1.08435 12.2188 0.690601 11.3063C0.296851 10.3938 0.0999756 9.41876 0.0999756 8.38126C0.0999756 7.35626 0.296851 6.38751 0.690601 5.47501C1.08435 4.56251 1.62185 3.76876 2.3031 3.09376C2.98435 2.41876 3.78123 1.88438 4.69373 1.49063C5.60623 1.09688 6.58123 0.900009 7.61873 0.900009C8.64373 0.900009 9.61248 1.09688 10.525 1.49063C11.4375 1.88438 12.2312 2.41876 12.9062 3.09376C13.5812 3.76876 14.1156 4.56251 14.5093 5.47501C14.9031 6.38751 15.1 7.36251 15.1 8.40001C15.1 9.42501 14.9031 10.3938 14.5093 11.3063C14.1156 12.2188 13.5812 13.0156 12.9062 13.6969C12.2312 14.3781 11.4375 14.9156 10.525 15.3094C9.61248 15.7031 8.63748 15.9 7.59998 15.9ZM7.61873 14.775C9.38123 14.775 10.8812 14.1531 12.1187 12.9094C13.3562 11.6656 13.975 10.1563 13.975 8.38126C13.975 6.61876 13.3562 5.11876 12.1187 3.88126C10.8812 2.64376 9.37498 2.02501 7.59998 2.02501C5.83748 2.02501 4.33435 2.64376 3.0906 3.88126C1.84685 5.11876 1.22498 6.62501 1.22498 8.40001C1.22498 10.1625 1.84685 11.6656 3.0906 12.9094C4.33435 14.1531 5.84373 14.775 7.61873 14.775Z" fill="#CCCCCC"/>
				</svg>
				
				</div>

				<div class="sfinfobox2">
					<p> <strong>Recruiter or hiring manager?<strong> <br>
					<span style="font-weight: 300;">Use the last four digits of my phone number as your password.<span><p>
				</div>

			</div>

		</div>

	</div>
	
	';
	return $output;
}
add_filter('the_password_form', 'my_custom_password_form', 99);

?>
