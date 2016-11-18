
<!DOCTYPE html>
<html lang="en">
  
<script>
var name_of_user = 'Jane';
var PAGE_TITLE = 'Live in SB';
</script>

<?php
	require_once '../includes/html_echo_templates.php';

	$partials_direc = '../partials/';
	
    $page_content_filename = '../partials/mySB/live_in/live_in_inner_container.html';
	$content_of_page = file_get_contents($page_content_filename);
	
	print_html_for_a_mySB_page($partials_direc, $content_of_page);
?>

</html>

