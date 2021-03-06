<?php

// This is the template to markup your thumbnails. See readme for possible placeholders.
$tpl = <<<HTML
<a href="[+dr.bigPath+]" class="highslide" onclick="return hs.expand(this, {captionId: 'caption[+dr.id+]'})">
	<img src="[+dr.thumbPath+]" width="[+dr.thumbWidth+]" height="[+dr.thumbHeight+]" /></a>
<span class="highslide-caption" id="caption[+dr.id+]">
[+dr.title+]
</span>
HTML;

// All CSS and JS files and all other code that we need in our <HEAD> tag.
$header  = 	'
<link rel="stylesheet" href="'.DIRECTRESIZE_PATH.'libs/highslide/style.css" type="text/css" media="screen" />
<script type="text/javascript" src="'.DIRECTRESIZE_PATH.'libs/highslide/highslide.packed.js"></script>
<script type="text/javascript" src="'.DIRECTRESIZE_PATH.'lang/' . $language . '.highslide.js"></script>
<script type="text/javascript">
	hs.graphicsDir	= "'.DIRECTRESIZE_PATH.'libs/highslide/graphics/";
	hs.outlineType 	= "rounded-white";
</script>

';

// Mode for lightbox links generating. 2 means that links will be genereted for all images with the allowed paths.
$lightbox_mode = 2;

// Watermarking. Uncomment 3 lines below if you are need it.
//$thumb_use_watermark = TRUE;
//$thumb_watermark_img = DIRECTRESIZE_PATH.'images/zoom.png';
//$thumb_watermark_type = "image";

// Very important parameter - paths to folders, where the images will be proccesed. Use comma as separator. You can use remote paths with http://.
$allow_from="assets/images,https://upload.wikimedia.org/";

// Method for thumbs generating. 0 means that firstly image is reduced, then it is cropped to fit in the rectangle thumb width � thumb height.
$resize_method = 3;

$big_width = 1024;
$big_height = 768;

$big_quality = 95;
$thumb_quality = 95;

?>