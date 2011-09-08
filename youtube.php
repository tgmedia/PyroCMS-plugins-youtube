<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Youtube Plugin
 *
 * Youtube plugin for PyroCMS
 *
 * @package		PyroCMS-plugins-youtube
 * @author		Tim Greenwood
 * @copyright	Copyright (c) 2011 Tim Greenwood
 *
 */
class Plugin_Youtube extends Plugin
{
	/**
	 * Youtube
	 *
	 * Usage:
	 * {pyro:youtube:embed video_id="abcxyz"}
	 *
	 * @param	array
	 * @return	string
	 */
	function embed()
	{
		$video_id = $this->attribute('video_id');
		var_dump($video_id);
		if ($video_id) {
			return '<iframe class="youtube-player" type="text/html" width="640" height="385" src="http://www.youtube.com/embed/'.$video_id.'" frameborder="0"></iframe>';
		}
	}
}

/* End of file youtube.php */