<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('printr'))
{
	function printr($printr)
	{
			echo'<pre>'; print_r($printr); 	echo'</pre>';
		
		return; 
	}
}

if ( ! function_exists('format_rupiah'))
{
	function format_rupiah($param){
		
		$rupiah = 'Rp '.number_format($param,0,',','.');
	  
		return $rupiah;
	}
}


if ( ! function_exists('no_record'))
{
	function no_record($param)
	{
		$counter = 0;
		
		for($i=1; $i <= $param[1] ;$i++){
			$counter = $counter + $param[0];
		}
		
		$result = ($counter - ($param[0] - 1));

		return $result; 
	}
}

if ( ! function_exists('no_image'))
{
	function no_image()
	{	
		return base_url('picture').'/default/no_image.jpg';
	}
}

if ( ! function_exists('error_page'))
{
	function error_page()
	{	
		redirect(base_url('wsadmin.php/error'), 'refresh');
	}
}


if ( ! function_exists('login_page'))
{
	function login_page()
	{	
		redirect('../wsadmin.php/login', 'refresh');
	}
}

if ( ! function_exists('url_admin'))
{
	function url_admin()
	{	
		$url = 'wsadmin.php/';
		return $url;
	}
}

if ( ! function_exists('slug_text'))
{
	function slug_text($string)
	{			
		return str_replace(' ', '-',$string);
	}
}

if ( ! function_exists('GetMenu'))
{
	function GetMenu(){
		$sess = $_SESSION['username'];
		$result = array();
        
		$CI =& get_instance();
        $CI->load->model('querymodel');
        
        if(!empty($sess['ws_permission_id'])){
	        $result = $CI->querymodel->get_menus(array('ws_permission_id' => $sess['ws_permission_id']));
	        if(!empty($result)){
	            $menu_temp = unserialize($result[0]['ws_menus_temp']);
	        }
    	}
        return $result;
    }        
}


