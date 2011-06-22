<?php
	require_once './flickriffic/phpflickr/phpFlickr.php';
	
class Flickriffic{
	
	private $username = '';
	private $api_key = '';
	private $flickr = '';
	private $cur_cat = '';
	
	public function __construct($api, $user, $set){
		$this->api_key = $api;
		$this->username = $user;
		$this->flickr = new phpFlickr($this->api_key);
		$person = $this->flickr->people_findByUsername($this->username);
		$cat_list = $this->flickr->photosets_getList($person['id']);
		foreach($cat_list['photoset'] as $v){
			foreach($v as $key=>$value){
				if($key=='title' and $value==$set){
					$this->cur_cat = $v;
				}
			}
		}
	}
	
	public function simplegallery(){
		$html = $this->gallery();
		$html .= $this->thumbs();
		$html .= $this->js();
		return $html;
	}
	
	public function gallery(){
		return
			'<div id="gallery" class="gallerycontent">' .
				$this->controls() .
				$this->slideshow() .
				$this->caption() .
			'</div>';
	}
	
	public function caption(){
		return '<div id="caption" class="caption-container"></div>';
	}
	
	public function slideshow(){
		return '<div class="slideshow-container">
					<div id="loading" class="loader"></div>
					<div id="slideshow" class="slideshow"></div>
				</div>';
	}
	
	public function controls(){
		return '<div id="controls" class="controls"></div>';
	}
	
	public function js(){
		return '
			<script type="text/javascript" src="./flickriffic/js/jquery.galleriffic.js"></script>
			<script type="text/javascript" src="./flickriffic/js/jquery.history.js"></script>
			<script type="text/javascript" src="./flickriffic/js/jquery.opacityrollover.js"></script>
			<script type="text/javascript" src="./flickriffic/js/flickriffic.js"></script>
		';
	}
	
	public function thumbs(){
		$html = '<div id="thumbs" class="navigation">
				<ul class="thumbs noscript">';
	  	$photos = $this->flickr->photosets_getPhotos($this->cur_cat[id], 'description');
		$photos = $photos['photoset'];
		foreach($photos['photo'] as $k=>$v){
			//print_r($v);
			$html .= '<li>
	            <a class="thumb" name="' . $v['title'] . '" href="' . $this->flickr->buildPhotoURL($v, 'Medium') . '" title="' . $v['title'] . '">
	                <img src="' . $this->flickr->buildPhotoURL($v, 'Square') . '" alt="' . $v['description'] . '" />
	            </a>
	            <div class="caption">
					<div class="image-title">' . $v['title'] . '</div>
					<div class="image-desc">' . $v['description'] . '</div>
	            </div>
	        </li>';
	    }
	    $html .= '</ul></div>';
	    return $html;
	}
}
?>