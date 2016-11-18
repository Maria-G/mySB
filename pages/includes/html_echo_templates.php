
<?php
// Defining function

function print_html_for_a_mySB_page($partials_direc, $content_of_page){
	
	$contents = file_get_contents($partials_direc . 'mySB/mySB_html_head.html');
	echo $contents;
	
	echo '<div class="container-fluid" >';
	
	
	$contents = file_get_contents($partials_direc . 'mySB/mySB_header.html');
	echo $contents;
	
		
	echo '<div class="row" style="margin-top: 15px; height: 80%;">';
	
	
	$contents = file_get_contents($partials_direc . 'mySB/mySB_buttons_container.html');
	echo $contents;
	
	
	$contents = file_get_contents($partials_direc . 'mySB/mySB_content_outer_container_start.html');
	echo $contents;
	
	/* page content section */
	echo $content_of_page;
	/* end of page content section */
	
	$contents = file_get_contents($partials_direc . 'mySB/mySB_content_outer_container_end.html');
	echo $contents;
	
	echo '</div>';
	
	echo '    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>';
	echo '    <script src="../../js/bootstrap.js"></script>';
	echo '    <script src="../../js/mdb.js"></script>';
	echo '    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-translate/2.7.2/angular-translate.js"></script>';
	echo '    <script src="../../js/flex-calendar.js"></script>';
	 
	echo '</body>';

}


function print_html_for_an_SB_page($partials_direc, $content_of_page){
	
	$contents = file_get_contents($partials_direc . 'SB/SB_html_head.html');
	echo $contents;
	
	echo '<div class="container-fluid" >';
	
	
	$contents = file_get_contents($partials_direc . 'SB/SB_header.html');
	echo $contents;
	
		
	echo '<div class="row" style="margin-top: 15px; height: 80%;">';
	
	
	$contents = file_get_contents($partials_direc . 'SB/SB_buttons_container.html');
	echo $contents;
	
	
	/* page content section */
	echo $content_of_page;
	/* end of page content section */
	
	
	echo '</div>';
	
	echo '    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>';
	echo '    <script src="js/bootstrap.js"></script>';
	echo '    <script src="../../js/mdb.js"></script>';
	echo '    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-translate/2.7.2/angular-translate.js"></script>';
	echo '    <script src="../../js/flex-calendar.js"></script>';
	 
	echo '</body>';

}


?>

