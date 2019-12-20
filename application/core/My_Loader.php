<?php
/**
 * 
 */
class My_Loader extends CI_Loader
{
	
	function template($templates_name, $var = array(), $return = FALSE)
	{
		if ($return) {
			$content = $this->view('depan/templates/header', $var, $return);
			$content .= $this->view(''. $templates_name, $var, $return);
			$content .= $this->view('depan/templates/footer', $var, $return);

			return $content;
		}
		else{
			$this->view('depan/templates/header', $var);
			$this->view(''. $templates_name, $var);
			$this->view('depan/templates/footer', $var);
		}
	}
}