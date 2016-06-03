<?php
/**
 * simpleblog functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package simpleblog
 */

//define theme version
/*
if ( !defined( 'THEMEPEAK_THEME_VERSION' ) ) {
	$theme_data = wp_get_theme();
	
	define ( 'THEMEPEAK_THEME_VERSION', $theme_data->get( 'Version' ) );
}
*/
/**
 * Implement the themepeak functions
 */
 

require get_template_directory() . '/inc/themepeak.php';



$themepeak_cust_opt	=	get_theme_mod( "tp_theme_options");


//echo getFont($themepeak_cust_opt[page_title_font])
function getFont($val)
{	
	$out='';
	if(($val[font_size]) !="")
		$out.='font-size: '.$val[font_size].'px;';
	if(($val[color])!="")
		$out	.='color: '.$val[color].';';	
	if(($val[letter_spacing])!="")
		$out	.='letter-spacing: '.$val[letter_spacing].'px;';
	if(($val[word_spacing])!="")
		$out	.='word-spacing: '.$val[word_spacing].'px;';
	if(($val[font_style])!="")
		$out	.='font-style: '.$val[font_style].';';
	if(($val[font_weight])!="")
		$out	.='font-weight: '.$val[font_weight].';';
	if(($val[font_variant])!="")
		$out	.='font-variant: '.$val[font_variant].';';
	if(($val[text_align])!="")
		$out	.='text-align: '.$val[text_align].';';
	if(($val[line_height])!="")
		$out	.='line-height: '.$val[line_height].';';
	if(($val[font_family])!="")
		$out	.='font-family: '.$val[font_family].';';
	if(($val[text_decoration])!="")
		$out	.='text-decoration: '.$val[text_decoration].';';
	return $out;	
}


function getPadding($val)
{	
	$out='';
	if(($val[top]) !="")
		$out.='padding-top:'.$val[top].'px;';
	if(($val[bottom])!="")
		$out.='padding-bottom:'.$val[bottom].'px;';	
	if(($val[left])!="")
		$out.='padding-left:'.$val[left].'px;';
	if(($val[right])!="")
		$out.='padding-right:'.$val[right].'px;';
	return $out;	
}
function getMargin($val)
{	
	$out='';
	if(($val[top]) !="")
		$out.='margin-top:'.$val[top].'px;';
	if(($val[bottom])!="")
		$out	.='margin-bottom:'.$val[bottom].'px;';	
	if(($val[left])!="")
		$out	.='margin-left:'.$val[left].'px;';
	if(($val[right])!="")
		$out	.='margin-right:'.$val[right].'px;';
	return $out;	
}

