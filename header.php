<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!--<script type="text/javascript" src="//code.jquery.com/jquery-2.2.4.js"></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
<script src="<?php echo get_template_directory_uri(); ?>/assets/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/jquery-ui.js"></script>

<!--<script type="text/javascript" src="http://localhost/hometaste/wp-content/themes/storefront/inc/multidatepicker/jquery-ui.multidatespicker.js"></script>
<link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/pepper-grinder/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/dubrox/Multiple-Dates-Picker-for-jQuery-UI/master/jquery-ui.multidatespicker.css">-->



<!--<link rel="stylesheet" href="http://localhost/hometaste/wp-content/themes/storefront/assets/datepick/css/mobiscroll.javascript.min.css">
<script src="http://localhost/hometaste/wp-content/themes/storefront/assets/datepick/js/mobiscroll.javascript.min.js"></script>-->
<?php wp_head(); ?>

<style>
	/*
	td.highlight {
    border: none !important;
    padding: 1px 0 1px 1px !important;
    background: none !important;
    overflow:hidden;
}
td.highlight a {
    background: chocolate url(bg.png) 50% 50% repeat-x !important;
    border: 1px #88a276 solid !important;
}*/
</style>
<script>


/*
$(document).ready(function(){
	//var disabledDays = ["2022-7-28"];
	//var tips = ['some description1'];
	$('#mdp').multiDatesPicker({
	//maxPicks: 5,
	
	altField: '#mdp-value',
	dateFormat: "dd-mm-yy",
	minDate: 0,
	//maxDate: "+12M",
	//addDisabledDates: ['25-09-12' , '26-09-12' , '27-09-12'],
	beforeShowDay: $.datepicker.noWeekends,
	beforeShowDay: function (date) {
        var m = date.getMonth()+1,
            d = date.getDate(),
            y = date.getFullYear();
			daysInMonth = new Date(y, m, 0).getDate();
			classname_new = y + "" + m + "" + d;
        for (var i = 0; i < daysInMonth; i++) {
            //if ($.inArray(y + '-' + (m + 1) + '-' + d, disabledDays) != -1) {
            //    return [true, 'highlight ' + classname_new ,''];
            //}
			return [true, "class_" + classname_new ,''];
        }
        return [true];
    },
	mode: 'daysRange',
	autoselectRange: [0,7],
	onSelect: function(dateText) {
        console.log("Selected date: " + dateText + "; input's current value: " + this.value);
		var count = $(this).val().split(',').length;
		$("#toptitle").text(count + ' selected');
		
    }
	});


	//$('input#yith-wapo-8-0').on('input',function(e){
 	//	alert('Changed!');
	//});
	//$('input[name=yith_wapo[][8-0]]').change(function() { alert("ffff"); });


	

	

/*
	$(".answer").hide();
$(".coupon_question").click(function() {
    if($(this).is(":checked")) {
        $(".answer").show(500);
    } else {
        
		$('custom_rice_white').val('');
		$('custom_rice_brown').val('');
		$(".answer").hide(500);
    }
});*/

	






	/*$.datepicker._selectDateOverload = $.datepicker._selectDate;
	$.datepicker._selectDate = function (id, dateStr) {
  	var target = $(id);
  	var inst = this._getInst(target[0]);
  	inst.inline = true;
  	$.datepicker._selectDateOverload(id, dateStr);
  	inst.inline = false;
  	if (target[0].multiDatesPicker != null) {
    	target[0].multiDatesPicker.changed = false;
  	} else {
    	target.multiDatesPicker.changed = false;
  	}
  	this._updateDatepicker(inst);
	};*/


	/*mobiscroll.setOptions({
        locale: mobiscroll.localeEn,     // Specify language like: locale: mobiscroll.localePl or omit setting to use default
        theme: 'ios',                    // Specify theme like: theme: 'ios' or omit setting to use default
        themeVariant: 'light'            // More info about themeVariant: https://docs.mobiscroll.com/5-17-1/javascript/calendar#opt-themeVariant
    });
    
    mobiscroll.datepicker('#demo-counter', {
        controls: ['calendar'],          // More info about controls: https://docs.mobiscroll.com/5-17-1/javascript/calendar#opt-controls
        display: 'inline',               // Specify display mode like: display: 'bottom' or omit setting to use default
        selectMultiple: true,
        selectCounter: true,
    });*/




	

//});
</script>

<style>
	/*.mbsc-row{
		max-width: 350px;
		background-color: #F1F1F1;
		border: 1px solid #EAEAEA;
	}*/

	/*.wapo-total-options, .wapo-product-price{
		display: none;
	}
	.option-price{
		display: none;
	}
	.single-product div.product form.cart .quantity{float:unset; margin-bottom: 50px;}
	.single-product div.product form.cart .quantity::after{content:'no. of person per pax';}
	*/
</style>

<style>
	/*
	#yith-wapo-addon-8 .options{
		display: flex;
		flex-direction: row;
		flex-wrap: wrap;
	}
	#yith-wapo-addon-8 h3{flex: 100%;}
	#yith-wapo-addon-8 p{display:none;}
	#yith-wapo-addon-8 .yith-wapo-option{width: 30%;}

	.rnTotalBox{display:none;}
	.RNAddToCartContainer{display:none;}
	*/
</style>
<?php
$post_id = get_the_ID();
?>
<?php //if($post_id==44) { ?>
<style>
	/*.quantity{
		display:none;
	}
	.rnTotalBox{display:block;}*/
	</style>
<?php //} ?>
<style>
	/*.new_option{
		border:1px solid #EAEAEA;
		padding: 50px;
		display:none;
	}
	.quantity{
		display:none;
	}
	#product_total_price{border:10px solid yellow; font-size: 30px;}*/
	</style>





<style>
	/*.sw_option{display:flex; flex-wrap:wrap;margin-bottom: 50px;}
	.sw_option > div{
		flex: 0 0 50%;
		padding: 10px;
		background-color: #EAEAEA;
	}*/
	</style>

	<style>
		/*.ui-datepicker-calendar tbody tr td{
			background-size: cover;
		}
		.ui-datepicker-calendar tbody tr td a{
			//background:none !important;
		}*/

		</style>


<style>
	/*.class_2022728{
		background-image:url('http://localhost/hometaste/wp-content/uploads/sites/13/2022/06/kfc2.png') !important;
		background-size: cover !important;
	}
	.class_2022728:before{
		content:'1111';
		position: absolute;
	}
	.class_2022728.ui-state-highlight{border:2px solid #000;}
	.class_2022728 a{
		opacity: .1;
	}*/
	</style>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>

	<header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">

		<?php
		/**
		 * Functions hooked into storefront_header action
		 *
		 * @hooked storefront_header_container                 - 0
		 * @hooked storefront_skip_links                       - 5
		 * @hooked storefront_social_icons                     - 10
		 * @hooked storefront_site_branding                    - 20
		 * @hooked storefront_secondary_navigation             - 30
		 * @hooked storefront_product_search                   - 40
		 * @hooked storefront_header_container_close           - 41
		 * @hooked storefront_primary_navigation_wrapper       - 42
		 * @hooked storefront_primary_navigation               - 50
		 * @hooked storefront_header_cart                      - 60
		 * @hooked storefront_primary_navigation_wrapper_close - 68
		 */
		do_action( 'storefront_header' );
		?>

	</header><!-- #masthead -->

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */
	do_action( 'storefront_before_content' );
	?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		do_action( 'storefront_content_top' );
