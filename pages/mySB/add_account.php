
<!DOCTYPE html>
<html lang="en">
  
<script>
var name_of_user = 'Jane';
var PAGE_TITLE = 'Add Account';
</script>

<?php
	require_once '../includes/html_echo_templates.php';

	$partials_direc = '../partials/';
	
    $page_content_filename = '../partials/mySB/manage_account/add_account_form.html';
	$content_of_page = file_get_contents($page_content_filename);
	
	print_html_for_a_mySB_page($partials_direc, $content_of_page);
?>

</html>