function getBorder($val,$field){
	$out='';
	if(($val[top_size]) !="")
		$out.='border-top:'.$val[top_size].'px;';
	if(($val[top_style])!="")
		$out	.='border-top-style:'.$val[top_style].';';
	if(($val[top_color])!="")
		$out	.='border-top-color:'.$val[top_color].';';
	
	if(($val[bottom_size])!="")
		$out	.='border-bottom:'.$val[bottom_size].'px;';	
	if(($val[bottom_style])!="")
		$out	.='border-bottom-style:'.$val[bottom_style].';';
	if(($val[bottom_color])!="")
		$out	.='border-bottom-color:'.$val[bottom_color].';';
	
	if(($val[left_size])!="")
		$out	.='border-left:'.$val[left_size].'px;';
	if(($val[left_style])!="")
		$out	.='border-left-style:'.$val[left_style].';';
	if(($val[left_color])!="")
		$out	.='border-left-color:'.$val[left_color].';';
	
	if(($val[right_size])!="")
		$out	.='border-right:'.$val[right_size].'px;';
	if(($val[right_style])!="")
		$out	.='border-right-style:'.$val[right_style].';';
	if(($val[right_color])!="")
		$out	.='border-right-color:'.$val[right_color].';';
	if(($val[border_radius])!="")
		$out	.='border-radius:'.$val[border_radius].'px;';
	$out.='}';
	if(($val[shadow])!= "")
	{  
	
		if($val[shadow]=="drop_shadow")
	{
		$out.='/* drop_shadow */'.$field.'{ position:relative; -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset; -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset; box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset; }';
		$out.=$field.':before,'.$field.':after'.'{content:"";position:absolute;z-index:-2;}';
	}
	else if($val[shadow]=="lifted_shadow")
	{
		$out.='/* lifted_shadow */'.$field.'{ position:relative; -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset; -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset; box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset; }';
		$out.=$field.':before,'.$field.':after'.'{content:"";position:absolute;z-index:-2;}';

		$out.=$field.'{-moz-border-radius:4px; border-radius:4px;}';
		$out.=$field.':before,'.$field.':after'.'{bottom:15px;left:10px;width:50%;height:20%;-webkit-box-shadow:0 15px 10px rgba(0, 0, 0, 0.7);-moz-box-shadow:0 15px 10px rgba(0, 0, 0, 0.7);box-shadow:0 15px 10px rgba(0, 0, 0, 0.7);-webkit-transform:rotate(-3deg);-moz-transform:rotate(-3deg);-ms-transform:rotate(-3deg);-o-transform:rotate(-3deg);transform:rotate(-3deg);}';
		$out.=$field.':after'.'{right:10px; left:auto;-webkit-transform:rotate(3deg);   -moz-transform:rotate(3deg);  -ms-transform:rotate(3deg);  -o-transform:rotate(3deg);transform:rotate(3deg);}';	
	}
	else if($val[shadow]=="curled_shadow")
	{
		$out.='/* curled_shadow */'.$field.'{ -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset; -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset; box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset; }';
		$out.=$field.':before,'.$field.':after'.'{content:"";position:absolute;z-index:-2;}';

		$out.=$field.'{border:1px solid #efefef; -moz-border-radius:0 0 120px 120px/0 0 6px 6px;border-radius:0 0 120px 120px/0 0 6px 6px;}';
		$out.=$field.':before,'.$field.':after'.'{bottom:12px;left:10px;width:50%;height:55%;max-width:200px;-webkit-box-shadow:0 8px 12px rgba(0, 0, 0, 0.5); -moz-box-shadow:0 8px 12px rgba(0, 0, 0, 0.5); box-shadow:0 8px 12px rgba(0, 0, 0, 0.5); -webkit-transform:skew(-8deg) rotate(-3deg);-moz-transform:skew(-8deg) rotate(-3deg);-ms-transform:skew(-8deg) rotate(-3deg);-o-transform:skew(-8deg) rotate(-3deg);transform:skew(-8deg) rotate(-3deg);}';
		$out.=$field.':after'.'{right:10px; left:auto;-webkit-transform:skew(8deg) rotate(3deg); -moz-transform:skew(8deg) rotate(3deg);-ms-transform:skew(8deg) rotate(3deg);-o-transform:skew(8deg) rotate(3deg); transform:skew(8deg) rotate(3deg);}';
	}
	else if($val[shadow]=="perspective_shadow")
	{
		$out.='/* perspective_shadow */'.$field.'{ position:relative; -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset; -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset; box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset; }';
		$out.=$field.':before,'.$field.':after'.'{content:"";position:absolute;z-index:-2;}';

		$out.=$field.':before,'.'{left:80px;bottom:5px;width:50%;height:35%;max-width:200px;-webkit-box-shadow:-80px 0 8px rgba(0, 0, 0, 0.4);-moz-box-shadow:-80px 0 8px rgba(0, 0, 0, 0.4);box-shadow:-80px 0 8px rgba(0, 0, 0, 0.4);-webkit-transform:skew(50deg);-moz-transform:skew(50deg);-ms-transform:skew(50deg);-o-transform:skew(50deg);transform:skew(50deg);-webkit-transform-origin:0 100%;-moz-transform-origin:0 100%;-ms-transform-origin:0 100%;-o-transform-origin:0 100%;transform-origin:0 100%;}';
		$out.=$field.':after'.'{display:none;}';
	}
	else if($val[shadow]=="raised_shadow")
	{
		//$out.=$field.'{ position:relative; -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset; -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset; box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset; }';
		//$out.=$field.':before,'.$field.':after'.'{content:"";position:absolute;z-index:-2;}';

		$out.='/* raised_shadow */'.$field.'{-webkit-box-shadow: 0 15px 10px -10px rgba(0, 0, 0, 0.5), 0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;-moz-box-shadow: 0 15px 10px -10px rgba(0, 0, 0, 0.5), 0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;box-shadow: 0 15px 10px -10px rgba(0, 0, 0, 0.5), 0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;}';
	}
	else if($val[shadow]=="curved_vt1_shadow")
	{
		$out.='/* curved_vt1_shadow */'.$field.'{ position:relative; -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset; -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset; box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset; }';
		$out.=$field.'::before,'.$field.'::after'.'{content:"";position:absolute;z-index:-2;}';

		$out.=$field.'::before'.'{ top:10px; bottom:10px; left:0; right:50%; -webkit-box-shadow:0 0 15px rgba(0,0,0,0.6); -moz-box-shadow:0 0 15px rgba(0,0,0,0.6); box-shadow:0 0 15px rgba(0,0,0,0.6); -moz-border-radius:10px/100px; border-radius:10px/100px; }';
	}

	else if($val[shadow]=="curved_vt2_shadow")
	{
		$out.='/* curved_vt2_shadow */'.$field.'{ position:relative; -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset; -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset; box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset; }';
		$out.=$field.':before,'.$field.':after'.'{content:"";position:absolute;z-index:-2;}';

		$out.=$field.':before'.'{ top:10px; bottom:10px; left:0; right:50%; -webkit-box-shadow:0 0 15px rgba(0,0,0,0.6); -moz-box-shadow:0 0 15px rgba(0,0,0,0.6); box-shadow:0 0 15px rgba(0,0,0,0.6); -moz-border-radius:10px/100px; border-radius:10px/100px; }';
		$out.=$field.':before'.'{ right:0; }';
	}
	else if($val[shadow]=="curved_hz1_shadow")
	{
		$out.='/* curved_hz1_shadow */'.$field.'{ position:relative; -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset; -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset; box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset; }';
		$out.=$field.':before,'.$field.':after'.'{content:"";position:absolute;z-index:-2;}';

		$out.=$field.':before'.'{ top:10px; bottom:10px; left:0; right:50%; -webkit-box-shadow:0 0 15px rgba(0,0,0,0.6); -moz-box-shadow:0 0 15px rgba(0,0,0,0.6); box-shadow:0 0 15px rgba(0,0,0,0.6); -moz-border-radius:10px/100px; border-radius:10px/100px; }';
		$out.=$field.':before'.'{ top:50%; bottom:0; left:10px; right:10px; -moz-border-radius:100px/10px; border-radius:100px/10px; }';
	}
	else if($val[shadow]=="curved_hz2_shadow")
	{
		$out.='/* curved_hz2_shadow */'.$field.'{ position:relative; -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset; -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset; box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset; }';
		$out.=$field.':before,'.$field.':after'.'{content:"";position:absolute;z-index:-2;}';

		$out.=$field.':before'.'{ top:10px; bottom:10px; left:0; right:50%; -webkit-box-shadow:0 0 15px rgba(0,0,0,0.6); -moz-box-shadow:0 0 15px rgba(0,0,0,0.6); box-shadow:0 0 15px rgba(0,0,0,0.6); -moz-border-radius:10px/100px; border-radius:10px/100px; }';
		$out.=$field.':before'.'{ top:0; bottom:0; left:10px; right:10px; -moz-border-radius:100px/10px; border-radius:100px/10px; }';
	}
	
		}
	return $out;
}



