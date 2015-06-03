/*
*	Author		: i.Cube (Albertus SY)
*	Description	:
*		- create custom select behaviour with <UL>
*		- parse QTY and Size attr() from dummy <UL> on Product Detail Page
*		- validate Size Selection/required field on Product Detail Page
*		- init mini cart slide behaviour (header)
*		- create carousel on mini cart (header)
*		- create JS code to show shipping detail on Checkout Responssive
*		- Set Megamenu Children Links width if contains more than 5 children
*		- Reassign required field when user select any input/select on New Address Form
*   29 Jan 2015         Maria Angelina              Fixed cant add to cart for product other than clothes
*   
*/

// enable jQuery no-conflict mode, remember to always use "$j"
var $j = jQuery.noConflict();

jQuery(document).ready(function () {
	Vipplaza.init();
});

//function default JS initialization
var Vipplaza = function () {


	// body click return with light up the page
	var click = function() {
		$j(document).on('click','body',function() {
			$j('.wrapper-dropdown').removeClass('active');
		});
	}
	
	// sticky header
	/*var stickyHeader = function (){
		var menu = jQuery('#header');
        menu.addClass('default');
        pos = menu.offset();
        
		$j(window).scroll(function(){
		    onscroll();
		});	
		
	    function onscroll(){
	    if($j(this).scrollTop() > pos.top+menu.height() && menu.hasClass('default')){
	            menu.fadeOut(1, function(){
	                $j(this).removeClass('default').addClass('fixed').css('width',$j(this).parent().width()).fadeIn('slow');
	            });
	        } else if($j(this).scrollTop() <= pos.top && menu.hasClass('fixed')){
	            menu.fadeOut(1, function(){
	                $j(this).removeClass('fixed').addClass('default').removeAttr('style').show();
	            });
	        }
	    }
	    onscroll();			
	}*/
	
	// top cart on header
	var topcart = function() {
		$j('#header-nav .cart-items').on('click', function(e){
			var isDisplayed = $j("#topcart").css('display');
			if(isDisplayed == "none")
			{
				$j("#topcart").slideDown(400);
			}
			else
			{
				$j("#topcart").slideUp();			
			}			

			$j('.bxslider').bxSlider({
				 mode: 'vertical',
				 nextSelector: '#mincart-next',
				 prevSelector: '#mincart-prev',
				 nextText: ' ',
				 prevText: ' ',
				 pager: false,
				 moveSlides: 1,
				 minSlides: 2,
				 hideControlOnEnd: true,
				 infiniteLoop: false
			});		
			
			e.stopPropagation();
			return false;
		});    		
		
	}	
		
	// Megamenu Links
	var megamenuLinks = function (){
		var firstParent = $j('.nav-primary').find('.parent');
		
		firstParent.each(function() {
			var firstCount	= $j(this).find('.row').find('ul').length;
			var ulChild		=  $j(this).find('.row').find('ul');
			if(firstCount > 5)
			{
				ulChild.css({"width": "auto","margin-right": "15px"});
			}
		});
	}

	// set Sort By Selected Value
	var setSortBy = function (){
		var sortby = $j('#sortBy').find('.selected a').text();
		$j('#sortBy').find('span').text(sortby);
		return false;
	}


	// set QTY Order Selected Value
	var setQty = function (){
		var quantity = $j('#qtySelect').find('.selected').data('value');
		$j('#qtySelect').find('span').text(quantity);
		orderQty(quantity);
		return false;
	}
	
	// Select Behaviour
	var selectbehaveToolbar = function (){
		$j('.wrapper-dropdown').click(function(e){
			var dropdownList = $j(this).find('ul').css('opacity');
			if(dropdownList == '0')
			{
				$j(this).addClass('active');
			}
			
			$j('body').click(function(){
				$j('.wrapper-dropdown').removeClass('active');
			});
            return false;
		});
		
		$j('.dropdown > li').on('click', function(e){
			// get selected value
			var selectedText = $j(this).find('a').text();
			
			$j(this).closest('ul').find('li').removeClass('selected');
			$j(this).addClass('selected');
			
			//show it on span for return
			$j(this).closest('.wrapper-dropdown').find('span').text(selectedText);
			
			//close dropdown
			$j(this).closest('.wrapper-dropdown').removeClass('active');
			
			// check id to assign different task 
			var id = $j(this).closest('.wrapper-dropdown').attr('id');
			
			//parse selected item to do sorting for Toolbar on Catalog Page
			if(id == "sortBy")
			{
				var redirectSorting = $j(this).data('value');
				redirectCatalog(redirectSorting);		
			}

			//parse selected item to QTY input on Product Page
			if(id == "qtySelect")
			{
				var quantity = $j(this).data('value');
				orderQty(quantity);
			}
		});
	}
	
	var redirectCatalog = function (params){
		window.location.href = params;
			
		event.stopPropagation();
		event.preventDefault();
	}
	
	var orderQty = function (params){
		$j('#qty').val(params);
	}
	
	var checkRequired = function (){
		$j('.guarantee-and-addto .btn-cart').on('click', function(e){
			var checkIsClick = $j('.size-selection li.chosen').length;
			if(checkIsClick < 1)
			{
				$j('.size-selection .required-field').text('This field is required!');
			}
			else
			{
				$j('.size-selection .required-field').text('');
			}
						
			event.stopPropagation();
			event.preventDefault();
		});
	}
	
	var orderSize = function (){
		$j('.size-selection li a').on('click', function(e){
			var sizeValue = $j(this).data('value');

			//assign styling
			$j(this).closest('ul').find('li').removeClass('chosen');			
			$j(this).closest('li').addClass('chosen');

			//remove any messages about required fields
			$j('.size-selection .required-field').text('');
			
			//assign size to actual size order dropdown
                        
                        var attrCollection = [149, 150, 151, 152, 154, 153, 155, 156 ];
                        $j.each( attrCollection, function( i, val ) {
                            if ($j('#attribute'+val).length) 
                                $j('#attribute'+val).find('option[value="'+sizeValue+'"]').prop("selected",true);
                        });                        
                        
			return false;
		});
	}
	
	var originalLoadedForm = function(){
		var loadedForm = $j('#shipping-new-address-form .fieldset').find('ul').html();
		var wrapLoadedForm = '<ul>'+loadedForm+'</ul>';
		return wrapLoadedForm;
	}
	var availableAddress = function (){
		$j('#shipping-new-address-form').find('.customer-name input').val('').text('');
		$j('#shipping-new-address-form').find('input').removeClass('required-entry');
		$j('#shipping-new-address-form').find('textarea').removeClass('required-entry');			
		$j('#shipping-new-address-form').find('select').removeClass('validate-select');	
		$j('#shipping-new-address-form').find('input[name="shipping[postcode]"]').removeClass('validate-zip-international');										
	}
	
	var billAddress = function (){
		$j('input[name="radio_shipping_addres_id"]').on('click', function(e){
			var dethis = $j(this);
			
			//remove current styling
			dethis.closest('.input-box').find('.available-address').removeClass('checked');
			
			//assign checked styling
			dethis.closest('.available-address').addClass('checked');
			
			//remove required attr on new address field
			availableAddress();
		});
	}
	
	var newbillAddress = function (originForm){
		$j('#shipping-new-address-form input').on('focus', function(e){
			
			/* Reassign required field when user select any input/select on New Address Form */
			$j('#shipping-new-address-form').find('.customer-name input').addClass('required-entry');
			$j('#shipping-new-address-form').find('.street1 input').addClass('required-entry');
			$j('#shipping-new-address-form').find('select').addClass('required-entry');
			$j('#shipping-new-address-form').find('input[title=\"Telephone"\]').addClass('required-entry');
			
			//$j('#shipping-new-address-form .fieldset').find('ul').remove();
			//$j('#shipping-new-address-form .fieldset .required').before(originForm);
			
			$j('#shipping-new-address-form').find('input[name=\"Zip/Postal Code"\]').removeClass('required-entry');	
			
			/* remove style on available billing address */
			$j('.available-address').removeClass('checked');
			
			/* simulate selected radio for new address*/
			$j('#shipping-address-select option:last-child').prop('selected', true);
			$j('#shipping-address-radio').prop('checked',true);
			
			var dethis = $j(this);
		});
		
		$j('#shipping-new-address-form select').on('focus', function(e){
			$j('#shipping-new-address-form').find('input[title=\"Zip/Postal Code\"]').removeClass('required-entry');
			
			$j('#shipping-new-address-form').find('.customer-name input').addClass('required-entry');
			$j('#shipping-new-address-form').find('.street1 input').addClass('required-entry');
			$j('#shipping-new-address-form').find('select').addClass('required-entry');
			$j('#shipping-new-address-form').find('input[title=\"Telephone"\]').addClass('required-entry');
			
			/* remove style on available billing address */
			$j('.available-address').removeClass('checked');
			
			/* simulate selected radio for new address*/
			$j('#shipping-address-select option:last-child').prop('selected', true);
			$j('#shipping-address-radio').prop('checked',true);
			
		});
	}	
	
	var shipMethodDetail = function (){
		var id = "";
		
		/* check for any selected radio */
		$j('.general-ship-method-wrapper input:radio:checked').each(function() {
			var checkedMethod = $j(this).attr('id');
			var shipID = checkedMethod.substring(9);
				
			/* display shipping detail information based on checked shipping method */
			$j('.ship-detail-info .method-detail').find('#d_method_'+shipID).show();			
		});
 
		
		$j('.general-ship-method-wrapper input').on('click', function(e){
			/* hide all shipping detail information */
			$j('.ship-detail-info .method-detail').find('li').hide();
			
			/* get checked shipping method */
			var dethis = $j(this);
			if(dethis.is(':checked'))
			{
				id = dethis.attr('id');
				var shipID = id.substring(9);
				
				/* display shipping detail information based on checked shipping method */
				$j('.ship-detail-info .method-detail').find('#d_method_'+shipID).show();
			}
		});
	}
		
	var checkoutResponsive = function(){
		if (typeof (window.innerWidth) == 'number') {
		    myWidth = window.innerWidth;
		    myHeight = window.innerHeight;
		}
		
		if(myWidth <= 768)
		{
			$j('#checkoutSteps').addClass('responsive').find('li h2').text('');
		}
		else if(myWidth > 768)
		{
			if($j('#checkoutSteps').hasClass('responsive'))
			{
				$j('#opc-billing').find('h2').html('Billing<br>Information');
				$j('#opc-shipping').find('h2').html('Shipping<br>Information');
				$j('#opc-shipping_method').find('h2').html('Shipping<br>Method');
				$j('#opc-payment').find('h2').html('Payment<br>Information');
				$j('#opc-review').find('h2').html('Order<br>Review');

				$j('#checkoutSteps').removeClass('responsive');
			}
		}
	}		
		
	var newAddrShippingMethod = function(){
		$j('#shipping-new-address-form .sub-title').on('click',function(e){
			var formShow = $j(this).closest('li').find('ul').css('display');			
			if(formShow == 'none')
			{
				$j(this).closest('li').find('ul').show();
				$j(this).removeClass('normal').addClass('form-is-shown');

				//Update Height
				var getFormHeight = $j(this).closest('li').find('ul').height();
				var getHeight = $j(this).closest('#checkoutSteps').height();
				
				var newHeight = getHeight + getFormHeight + 34;
				$j('#checkoutSteps').css('height',newHeight);
			}		
			else
			{
				$j(this).closest('li').find('ul').slideUp();
				$j(this).removeClass('form-is-shown').addClass('normal');		
				
				// Update Height
				var getFormHeight = $j(this).closest('li').find('ul').height();		
				var getHeight = $j(this).closest('#checkoutSteps').height();
				
				var newHeight = getHeight - getFormHeight + 36;
				$j('#checkoutSteps').css('height',newHeight);
				
			}

			return false;
		});
		
		
	}	
		
	var heightSectionResponsive = function(section){

			/* declare var, titleHeight comes from height of checkout title (the ones with logo) */
			var sectionHeight = 0
			,	titleHeight = 72 + 20 + 10;

			/* adjusting height for each process/method on checkout process */
			if(section=="shipping")
			{
				sectionHeight = $j('#checkout-step-shipping').outerHeight();
			}
			else if(section == "shipping_method")
			{
				if($j('#checkoutSteps').hasClass('responsive'))
				{
					sectionHeight = $j('#checkout-step-shipping_method').outerHeight() + 35;	
				}
				else
				{
					sectionHeight = $j('#checkout-step-shipping_method').outerHeight();								
				}
				
				/* Check for iPad */
				if(navigator.userAgent.match(/iPad/i))
				{
					sectionHeight = $j('#checkout-step-shipping_method').outerHeight()+8;
				}
								
				shipMethodDetail();
			}
			else if(section == "payment")
			{			
				sectionHeight = $j('#checkout-step-payment').outerHeight();
				if($j('#checkoutSteps').hasClass('responsive'))
				{
					if(sectionHeight <= 600)
					{
						sectionHeight = 780;
					}		
				}
				
				/* Check for iPad */
				if((navigator.userAgent.match(/iPad/i)))
				{
					sectionHeight = $j('#checkout-step-payment').outerHeight(true) + 2;
				}			
			}

			/* applied calculated height form checkout for responsive purpose */
			pxHeight = (sectionHeight + titleHeight).toString() + "px";
					
			$j('#checkoutSteps').css('height', pxHeight);
			if(section == "review")
			{
				$j('#checkoutSteps').css('height','auto');
			}						

	}
			
	return {
		init: function() {
			//stickyHeader();
			topcart();
			megamenuLinks();
			selectbehaveToolbar();
			click();
		},
		catalogSelect: function()
		{
			setSortBy();
		},
		pdp: function()
		{
			checkRequired();
			setQty();
			orderSize();
		},
		checkout: function()
		{
			var originForm = originalLoadedForm();
			availableAddress();
			billAddress();
			newbillAddress(originForm);
			newAddrShippingMethod();
		},
		heightResponsive: function(section)
		{
			heightSectionResponsive(section);
		},
		responsive: function(params)
		{
			if(params="checkout")
			{
				checkoutResponsive();	
			}
		}
	};
	
}();