<?php

// This is the code which will be placed in the head section

// No direct access.
defined('_JEXEC') or die;


$favicon_image = $this->getParam('favicon_image', '');

if($favicon_image == '') {
	$favicon_image = $this->URLtemplate() . '/images/favicon.ico';
} else {
	$favicon_image = $this->URLbase() . $favicon_image;
}

$this->API->addFavicon($favicon_image);

?>

<?php

if($this->browser->get('browser') != 'ie6') {
	// check the color version
	$template_style = '';
	$template_pattern = '';
	
	if($this->getParam("stylearea", 1)) {
		$template_style = (isset($_COOKIE['gk_game_magazine_16_style']) ? $_COOKIE['gk_game_magazine_16_style'] : $this->getParam("template_color", 1));
	} else {
		$template_style = $this->getParam("template_color", 1);
	}
	// load the CSS files
	if($this->getParam('reset_css', '') != '') {
		$this->addCSS($this->URLtemplate() . '/css/reset/'.$this->getParam('reset_css', '').'.css');
	}
	
	$this->addCSS($this->URLtemplate() . '/css/layout.css?v=11');
	$this->addCSS($this->URLtemplate() . '/css/joomla.css');
	$this->addCSS($this->URLtemplate() . '/css/template.css?v=11');
	$this->addCSS($this->URLtemplate() . '/css/menu.css');
	$this->addCSS($this->URLtemplate() . '/css/gk.stuff.css');

	if($this->getParam('typography', '1') == '1') {
		$this->addCSS($this->URLtemplate() . '/css/typography.style'.$template_style.'.css');
		if($this->getParam('typo_iconset1', '1') == '1') $this->addCSS($this->URLtemplate() . '/css/typography.iconset.1.css');
	}
	
	$this->addCSS($this->URLtemplate() . '/css/style'.$template_style.'.css');
	
	if($this->getParam("css_override", '0')) {
		$this->addCSS($this->URLtemplate() . '/css/override.css?v=135');
	}
	
    if($this->getParam("css_custom", '') != '') {
         $this->addCSSRule($this->getParam('css_custom', ''));
    }
    
	$this->useCache($this->getParam('css_compression', '0'), $this->getParam('css_cache', '0'));
	// include fonts
	$font_iter = 1;
	
	while($this->getParam('font_name_group'.$font_iter, 'gkFontNull') !== 'gkFontNull') {
		$font_data = explode(';', $this->getParam('font_name_group'.$font_iter, ''));
		if(isset($font_data) && count($font_data) >= 2) {
			$font_type = $font_data[0];
			$font_name = $font_data[1];
			if($this->getParam('font_rules_group'.$font_iter, '') != ''){
			if($font_type == 'standard') {
				$this->addCSSRule($this->getParam('font_rules_group'.$font_iter, '') . ' { font-family: ' . $font_name . '; }'."\n");
			} elseif($font_type == 'google') {
				if($font_name != 'own') {
					echo '<link href="http://fonts.googleapis.com/css?family='.$font_name.'" rel="stylesheet" type="text/css" />';
				
					$gfont = $font_name;
	
	            	if(stripos($gfont, ':') !== FALSE) {
	            	    $gfont_cut = stripos($gfont, ':');
	            	    $gfont = substr($gfont, 0, $gfont_cut);
	            	}
				
					$this->addCSSRule($this->getParam('font_rules_group'.$font_iter, '') . ' { font-family: \''.str_replace('+', ' ', $gfont). '\', Arial, sans-serif; }'."\n");
				} else {
					$font_link = $font_data[2];
					$font_family = $font_data[3];
					
					echo '<link href="'.$font_link.'" rel="stylesheet" type="text/css" />';
					
					$this->addCSSRule($this->getParam('font_rules_group'.$font_iter, '') . ' { font-family: \''.$font_family.'\', Arial, sans-serif; }'."\n");
				}
			} elseif($font_type == 'squirrel') {
				echo '<link href="'. $this->URLtemplate() . '/fonts/' . $font_name . '/stylesheet.css" rel="stylesheet" type="text/css" />';
				$this->addCSSRule($this->getParam('font_rules_group'.$font_iter, '') . ' { font-family: ' . $font_name . ', Arial, sans-serif; }'."\n");
			}
            }
		}
		
		$font_iter++;
	}





	// include JavaScript
	$this->addJS($this->URLtemplate() . '/js/gk.scripts.js');

	/// sticky menu js
	$this->addJS($this->URLtemplate() . '/js/kk-sticky.js');




	if($this->browser->get('browser') == 'ie7') {
		//$this->addJS($this->URLtemplate() . '/js/ie7.equal.columns.js');
	}
	
	if($this->getParam('selectivizr', '0') == 1 && ($this->browser->get('browser') == 'ie7' || $this->browser->get('browser') == 'ie8')) {
		$this->addJS($this->URLtemplate() . '/js/selectivizr.js');
	}
	
	if($this->getParam('menu_type', 'gk_menu') == 'gk_menu') {
		$this->addJSFragment(' $GKMenu = { height:'.($this->getParam('menu_height','0') == 1 ? 'true' : 'false') .', width:'.($this->getParam('menu_width','0') == 1 ? 'true' : 'false') .', duration: '.($this->getParam('menu_duration', '500')).' };');
	}
	
	$this->addJSFragment( '$GK_TMPL_URL = "' . $this->URLtemplate() . '";' );
	$this->addJSFragment( '$GK_LANG_LANUCH_PROJECT = "' . JText::_('TPL_GK_LANG_LAUNCH_PROJECT') . '";' );
?>
    <!--[if IE 9.0]><link rel="stylesheet" href="<?php echo $this->URLtemplate(); ?>/css/ie9.css" type="text/css" /><![endif]-->
	<!--[if IE 8.0]><link rel="stylesheet" href="<?php echo $this->URLtemplate(); ?>/css/ie8.css" type="text/css" /><![endif]-->
	<!--[if IE 7.0]><link rel="stylesheet" href="<?php echo $this->URLtemplate(); ?>/css/ie7.css" type="text/css" /><![endif]-->
	
<?php

} else {

	// IE6 code
	$this->addCSS( $this->URLtemplate(). '/css/ie6.css');
	
}?>

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-24585715-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