function getBG($val,$image)
{	
	$out='';
	
	if($image !="")
	{
		 $background_image = wp_get_attachment_url( $image );
		$out.='background-image:url('.$background_image.');';
	}
	if(($val[repeat]) !="")
		$out.='background-repeat:'.$val[repeat].';';
	if(($val[scroll]) !="")
		$out.='background-attachment:'.$val[scroll].';';
	if(($val[position]) !="")
		$out.='background-position:'.$val[position].';';
	if(($val[size]) !="")
		$out.='background-size:'.$val[size].';';
	
	return $out;	
}

function get_gradient($orientation,$start,$color1,$end,$color2,$end1,$color3)
{

	if(empty($color1)){ return "";};
	if(empty($orientation)){ $orientation = 'left';};
	
	if(($end<=0 ||$color2=="") &&($end1<=0 ||$color3=="" ))
	{
		return 'background-color:'.$color1.';';
	}

	if ( $orientation == 'radial' ) {
		$orient1 = 'radial-gradient(center, ellipse cover';
		$orient2 = 'radial, center center, 0px, center center, 100%';
		$orient3 = 'radial-gradient(ellipse at center';
	} else if ( $orientation == 'horizontal' ) {
		$orient1 = 'linear-gradient(left';
		$orient2 = 'linear, left top, right top';
		$orient3 = 'linear-gradient(to right';
	} else {
		$orient1 = 'linear-gradient(top';
		$orient2 = 'linear, left top, left bottom';
		$orient3 = 'linear-gradient(to bottom';
	}

	if($end1<=0 ||$color3=="" )
	{	
		$gradient = 'background-color: ' . $color1 . ';';
		$gradient .= 'background: -moz-' . $orient1 . ',  ' . $color1 . ' ' . $start . '%, ' . $color2 . ' ' . $end . '%);';
		$gradient .= 'background: -webkit-' . $orient1 . ',  ' . $color1 . ' ' . $start . '%,' . $color2 . ' ' . $end . '%);';
		$gradient .= 'background: -o-' . $orient1 . ',  ' . $color1 . ' ' . $start . '%,' . $color2 . ' ' . $end . '%);';
		$gradient .= 'background: -ms-' . $orient1 . ',  ' . $color1 . ' ' . $start . '%,' . $color2 . ' ' . $end . '%);';
		$gradient .= 'background: -webkit-gradient(' . $orient2 . ', color-stop(' . $start . '%,' . $color1 . '), color-stop(' . $end . '%,' . $color2 . '));';
		$gradient .= 'background: ' . $orient3 . ',  ' . $color1 . ' ' . $start . '%,' . $color2 . ' ' . $end . '%);';
		$gradient .= 'filter: progid:DXImageTransform.Microsoft.gradient( $startColorstr="' . $color1 . '", $endColorstr="' . $color2 . '",GradientType=0 );';
	}
	else
	{
	$gradient = 'background-color: ' . $color1 . ';';
	$gradient .= 'background: -moz-' . $orient1 . ',  ' . $color1 . ' ' . $start . '%, ' . $color2 . ' ' . $end. '%, ' . $color3 . ' ' . $end1 . '%   );';
	$gradient .= 'background: -webkit-' . $orient1 . ',  ' . $color1 . ' ' . $start . '%,' . $color2 . ' ' . $end . '%,' . $color3 . ' ' . $end1 . '%);';
	$gradient .= 'background: -o-' . $orient1 . ',  ' . $color1 . ' ' . $start . '%,' . $color2 . ' ' . $end . '%,' . $color3 . ' ' . $end1 . '%);';
	$gradient .= 'background: -ms-' . $orient1 . ',  ' . $color1 . ' ' . $start . '%,' . $color2 . ' ' . $end . '%,' . $color3 . ' ' . $end1 . '%);';
	$gradient .= 'background: -webkit-gradient(' . $orient2 . ', color-stop(' . $start . '%,' . $color1 . '), color-stop(' . $end . '%,' . $color2. '), color-stop(' . $end1 . '%,' . $color3 . '));';
	$gradient .= 'background: ' . $orient3 . ',  ' . $color1 . ' ' . $start . '%,' . $color2 . ' ' . $end . '%,' . $color3 . ' ' . $end1 . '%);';
	$gradient .= 'filter: progid:DXImageTransform.Microsoft.gradient( $startColorstr="' . $color1 . '", $endColorstr="' . $color3 . '",GradientType=0 );';
	}
	return $gradient;
}



