<?php
/**
 * @package		Spir
 * @date	    16/7/4
 * @author		Irvin
 */
defined('BASEPATH') OR exit('No direct script access allowed');

// ------------------------------------------------------------------------

if ( ! function_exists('nl2br_except_pre'))
{
	/**
	 * Convert newlines to HTML line breaks except within PRE tags
	 *
	 * @param	string
	 * @return	string
	 */
	function nl2br_except_pre($str)
	{
		$SP =& get_instance();
		$SP->load->library('typography');
		return $SP->typography->nl2br_except_pre($str);
	}
}

// ------------------------------------------------------------------------

if ( ! function_exists('auto_typography'))
{
	/**
	 * Auto Typography Wrapper Function
	 *
	 * @param	string	$str
	 * @param	bool	$reduce_linebreaks = FALSE	whether to reduce multiple instances of double newlines to two
	 * @return	string
	 */
	function auto_typography($str, $reduce_linebreaks = FALSE)
	{
		$SP =& get_instance();
		$SP->load->library('typography');
		return $SP->typography->auto_typography($str, $reduce_linebreaks);
	}
}

// --------------------------------------------------------------------

if ( ! function_exists('entity_decode'))
{
	/**
	 * HTML Entities Decode
	 *
	 * This function is a replacement for html_entity_decode()
	 *
	 * @param	string
	 * @param	string
	 * @return	string
	 */
	function entity_decode($str, $charset = NULL)
	{
		return get_instance()->security->entity_decode($str, $charset);
	}
}