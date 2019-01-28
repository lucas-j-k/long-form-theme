

	//Mobile menu functionality:
	var mobileNav = document.querySelector('#main-nav');
	var articleContents = document.querySelector('#article-contents');

	var menuToggle = document.querySelector('#mobile-menu-toggle');
	var contentsToggle = document.querySelector('#mobile-contents-toggle') || null;

	//Set the menu initially to closed.
	toggleOverlay(mobileNav, "left");

	
	//Add event listener for the menu toggle
	menuToggle.addEventListener("click", function(){
		toggleOverlay(mobileNav, "left");
	});


	//Check if the contents button exists (if we are on a single article.) 
	//If so, close the contents panel and add event listener for toggling the panel.
	if(contentsToggle){
		toggleOverlay(articleContents, "right");
		contentsToggle.addEventListener("click", function(){
			toggleOverlay(articleContents, "right");
		});
	}


	//Unified function
	function toggleOverlay(overlayEl, sideAlignment){
		var xPos = parseInt(overlayEl.style[sideAlignment]);
		var overLayWidth = overlayEl.getBoundingClientRect().width;
		if(xPos < 0){
			overlayEl.style[sideAlignment] = "0px";
		} else {
			overlayEl.style[sideAlignment] = "-" + overLayWidth + "px";
		}
	}





		