function my_styles_method() {
	

	global $themepeak_cust_opt;
	//print_r($themepeak_cust_opt);

	global $widget_header;
	$row_id = array();
	foreach ($widget_header as $newarr)  //to access $newarr['id'] 
	{
	$cno= $newarr['no'];
	$cid = $newarr['id']; //assigning $newarr['id'] to variable $cid
	$row_id[] = 	$cid ; // saving value of cid in array
	$col_num[] = $cno;
	//print_r($newarr);
	}
		
		
		

	for($i=0;$i<count($widget_header)-1;$i++) //count($row_id)-1 to fix overlooping
	{
		
		
		$out .= 'header #'.$row_id[$i].'{min-height:'.$colspace[$i] = get_theme_mod('headerdiv_'.$row_id[$i].'_minheight').'px;}'; //Styling min_height dynamically
		
		$out .= 'header #'.$row_id[$i].'{max-height:'.$colspace[$i] = get_theme_mod('headerdiv_'.$row_id[$i].'_maxheight').'px;}';
		
		
		 $out .= 'header #'.$row_id[$i].'{'.getPadding($themepeak_cust_opt[headerdiv_.$row_id[$i]._padding]).'}';
		 $out .= 'header #'.$row_id[$i].'{'.get_gradient(
							$themepeak_cust_opt[headerdiv_.$row_id[$i]._bgcolor][type],
							$themepeak_cust_opt[headerdiv_.$row_id[$i]._bgcolor][gradient1_size],
							$themepeak_cust_opt[headerdiv_.$row_id[$i]._bgcolor][gradient1_color],
							$themepeak_cust_opt[headerdiv_.$row_id[$i]._bgcolor][gradient2_size],
							$themepeak_cust_opt[headerdiv_.$row_id[$i]._bgcolor][gradient2_color],
							'','' ).'}';
		 $out .= 'header #'.$row_id[$i].'{'.getBorder($themepeak_cust_opt[headerdiv_.$row_id[$i]._border],'');
		
		for($j=1;$j<=$widget_header[$i]['no'];$j++)
			{
				
				if($widget_header[$i]['no']>1){ //Checks if there is only one column
					$row = 'c'.$j ;
				}
				else{
					$row = '-col';
				}
				
		  $out .= '#'.$row_id[$i].' .'.$row_id[$i].$row.'{'.getPadding($themepeak_cust_opt[headerdiv_.$row_id[$i].c.$j._padding]).'}';
		$out .= '#'.$row_id[$i].' .'.$row_id[$i].$row.'{'.getBorder($themepeak_cust_opt[headerdiv_.$row_id[$i].c.$j._border],'');
		
		$out .='#'.$row_id[$i].' .'.$row_id[$i].$row.'{'.get_gradient(
							$themepeak_cust_opt[headerdiv_.$row_id[$i].c.$j._bgcolor][type],
							$themepeak_cust_opt[headerdiv_.$row_id[$i].c.$j._bgcolor][gradient1_size],
							$themepeak_cust_opt[headerdiv_.$row_id[$i].c.$j._bgcolor][gradient1_color],
							$themepeak_cust_opt[headerdiv_.$row_id[$i].c.$j._bgcolor][gradient2_size],
							$themepeak_cust_opt[headerdiv_.$row_id[$i].c.$j._bgcolor][gradient2_color],
							'','' ).'}';
		}
	} //end of for loop
	
	global $widget_body;
	$row_id = array();
	foreach ($widget_body as $newarr)  //to access $newarr['id'] 
	{
	$cno= $newarr['no'];
	$cid = $newarr['id']; //assigning $newarr['id'] to variable $cid
	$row_id[] = 	$cid ; // saving value of cid in array
	$col_num[] = $cno;
	//print_r($newarr);
	}

	for($i=0;$i<count($widget_body)-1;$i++) //count($row_id)-1 to fix overlooping
	{
		
		$out .= '#'.$row_id[$i].'{min-height:'.$colspace[$i] = get_theme_mod('bodydiv_'.$row_id[$i].'_minheight').'px;}'; //Styling min_height dynamically
		
		$out .= '#'.$row_id[$i].'{max-height:'.$colspace[$i] = get_theme_mod('bodydiv_'.$row_id[$i].'_maxheight').'px;}';
		
		
		 $out .= '#'.$row_id[$i].'{'.getPadding($themepeak_cust_opt[bodydiv_.$row_id[$i]._padding]).'}';
		 $out .= '#'.$row_id[$i].'{'.get_gradient(
							$themepeak_cust_opt[bodydiv_.$row_id[$i]._bgcolor][type],
							$themepeak_cust_opt[bodydiv_.$row_id[$i]._bgcolor][gradient1_size],
							$themepeak_cust_opt[bodydiv_.$row_id[$i]._bgcolor][gradient1_color],
							$themepeak_cust_opt[bodydiv_.$row_id[$i]._bgcolor][gradient2_size],
							$themepeak_cust_opt[bodydiv_.$row_id[$i]._bgcolor][gradient2_color],
							'','' ).'}';
		$out .= '#'.$row_id[$i].'{'.getBG($themepeak_cust_opt[bodydiv_.$row_id[$i]._bgstyle],get_theme_mod('bodydiv_'.$row_id[$i].'_bgimg')).'}';
		 $out .= '#'.$row_id[$i].'{'.getBorder($themepeak_cust_opt[bodydiv_.$row_id[$i]._border],'');
		
		
		for($j=1;$j<=$widget_body[$i]['no'];$j++)
			{
				
				if($widget_body[$i]['no']>1){ //Checks if there is only one column
					$row = 'c'.$j ;
				}
				else{
					$row = '-col';
				}
				
		  $out .= '#'.$row_id[$i].' .'.$row_id[$i].$row.'{'.getPadding($themepeak_cust_opt[bodydiv_.$row_id[$i].c.$j._padding]).'}';
		$out .= '#'.$row_id[$i].' .'.$row_id[$i].$row.'{'.getBorder($themepeak_cust_opt[bodydiv_.$row_id[$i].c.$j._border],'');
		
		$out .='#'.$row_id[$i].' .'.$row_id[$i].$row.'{'.get_gradient(
							$themepeak_cust_opt[bodydiv_.$row_id[$i].c.$j._bgcolor][type],
							$themepeak_cust_opt[bodydiv_.$row_id[$i].c.$j._bgcolor][gradient1_size],
							$themepeak_cust_opt[bodydiv_.$row_id[$i].c.$j._bgcolor][gradient1_color],
							$themepeak_cust_opt[bodydiv_.$row_id[$i].c.$j._bgcolor][gradient2_size],
							$themepeak_cust_opt[bodydiv_.$row_id[$i].c.$j._bgcolor][gradient2_color],
							'','' ).'}';
		$out .= '#'.$row_id[$i].' .'.$row_id[$i].$row.'{'.getBG($themepeak_cust_opt[bodydiv_.$row_id[$i].c.$j._bgstyle],get_theme_mod('bodydiv_'.$row_id[$i].'c'.$j.'_bgimg')).'}';
		}
	} //end of for loop
	
	$h1_clear=get_theme_mod("h1_settings");
	$h2_clear=get_theme_mod("h2_settings");
	$h3_clear=get_theme_mod("h3_settings");
	$h4_clear=get_theme_mod("h4_settings");
	$h5_clear=get_theme_mod("h5_settings");
	$h6_clear=get_theme_mod("h6_settings");
	$body_text_decoration= get_theme_mod("body_text_decoration");
	$body_link_color	=	get_theme_mod("body_link_color");
	$body_link_hover_color 	=	get_theme_mod("body_link_hover_color");
	$body_hover_text_decoration= get_theme_mod("body_text_hover_decoration");
	$sidebar_link_color=get_theme_mod("sidebar_link_color");
	$sidebar_link_hover_color=get_theme_mod("sidebar_link_hover_color");
	$post_link_color=get_theme_mod("post_link_color");
	$post_link_hover_color=get_theme_mod("post_link_hover_color");
	$col_first_child=get_theme_mod('grid_col_first_child_setting');

		wp_enqueue_style('custom-style',get_template_directory_uri() . '/style.css');
        $custom_css =" ".$out."
						
						/* Styling for Grid Section */
						.section-group{".getPadding($themepeak_cust_opt[grid_section_padding])."}
						.section-group{".getMargin($themepeak_cust_opt[grid_section_margin])."}
						/* Styling for Grid Column */
						.col{".getPadding($themepeak_cust_opt[grid_col_padding])
						.getMargin($themepeak_cust_opt[grid_col_margin])
						."}
						
						.col:first-child{ margin-left:".$col_first_child."px;"."}
						/* Styling for body */
						.site{"
						.get_gradient(
							$themepeak_cust_opt[themepeak_body_gradient][type],
							$themepeak_cust_opt[themepeak_body_gradient][gradient1_size],
							$themepeak_cust_opt[themepeak_body_gradient][gradient1_color],
							$themepeak_cust_opt[themepeak_body_gradient][gradient2_size],
							$themepeak_cust_opt[themepeak_body_gradient][gradient2_color],
							'','' )
						.getFont($themepeak_cust_opt[themepeak_body_font])
						.getPadding($themepeak_cust_opt[themepeak_body_padding])
						.getMargin($themepeak_cust_opt[themepeak_body_margin])
						.getBorder($themepeak_cust_opt[themepeak_body_border],'body')
						."
						
						.site a{color:".$body_link_color.";"."text-decoration : ".$body_text_decoration.";}
						.site a:hover{color:".$body_link_hover_color.";"."text-decoration : ".$body_hover_text_decoration.";}
						
						/* Styling for Sidebar */
						.sidebar{"
						.get_gradient(
							$themepeak_cust_opt[sidebar_options_gradient][type],
							$themepeak_cust_opt[sidebar_options_gradient][gradient1_size],
							$themepeak_cust_opt[sidebar_options_gradient][gradient1_color],
							$themepeak_cust_opt[sidebar_options_gradient][gradient2_size],
							$themepeak_cust_opt[sidebar_options_gradient][gradient2_color],
							'','' )
						.getFont($themepeak_cust_opt[sidebar_options_font]).
						getPadding($themepeak_cust_opt[sidebar_options_padding]).
						getBorder($themepeak_cust_opt[sidebar_options_border],'').
						
						"
						.sidebar a{color:".	$sidebar_link_color.";}
						.sidebar a:hover{color:".	$sidebar_link_hover_color.";}
						
						/* Styling for Post */
						.post a{color:".	$post_link_color.";}
						.post a:hover{color:".	$post_link_hover_color.";}
						.sidebar .widget-title{"
						.get_gradient(
							$themepeak_cust_opt[widget_title_gradient][type],
							$themepeak_cust_opt[widget_title_gradient][gradient1_size],
							$themepeak_cust_opt[widget_title_gradient][gradient1_color],
							$themepeak_cust_opt[widget_title_gradient][gradient2_size],
							$themepeak_cust_opt[widget_title_gradient][gradient2_color],
							'','' )
						.getFont($themepeak_cust_opt[widget_title_font]).
						 getPadding($themepeak_cust_opt[widget_title_padding])
						.getMargin($themepeak_cust_opt[widget_title_margin])
						.getBorder($themepeak_cust_opt[widget_title_border],'')
						.
						"
						
						/* Styling for  Sidebar Widget*/
						.sidebar .widget{"
							.get_gradient(
							$themepeak_cust_opt[widget_options_gradient][type],
							$themepeak_cust_opt[widget_options_gradient][gradient1_size],
							$themepeak_cust_opt[widget_options_gradient][gradient1_color],
							$themepeak_cust_opt[widget_options_gradient][gradient2_size],
							$themepeak_cust_opt[widget_options_gradient][gradient2_color],
							'','' )
						.getFont($themepeak_cust_opt[widget_options_font]).
						 getPadding($themepeak_cust_opt[widget_options_padding])
						.getMargin($themepeak_cust_opt[widget_options_margin])
						.getBorder($themepeak_cust_opt[widget_options_border],'.sidebar .widget')
						.
						"
						
						/* Styling for  Post Title*/
						.post .entry-title a,.post .entry-header .entry-title{"
						.get_gradient(
							$themepeak_cust_opt[post_title_gradient][type],
							$themepeak_cust_opt[post_title_gradient][gradient1_size],
							$themepeak_cust_opt[post_title_gradient][gradient1_color],
							$themepeak_cust_opt[post_title_gradient][gradient2_size],
							$themepeak_cust_opt[post_title_gradient][gradient2_color],
							'','' )
						.getFont($themepeak_cust_opt[post_title_font]).
						 getPadding($themepeak_cust_opt[post_title_padding])
						.getMargin($themepeak_cust_opt[post_title_margin])
						.getBorder($themepeak_cust_opt[post_title_border],'')
						
						."
						
						/* This is done to prevent link i.e. a to get border */
						.post .entry-title a{border:0px;}
						
						/* Styling for  Post Meta*/
						
						.post .entry-header .entry-meta,.post .entry-footer,.page .entry-footer{"
						.get_gradient(
							$themepeak_cust_opt[post_meta_gradient][type],
							$themepeak_cust_opt[post_meta_gradient][gradient1_size],
							$themepeak_cust_opt[post_meta_gradient][gradient1_color],
							$themepeak_cust_opt[post_meta_gradient][gradient2_size],
							$themepeak_cust_opt[post_meta_gradient][gradient2_color],
							'','' )
						.getFont($themepeak_cust_opt[post_meta_font]).
						getPadding($themepeak_cust_opt[post_meta_padding]).
						getMargin($themepeak_cust_opt[post_meta_margin]).
						getBorder($themepeak_cust_opt[post_meta_border],'').
						"
						
						/* This is done to make bg of Edit link in Page to appear correctly  */
						.entry-footer{height:35px;}
				
						/* Styling for Post date */
						.post .entry-header .entry-meta .posted-on .entry-date{
					   "
						.get_gradient(
							$themepeak_cust_opt[post_date_gradient][type],
							$themepeak_cust_opt[post_date_gradient][gradient1_size],
							$themepeak_cust_opt[post_date_gradient][gradient1_color],
							$themepeak_cust_opt[post_date_gradient][gradient2_size],
							$themepeak_cust_opt[post_date_gradient][gradient2_color],
							'','' )
					   .getFont($themepeak_cust_opt[post_date_font])
						.getPadding($themepeak_cust_opt[post_date_padding])
						.getMargin($themepeak_cust_opt[post_date_margin])
						.getBorder($themepeak_cust_opt[post_date_border],'')
						."
						
						/* Styling for  Post Author */
						.post .entry-header .entry-meta .byline .author a{
						"
						.get_gradient(
							$themepeak_cust_opt[post_author_gradient][type],
							$themepeak_cust_opt[post_author_gradient][gradient1_size],
							$themepeak_cust_opt[post_author_gradient][gradient1_color],
							$themepeak_cust_opt[post_author_gradient][gradient2_size],
							$themepeak_cust_opt[post_author_gradient][gradient2_color],
							'','' )
						.getFont($themepeak_cust_opt[post_author_font])
						.getPadding($themepeak_cust_opt[post_author_padding])
						.getMargin($themepeak_cust_opt[post_author_margin])
						.getBorder($themepeak_cust_opt[post_author_border],'')
						."
						
						/* Styling for  post category */
						.entry-footer .cat-links a{
						"
						.get_gradient(
							$themepeak_cust_opt[post_cat_gradient][type],
							$themepeak_cust_opt[post_cat_gradient][gradient1_size],
							$themepeak_cust_opt[post_cat_gradient][gradient1_color],
							$themepeak_cust_opt[post_cat_gradient][gradient2_size],
							$themepeak_cust_opt[post_cat_gradient][gradient2_color],
							'','' )
						.getFont($themepeak_cust_opt[post_cat_font])
						.getPadding($themepeak_cust_opt[post_cat_padding])
						.getMargin($themepeak_cust_opt[post_cat_margin])
						.getBorder($themepeak_cust_opt[post_cat_border],'')
						."
						
						/*This is done to prevent additional bordering */
						.entry-footer .cat-links a{border:0px;}
						
						/* Styling for  Post Tags*/
						.entry-footer .tags-links a{
						"
						.get_gradient(
							$themepeak_cust_opt[post_tag_gradient][type],
							$themepeak_cust_opt[post_tag_gradient][gradient1_size],
							$themepeak_cust_opt[post_tag_gradient][gradient1_color],
							$themepeak_cust_opt[post_tag_gradient][gradient2_size],
							$themepeak_cust_opt[post_tag_gradient][gradient2_color],
							'','' )
						.getFont($themepeak_cust_opt[post_tag_font])
						.getPadding($themepeak_cust_opt[post_tag_padding])
						.getMargin($themepeak_cust_opt[post_tag_margin])
						.getBorder($themepeak_cust_opt[post_tag_border],'')
						."
						
						.entry-footer .tags-links a{border:0px;}
						
						/* Styling for  Page Title*/
						.page .entry-title a,.page .entry-header .entry-title{"
								.get_gradient(
							$themepeak_cust_opt[page_title_gradient][type],
							$themepeak_cust_opt[page_title_gradient][gradient1_size],
							$themepeak_cust_opt[page_title_gradient][gradient1_color],
							$themepeak_cust_opt[page_title_gradient][gradient2_size],
							$themepeak_cust_opt[page_title_gradient][gradient2_color],
							'','' )
						.getFont($themepeak_cust_opt[page_title_font]).
						 getPadding($themepeak_cust_opt[page_title_padding])
						.getMargin($themepeak_cust_opt[page_title_margin])
						.getBorder($themepeak_cust_opt[page_title_border],'')
						."
						/* Styling for  post content */
						.post .entry-content{"
						.getPadding($themepeak_cust_opt[tp_layout_post_section_padding])
						.getFont($themepeak_cust_opt[tp_layout_post_section_font])
						.get_gradient(
							$themepeak_cust_opt[tp_layout_post_section_gradient][type],
							$themepeak_cust_opt[tp_layout_post_section_gradient][gradient1_size],
							$themepeak_cust_opt[tp_layout_post_section_gradient][gradient1_color],
							$themepeak_cust_opt[tp_layout_post_section_gradient][gradient2_size],
							$themepeak_cust_opt[tp_layout_post_section_gradient][gradient2_color],
							'','' ).getMargin($themepeak_cust_opt[tp_layout_post_section_margin])
							.getBorder($themepeak_cust_opt[tp_layout_post_section_border],'').
						
						"}	

						/* Styling for  Post Container */
						
						#post .post{"	
						.get_gradient(
							$themepeak_cust_opt[tp_layout_post_section_gradient][type],
							$themepeak_cust_opt[tp_layout_post_section_gradient][gradient1_size],
							$themepeak_cust_opt[tp_layout_post_section_gradient][gradient1_color],
							$themepeak_cust_opt[tp_layout_post_section_gradient][gradient2_size],
							$themepeak_cust_opt[tp_layout_post_section_gradient][gradient2_color],
							'','' )
						.getMargin($themepeak_cust_opt[tp_layout_post_section_margin]).
						getPadding($themepeak_cust_opt[tp_layout_post_section_padding]).
						getBorder($themepeak_cust_opt[tp_layout_post_section_border],'#page .post').
									"
						/* Styling for  Page Content*/
						.page .entry-content{"
						.getPadding($themepeak_cust_opt[tp_layout_page_section_content_padding])
						.getFont($themepeak_cust_opt[tp_layout_page_section_font])
						."}	
						/* Styling for  Page Container */
						.page .page{"	
						.get_gradient(
							$themepeak_cust_opt[tp_layout_page_section_gradient][type],
							$themepeak_cust_opt[tp_layout_page_section_gradient][gradient1_size],
							$themepeak_cust_opt[tp_layout_page_section_gradient][gradient1_color],
							$themepeak_cust_opt[tp_layout_page_section_gradient][gradient2_size],
							$themepeak_cust_opt[tp_layout_page_section_gradient][gradient2_color],
							'','' )
						.getMargin($themepeak_cust_opt[tp_layout_page_section_margin]).
						getPadding($themepeak_cust_opt[tp_layout_page_section_padding]).
						getBorder($themepeak_cust_opt[tp_layout_page_section_border],'').
						"
						
						/* Styling for Category Title */
						.category .page-header .page-title,.tag .page-header .page-title{"
						.get_gradient(
							$themepeak_cust_opt[archive_title_gradient][type],
							$themepeak_cust_opt[archive_title_gradient][gradient1_size],
							$themepeak_cust_opt[archive_title_gradient][gradient1_color],
							$themepeak_cust_opt[archive_title_gradient][gradient2_size],
							$themepeak_cust_opt[archive_title_gradient][gradient2_color],
							'','' )
						.getFont($themepeak_cust_opt[archive_title_font])
						.getPadding($themepeak_cust_opt[archive_title_padding])
						.getMargin($themepeak_cust_opt[archive_title_margin])
						.getBorder($themepeak_cust_opt[archive_title_border],'')
				."
						/* Styling for  headings */
						h1{".getFont($themepeak_cust_opt[heading_font_h1_font_settings])." clear:".$h1_clear.";}
						
						h2{".getFont($themepeak_cust_opt[heading_font_h2_font_settings])."clear:".$h2_clear.";}
						
						h3{".getFont($themepeak_cust_opt[heading_font_h3_font_settings])."clear:".$h3_clear.";}
						
						h4{".getFont($themepeak_cust_opt[heading_font_h4_font_settings])."clear:".$h4_clear.";}
						
						h5{".getFont($themepeak_cust_opt[heading_font_h5_font_settings])."clear:".$h5_clear.";}
						
						h6{".getFont($themepeak_cust_opt[heading_font_h6_font_settings])."clear:".$h6_clear.";}
				
				/* Additonal Styling -- Add this later to style.css */
				tr,td,th{border:1px solid gray; padding:10px;}
				ul,ol{margin:0;}
				.edit-link{float:right;}
				.home .page{border:0px;
						padding:0px;
						margin:0px;}
				";
        wp_add_inline_style( 'custom-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'my_styles_method' );



function get_excerpt(){
$excerpt_length=get_theme_mod('excerpt_options');
$excerpt_readmore=get_theme_mod('readmore_text');
$permalink = get_permalink($post->ID);
$excerpt = get_the_content();
//$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
//$excerpt = strip_shortcodes($excerpt);
$excerpt = strip_tags($excerpt);
$excerpt = substr($excerpt, 0, $excerpt_length);
$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
//$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
$excerpt = $excerpt.' <a class="read_more_link" href="'.$permalink.'">'.$excerpt_readmore.'</a>';
return $excerpt;
}


if ( ! function_exists( 'themepeak_layout_body_classes' ) ) :
	/**
	 * Adds Themepeak layout classes to the array of body classes.
	 *
	 * @since 
	 */
	function themepeak_layout_body_classes( $classes ) {
		global $post;

		// Adds a class of group-blog to blogs with more than 1 published author
		if ( is_multi_author() ) {
			$classes[] = 'group-blog';
		}

		if ( $post ) {
	 		if ( is_attachment() ) { 
				$parent = $post->post_parent;
				
				$layout = get_post_meta( $parent,'themepeak-layout-option', true );
			} else {
				$layout = get_post_meta( $post->ID,'themepeak-layout-option', true ); 
			}
		}

		if ( empty( $layout ) || ( !is_page() && !is_single() ) ) {
			$layout='default';
		}

		$layout_selector	=	get_theme_mod('page_layout_settings');
			
		
		switch ( $layout_selector ) {
			case 'left-sidebar':
				$classes[] = 'two-columns content-right';
			break;
			
			case 'right-sidebar':
				$classes[] = 'two-columns content-left';
			break;
			
			case 'three-columns-primary-first':
				$classes[] = 'three-columns primary-first';
			break;
			
			case 'three-columns-secondary-first':
				$classes[] = 'three-columns secondary-first';
			break;
			
			case 'no-sidebar':
				$classes[] = 'no-sidebar content-width';
			break;
			
			case 'no-sidebar-full-width':
				$classes[] = 'no-sidebar full-width';
			break;
		}

		return $classes;
	}
endif; //themepeak_body_classes
add_filter( 'body_class', 'themepeak_layout_body_classes' );


