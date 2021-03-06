<?php
/********************************************************************
One Column Module
*********************************************************************/
function xecuter_content_module() { 
	global $xecuter_data; 
 	$value = isset( $xecuter_data['value'] ) ? $xecuter_data['value'] : '';
	
	/********************************************************************
	Carousel Slider
	*********************************************************************/
	// Carousel Slider 1 Column
	if($value=='slider_1c'){
       	echo '<aside class="rd-slider rd-carousel rd-featured '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_box();	
  			echo '<div class="rd-post-list" >';
				xecuter_content_featured_1c();
 			echo '</div>';
				xecuter_lightslider('1','1','"pager": true,"timer": true,"responsive" : [{"breakpoint":1920}],');
 		echo '</aside>';			
	}
	
	// Carousel Slider 2 Column
	if($value=='slider_2c'){
       	echo '<aside  class="rd-slider rd-carousel rd-featured '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_box();	
  			echo '<div class="rd-post-list" >';
				xecuter_content_featured_2c();
 			echo '</div>';
			xecuter_lightslider('1','2','"responsive" : [{"breakpoint":499,"settings": {"item":1,"controls":true}}],');
 		echo '</aside>';			
	}
   
	// Carousel Slider 3 Column
 	if($value=='slider_3c'){
       	echo '<aside class="rd-slider rd-carousel  rd-featured '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_box();	
  			echo '<div class="rd-post-list" >';
				xecuter_content_featured_3c();
 			echo '</div>';	
		    xecuter_lightslider('1','3','"responsive" : [{"breakpoint":979,"settings": {"item":2,"controls":true}},{"breakpoint":499,"settings": {"item":1,"controls":true}}],');
		echo '</aside>';			
	} 	
	
	// Carousel Slider 4 Column
 	if($value=='slider_4c'){
       	echo '<aside class="rd-slider rd-carousel rd-featured '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_box();	
  			echo '<div class="rd-post-list" >';
				xecuter_content_featured_4c();
 			echo '</div>';	
		    xecuter_lightslider('1','4','"responsive" : [{"breakpoint":979,"settings": {"item":2,"controls":true}},{"breakpoint":499,"settings": {"item":1,"controls":true}}],');
		echo '</aside>';			
	} 
 	
	// Carousel Slider 5 Column
 	if($value=='slider_5c'){
       	echo '<aside class="rd-slider rd-carousel rd-featured '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_box();	
  			echo '<div class="rd-post-list" >';
				xecuter_content_featured_5c();
 			echo '</div>';	
		    xecuter_lightslider('1','5','"responsive" : [{"breakpoint":979,"settings": {"item":3,"controls":true}},{"breakpoint":767,"settings": {"item":2,"controls":true}},{"breakpoint":499,"settings": {"item":1,"controls":true}}],');
		echo '</aside>';			
	} 			
	
	// Carousel Slider 6 Column
 	if($value=='slider_6c'){
       	echo '<aside class="rd-slider rd-carousel rd-featured '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_box();	
  			echo '<div class="rd-post-list" >';
				xecuter_content_featured_6c();
 			echo '</div>';	
		    xecuter_lightslider('1','6','"responsive" : [{"breakpoint":1240,"settings": {"item":4,"controls":true}},{"breakpoint":979,"settings": {"item":3,"controls":true}},{"breakpoint":767,"settings": {"item":2,"controls":true}}],');
		echo '</aside>';			
	} 			
		
 	// Carousel Slider 8 Column
 	if($value=='slider_8c'){
       	echo '<aside class="rd-slider rd-carousel  rd-featured '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_box();	
  			echo '<div class="rd-post-list" >';
				xecuter_content_featured_8c();
 			echo '</div>';	
		    xecuter_lightslider('1','8','"responsive" : [{"breakpoint":1240,"settings": {"item":4,"controls":true}},{"breakpoint":979,"settings": {"item":3,"controls":true}},{"breakpoint":767,"settings": {"item":2,"controls":true}},{"breakpoint":499,"settings": {"item":2,"controls":true}}],');
		echo '</aside>';			
	} 
	
	/********************************************************************
	Featured Slider
	*********************************************************************/
	//Featured Slider 1 
 	if($value=='slider_featured_1'){
       	echo '<aside class="rd-slider rd-featured '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_box();	
  			echo '<div class="rd-post-list" >';
				xecuter_content_slider_featured_1();
 			echo '</div>';	
		    xecuter_lightslider('3','1','');
		echo '</aside>';			
	} 
	
	//Featured Slider 2 
 	if($value=='slider_featured_2'){
       	echo '<aside class="rd-slider rd-featured '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_box();	
  			echo '<div class="rd-post-list" >';
				xecuter_content_slider_featured_2();
 			echo '</div>';	
		    xecuter_lightslider('5','1',' ');
		echo '</aside>';			
	}

	//Featured Slider 3 
 	if($value=='slider_featured_3'){
       	echo '<aside class="rd-slider rd-featured '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_box();	
  			echo '<div class="rd-post-list" >';
				xecuter_content_slider_featured_3();
 			echo '</div>';	
		    xecuter_lightslider('7','1',' ');
		echo '</aside>';			
	} 
	
	//Featured Slider 4 
 	if($value=='slider_featured_4'){
       	echo '<aside class="rd-slider rd-featured '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_box();	
  			echo '<div class="rd-post-list" >';
				xecuter_content_slider_featured_4();
			echo '</div>';	
		    xecuter_lightslider('5','1',' ');
		echo '</aside>';			
	} 		
	
	//Featured Slider 5
 	if($value=='slider_featured_5'){
       	echo '<aside class="rd-slider rd-featured '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_box();	
  			echo '<div class="rd-post-list" >';
				xecuter_content_slider_featured_5();
 			echo '</div>';	
		    xecuter_lightslider('6','1',' ');
		echo '</aside>';			
	} 	
	
	//Featured Slider 6 
 	if($value=='slider_featured_6'){
       	echo '<aside class="rd-slider rd-featured '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_box();	
  			echo '<div class="rd-post-list" >';
				xecuter_content_slider_featured_6();
 			echo '</div>';	
		    xecuter_lightslider('7','1',' ');
		echo '</aside>';			
	} 
	
	//Featured Slider 7 
 	if($value=='slider_featured_7'){
       	echo '<aside class="rd-slider rd-featured '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_box();	
  			echo '<div class="rd-post-list" >';
				xecuter_content_slider_featured_7();
 			echo '</div>';	
		    xecuter_lightslider('7','1',' ');
		echo '</aside>';			
	} 
	
	//Featured Slider 8 
 	if($value=='slider_featured_8'){
       	echo '<aside class="rd-slider rd-featured '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_box();	
  			echo '<div class="rd-post-list" >';
				xecuter_content_slider_featured_8();
 			echo '</div>';	
		    xecuter_lightslider('5','1',' ');
		echo '</aside>';			
	}
	
	//Featured Slider 9
 	if($value=='slider_featured_9'){
       	echo '<aside class="rd-slider rd-featured '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_box();	
  			echo '<div class="rd-post-list" >';
				xecuter_content_slider_featured_9();
 			echo '</div>';	
		    xecuter_lightslider('1','3','"responsive" : [{"breakpoint":979,"settings": {"item":2,"controls":true}},{"breakpoint":500,"settings": {"item":1,"controls":true}}],');
		echo '</aside>';			
	}
	
	//Featured Slider 10
 	if($value=='slider_featured_10'){
       	echo '<aside class="rd-slider rd-featured '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_box();	
  			echo '<div class="rd-post-list" >';
				xecuter_content_slider_featured_10();
 			echo '</div>';	
		    xecuter_lightslider('1','4','"responsive" : [{"breakpoint":979,"settings": {"item":2,"controls":true}},{"breakpoint":500,"settings": {"item":1,"controls":true}}],');
		echo '</aside>';			
	}	
	
	/********************************************************************
	Thumbnails Slider
	*********************************************************************/
	//Thumbnails Slider 1	
  	if($value=='slider_thumb_1'){
       	echo '<aside  class="rd-slider rd-featured  rd-horizontal-thumb rd-bottom-thumb '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_box();	
			echo '<div class="rd-post-list" >'; 
 				xecuter_content_featured_1c();
			echo '</div>'; 
 			xecuter_lightslider('1','1','"pager": true,"timer": true,"thumbItem": 6,"gallery":true,"gallery_thumb":true,"responsive" : [{"breakpoint":1240,"settings": {"thumbItem":5,"controls":true}},{"breakpoint":768,"settings": {"thumbItem":3,"controls":true}},{"breakpoint":500,"settings": {"thumbItem":2,"controls":true}}],');
 		echo '</aside>';			
	}
	
	//Thumbnails Slider 2	
	if($value=='slider_thumb_2'){
       	echo '<aside  class="rd-slider rd-featured  rd-horizontal-thumb rd-bottom-thumb-text '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_box();	
			echo '<div class="rd-post-list" >'; 
 				xecuter_content_featured_1c();
			echo '</div>';
			xecuter_lightslider('1','1','"pager": true,"timer": true,"gallery":true,"thumbItem": 5,"gallery_thumb_text":true,"responsive" : [{"breakpoint":1240,"settings": {"thumbItem":5,"controls":true}},{"breakpoint":768,"settings": {"thumbItem":3,"controls":true}},{"breakpoint":500,"settings": {"thumbItem":2,"controls":true}}],');
 		echo '</aside>';			
	}
	
	//Thumbnails Slider 3	
 	if($value=='slider_thumb_3'){
       	echo '<aside  class="rd-slider rd-featured  rd-horizontal-thumb rd-bottom-text '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_box();	
			echo '<div class="rd-post-list" >'; 
 				xecuter_content_featured_1c();
			echo '</div>';
			xecuter_lightslider('1','1','"pager": true,"timer": true,"gallery":true,"thumbItem": 6,"gallery_text":true,"responsive" : [{"breakpoint":1240,"settings": {"thumbItem":5,"controls":true}},{"breakpoint":768,"settings": {"thumbItem":3,"controls":true}},{"breakpoint":500,"settings": {"thumbItem":2,"controls":true}}],');
 		echo '</aside>';			
	} 
	
	//Thumbnails Slider 4	
	if($value=='slider_thumb_4'){
       	echo '<aside  class="rd-slider rd-featured  rd-horizontal-thumb rd-inner-bottom-text  rd-details-middle '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_box();	
			echo '<div class="rd-post-list" >'; 
 				xecuter_content_featured_1c();
			echo '</div>';
			xecuter_lightslider('1','1','"pager": true,"timer": true,"gallery":true,"thumbItem": 6,"gallery_inner_bottom_text":true,"vThumbWidth":1240,"gallery_text":true,"responsive" : [{"breakpoint":1240,"settings": {"thumbItem":5,"controls":true}},{"breakpoint":979,"settings": {"thumbItem":4,"controls":true}},{"breakpoint":768,"settings": {"thumbItem":3,"controls":true}},{"breakpoint":500,"settings": {"thumbItem":2,"controls":true}}],');
 		echo '</aside>';			
	}   	
 
	//Thumbnails Slider 5 Vertical	 				
 	if($value=='slider_thumb_5'){
		$height = xecuter_data('height');
 		if($height=='rd-300px') { $vertical ='300';$item='3';}
		elseif($height=='rd-400px') { $vertical ='400';$item='4';}
		elseif($height=='rd-500px') { $vertical ='500';$item='5';}
		elseif($height=='rd-600px') { $vertical ='600';$item='6';}
        	echo '<aside  class="rd-slider rd-featured rd-vertical-thumb rd-bottom-thumb '.esc_attr(xecuter_module_class()).' ">'; 
				xecuter_title_box();	
				echo '<div class="rd-post-list" >'; 
					xecuter_content_featured_1c();
				echo '</div>'; 
				xecuter_lightslider('1','1','"pager": true,"thumbItem": '.$item.',"verticalHeight":'.$vertical.',"vertical": true,"gallery":true,"gallery_thumb":true,');
 		echo '</aside>';			
	}
	
	//Thumbnails Slider 6 Vertical					
	if($value=='slider_thumb_6'){
		$height = xecuter_data('height');
 		if($height=='rd-300px') { $vertical ='300';$item='4';}
		elseif($height=='rd-400px') { $vertical ='400';$item='5';}
		elseif($height=='rd-500px') { $vertical ='500';$item='6';}
		else  { $vertical ='600';$item='7';}
		$vthumb = ($vertical / $item) ;		
        	echo '<aside  class="rd-slider rd-featured rd-vertical-thumb rd-bottom-thumb-text '.esc_attr(xecuter_module_class()).' ">'; 
  				xecuter_title_box();	
				echo '<div class="rd-post-list" >'; 
 					xecuter_content_slider_vertical();
				echo '</div>'; 
 				xecuter_lightslider('1','1','"pager": true,"thumbItem": '.$item.',"verticalHeight":'.$vertical.', "vThumbWidth": 400,"vertical": true,"gallery":true,"gallery_thumb_text":true,"responsive" : [{"breakpoint":1240,"settings": {"vThumbWidth": 350,"controls":true}},{"breakpoint":979,"settings": {"vThumbWidth": 300,"controls":true}},{"breakpoint":767,"settings": {"vThumbWidth": '.$vthumb.',"controls":true}}],');
 		echo '</aside>';			
	}

	/********************************************************************
	Featured 1 Column
	*********************************************************************/
 	//Featured 1 Column						
	if($value=='featured_1c'){
       	echo '<aside  class="rd-featured '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_tabs('xecuter_content_featured_1c');	
  			echo '<div class="rd-post-list" >';
				xecuter_content_featured_1c();
 			echo '</div>';
 			xecuter_load_more('xecuter_content_featured_1c');		
   		echo '</aside>';			
	}
	
	//Featured 2 Column						
	if($value=='featured_2c'){
       	echo '<aside  class="rd-featured '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_tabs('xecuter_content_featured_2c');	
  			echo '<div class="rd-post-list" >';
				xecuter_content_featured_2c();
 			echo '</div>';
 			xecuter_load_more('xecuter_content_featured_2c');		
   		echo '</aside>';			
	}

	//Featured 3 Column						
	if($value=='featured_3c'){
       	echo '<aside  class="rd-featured '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_tabs('xecuter_content_featured_3c');	
  			echo '<div class="rd-post-list" >';
				xecuter_content_featured_3c();
 			echo '</div>';
 			xecuter_load_more('xecuter_content_featured_3c');		
   		echo '</aside>';			
	}
	
	//Featured 4 Column						
	if($value=='featured_4c'){
       	echo '<aside  class="rd-featured '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_tabs('xecuter_content_featured_4c');	
  			echo '<div class="rd-post-list" >';
				xecuter_content_featured_4c();
 			echo '</div>';
 			xecuter_load_more('xecuter_content_featured_4c');		
   		echo '</aside>';			
	}
	
	//Featured 5 Column						
	if($value=='featured_5c'){
       	echo '<aside  class="rd-featured '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_tabs('xecuter_content_featured_5c');	
  			echo '<div class="rd-post-list" >';
				xecuter_content_featured_5c();
 			echo '</div>';
 			xecuter_load_more('xecuter_content_featured_5c');		
   		echo '</aside>';			
	}
	
	//Featured 6 Column						
	if($value=='featured_6c'){
       	echo '<aside  class="rd-featured '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_tabs('xecuter_content_featured_6c');	
  			echo '<div class="rd-post-list" >';
				xecuter_content_featured_6c();
 			echo '</div>';
 			xecuter_load_more('xecuter_content_featured_6c');		
   		echo '</aside>';			
	}
	
	//Featured 8 Column						
	if($value=='featured_8c'){
       	echo '<aside  class="rd-featured '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_tabs('xecuter_content_featured_8c');	
  			echo '<div class="rd-post-list" >';
				xecuter_content_featured_8c();
 			echo '</div>';
 			xecuter_load_more('xecuter_content_featured_8c');		
   		echo '</aside>';			
	}	
	//Featured 10 Column						
	if($value=='featured_10c'){
       	echo '<aside  class="rd-featured '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_tabs('xecuter_content_featured_10c');	
  			echo '<div class="rd-post-list" >';
				xecuter_content_featured_10c();
 			echo '</div>';
 			xecuter_load_more('xecuter_content_featured_10c');		
   		echo '</aside>';			
	}		
 

	/********************************************************************
	Grid 
	*********************************************************************/ 
 	//Grid 1 Column						
	if($value=='grid_1c'){
       	echo '<aside  class="rd-grid '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_tabs('xecuter_content_grid_1c');	
  			echo '<div class="rd-post-list" >';
				xecuter_content_grid_1c();
 			echo '</div>';
 			xecuter_load_more('xecuter_content_grid_1c');		
  		echo '</aside>';			
	}		


	//Grid 2 Column						
 	if($value=='grid_2c'){
       	echo '<aside  class="rd-grid '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_tabs('xecuter_content_grid_2c');	
  			echo '<div class="rd-post-list" >';
				xecuter_content_grid_2c();
 			echo '</div>';
 			xecuter_load_more('xecuter_content_grid_2c');		
  		echo '</aside>';			
	}
	
	//Grid 3 Column						
	if($value=='grid_3c'){
       	echo '<aside  class="rd-grid '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_tabs('xecuter_content_grid_3c');	
  			echo '<div class="rd-post-list" >';
				xecuter_content_grid_3c();
 			echo '</div>';
 			xecuter_load_more('xecuter_content_grid_3c');		
  		echo '</aside>';			
	}			

	//Grid 4 Column						
	if($value=='grid_4c'){
       	echo '<aside  class="rd-grid '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_tabs('xecuter_content_grid_4c');	
  			echo '<div class="rd-post-list" >';
				xecuter_content_grid_4c();
 			echo '</div>';
 			xecuter_load_more('xecuter_content_grid_4c');		
  		echo '</aside>';			
	}
	
	//Grid 5 Column						
	if($value=='grid_5c'){
       	echo '<aside  class="rd-grid '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_tabs('xecuter_content_grid_5c');	
  			echo '<div class="rd-post-list" >';
				xecuter_content_grid_5c();
 			echo '</div>';
 			xecuter_load_more('xecuter_content_grid_5c');		
  		echo '</aside>';			
	}


	//Grid 6 Column						
	if($value=='grid_6c'){
       	echo '<aside  class="rd-grid '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_tabs('xecuter_content_grid_6c');	
  			echo '<div class="rd-post-list" >';
				xecuter_content_grid_6c();
 			echo '</div>';
 			xecuter_load_more('xecuter_content_grid_6c');		
  		echo '</aside>';			
	}

	/********************************************************************
	Carousel Grid 
	*********************************************************************/ 
 	//Grid Carousel 3 Column						
 	if($value=='slider_grid_3c'){
       	echo '<aside  class="rd-grid rd-slider rd-carousel '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_box();	
  			echo '<div class="rd-post-list" >';
				xecuter_content_grid_3c(true);
 			echo '</div>';
		    xecuter_lightslider('1','3','"responsive" : [{"breakpoint":499,"settings": {"item":1,"controls":true}}],');
  		echo '</aside>';			
	}		
	
 	//Grid Carousel 4 Column						
	if($value=='slider_grid_4c'){
       	echo '<aside  class="rd-grid rd-slider  rd-carousel '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_box();	
  			echo '<div class="rd-post-list" >';
				xecuter_content_grid_4c(true);
 			echo '</div>';
		    xecuter_lightslider('1','4','"responsive" : [{"breakpoint":979,"settings": {"item":2,"controls":true}}],');
  		echo '</aside>';			
	}


 	//Grid Carousel 4 Column						
	if($value=='slider_grid_5c'){
       	echo '<aside  class="rd-grid  rd-slider  rd-carousel '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_box();	
  			echo '<div class="rd-post-list" >';
				xecuter_content_grid_5c(true);
 			echo '</div>';
		    xecuter_lightslider('1','5','"responsive" : [{"breakpoint":979,"settings": {"item":3,"controls":true}},{"breakpoint":767,"settings": {"item":2,"controls":true}}],');
  		echo '</aside>';			
	}
	
 	//Grid Carousel 6 Column						
	if($value=='slider_grid_6c'){
       	echo '<aside  class="rd-grid  rd-slider rd-carousel '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_box();	
  			echo '<div class="rd-post-list" >';
				xecuter_content_grid_6c(true);
 			echo '</div>';
		    xecuter_lightslider('1','6','"responsive" : [{"breakpoint":979,"settings": {"item":3,"controls":true}},{"breakpoint":499,"settings": {"item":2,"controls":true}}],');
  		echo '</aside>';			
	}
	
	/********************************************************************
	List 
	*********************************************************************/ 	
 	//List 1 Column						
	if($value=='list_1c'){
       	echo '<aside  class="rd-list rd-space '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_tabs('xecuter_content_list_1c');	
  			echo '<div class="rd-post-list" >';
				xecuter_content_list_1c();
 			echo '</div>';
 			xecuter_load_more('xecuter_content_list_1c');	
  		echo '</aside>';			
	}
	
 	//List 2 Column						
	if($value=='list_2c'){
       	echo '<aside  class="rd-list  rd-space  '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_tabs('xecuter_content_list_2c');	
  			echo '<div class="rd-post-list" >';
				xecuter_content_list_2c();
 			echo '</div>';
 			xecuter_load_more('xecuter_content_list_2c');	
  		echo '</aside>';			
	}
	
 	//List 3 Column						
	if($value=='list_3c'){
       	echo '<aside  class="rd-list  rd-space  '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_tabs('xecuter_content_list_3c');	
  			echo '<div class="rd-post-list" >';
				xecuter_content_list_3c();
 			echo '</div>';
 			xecuter_load_more('xecuter_content_list_3c');	
  		echo '</aside>';			
	}		
	
 	/********************************************************************
	Text 
	*********************************************************************/
 	//Text 2 Column						
	if($value=='text_2c'){
       	echo '<aside  class="rd-text rd-space  '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_tabs('xecuter_content_text_2c');	
  			echo '<div class="rd-post-list" >';
				xecuter_content_text_2c();
 			echo '</div>';
 			xecuter_load_more('xecuter_content_text_2c');	
  		echo '</aside>';			
	}
	
 	//Text 3 Column						
	if($value=='text_3c'){
       	echo '<aside  class="rd-text  rd-space  '.esc_attr(xecuter_module_class()).' ">'; 
  			xecuter_title_tabs('xecuter_content_text_3c');	
  			echo '<div class="rd-post-list" >';
				xecuter_content_text_3c();
 			echo '</div>';
 			xecuter_load_more('xecuter_content_text_3c');	
  		echo '</aside>';			
	}
	
	/********************************************************************
	Other Item
	*********************************************************************/
	//ADS
	if($value=='ads'){
		echo '<aside class="'.esc_attr(xecuter_module_class()).' ">'; 
		xecuter_ads();
		echo '</aside>';
	}
	
	//Text Html
	if($value=='text_html'){
   		echo '<aside class="rd-text-html '.esc_attr(xecuter_module_class()).' ">'; 
 			if(!empty($xecuter_data['textarea'])){ echo '<div class="widget_text">'.balanceTags($xecuter_data['textarea']).'</div>';}
  		echo '</aside>';
	} 	
		
	//Sidebar
	if($value=='sidebar'){
		xecuter_sidebar();		
 	}
	wp_reset_postdata();
}

?>