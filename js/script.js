window.onload = function(){
    
    //Script to alter the mobile header position in homepage due to banner
    const headerMobile = document.getElementById('masthead');
    if (document.body.classList.contains('home')) {
        headerMobile.classList.add('mobile-home-header');
    } 
    
    //script to change color on text on product hover
    const wc_product_card = document.querySelectorAll('.product-content'); 
    
    wc_product_card.forEach(product => {
        const alink = product.querySelector('a');
        const product_header = alink.querySelector('.woocommerce-loop-product__title');
        const product_price = alink.querySelector('.price');
        product.addEventListener('mouseenter', function(){
            product_header.classList.add('product-hover-color');
            product_price.classList.add('product-hover-color');
        });
        product.addEventListener('mouseleave', function(){
            product_header.classList.remove('product-hover-color');
            product_price.classList.remove('product-hover-color');
        });
    });
    
    
    // Script to change the language selector display 
    const wpmlCurrent = document.querySelector('span.wpml-ls-native');
	const activeLinkLi = document.querySelector('.wpml-ls-current-language');
	const wpml = document.querySelector('span.wpml-ls-display');
	if(wpml.textContent === 'Greek'){
	   wpml.textContent = 'ΕΛ';
	}else if(wpml.textContent === 'Αγγλικά'){
	   wpml.textContent = 'EN';
	}

	if(wpmlCurrent.textContent === 'Ελληνικά'){
	   wpmlCurrent.textContent = 'ΕΛ';
	   activeLinkLi.innerHTML = '<a href="#" class="wpml-ls-link"><span class="wpml-ls-native">ΕΛ</span></a>';
	}else if(wpmlCurrent.textContent === 'English'){
	   wpmlCurrent.textContent = 'EN';
	   activeLinkLi.innerHTML = '<a href="#" class="wpml-ls-link"><span class="wpml-ls-native">EN</span></a>';
	}
	
	
	//Script to change the yith theme columns to 3
	const columnsDiv = document.querySelector('div.columns-4:not(.woocommerce)');
    columnsDiv.classList.add('columns-3');
    columnsDiv.classList.remove('columns-4');
    
    
    // Script to change the breadcrumbs path in category page 
	if (document.body.classList.contains('tax-product_cat')) {
    	const breadSpan = document.querySelector('.breadcrumb_last');
        const breadSpanParent = breadSpan.parentNode;
        let newLink = document.createElement('a');
        newLink.textContent = 'Shop';
        (wpml.textContent === 'EN') ? newLink.href = 'https://angelakopoulos.com/maroukas/shop/' : newLink.href = 'https://angelakopoulos.com/maroukas/en/shop/';
        const newText = document.createTextNode(' / ');
        breadSpanParent.insertBefore(newLink, breadSpan);
        breadSpanParent.insertBefore(newText, breadSpan);
    }
	
	
	// Script to hide the cart items element when cart is empty NOT WORKING
	   // const cartLink = document.querySelector('.proceed-to-cart-icon');
	   // const spanItem = cartLink.lastElementChild;
    //     (spann.textContent === '0') ? spann.style.opacity = '0' : spann.style.opacity = '1';
    

    
    // const wcResultCount = document.querySelector('.woocommerce-result-count');
    // wcResultCount.textContent = 'ORDER:';
    
//     const breadCrumbsNav = document.querySelector('.woocommerce-breadcrumb');
//     const breadCrumbLink = breadCrumbsNav.firstElementChild;
// 	if (breadCrumbLink.textContent === 'Αρχική σελίδα'){
//         breadCrumbLink.textContent = 'Αρχική';
// 	}
	
	

    




    
}
