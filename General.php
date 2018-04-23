<?php 
	
	function array_sanitize(&$item)
	{
		$item = mysql_real_escape_string($item);

	}
function output_errors($errors)
{
    return '<ul><li>'. implode('</li><li>', $errors) .'</ul></li>';
}

function protect_page()
{
        if (logged_in() ==false )
        {
        header('Location: Login.php');
        exit();
        }
 
}

?>