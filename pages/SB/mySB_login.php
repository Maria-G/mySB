
<!DOCTYPE html>
<html lang="en">
  


<?php
	require_once '../includes/html_echo_templates.php';

	$partials_direc = '../partials/';
	
    $page_content_filename = '../partials/SB/SB_login_to_mySB.html';
	$content_of_page = file_get_contents($page_content_filename);
	
	print_html_for_an_SB_page($partials_direc, $content_of_page)
?>

</html>
