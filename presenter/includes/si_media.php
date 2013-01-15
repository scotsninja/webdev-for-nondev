<?php /* arrays containing relevant media information for specialized viewers */

/* PDF
* add any pdfs served from pdf-viewer.html, with the index being the variable passed in $_GET['pdf']
*	title			(title of the page and facebook status)
*	description		(meta-description and facebook status)
*	image			(image to display in the facebook status)
*	medium			(facebook tag for indicating content type: audio, image, video, news, blog, mult)
*	url 			(the path to the actual pdf)
*/

$pdfs = array(
	'blank' => array('title' => '', 'description' => '', 'image' => '', 'medium' => '', 'url' => '')
);

/* VIDEO
* add any videos served from video-viewer(-lite).html, with the index being the variable passed in $_GET['video']
*	title			(title of the page and facebook status)
*	description		(meta-description and facebook status)
*	image			(image to display in the facebook status)
*	medium			(facebook tag for indicating content type: audio, image, video, news, blog, mult)
*	id 				(ID specified for video in overlay.js)
*/

$videos = array(
	'blank' => array('title' => 'Blank', 'description' => 'A video placeholder for testing', 'image' => '', 'medium' => '', 'id' => 'blank')
);