function openTabs() {
	var tabs = document.getElementsByClassName('tabs')

	for (let k=0; k<tabs.length; k++)
	  tabs[k].addEventListener('click', function(e){
	    let c = e.target;
	    var tablinks = this.children;
	    var tabregion = this.parentNode.children[1];
	    var tabcontent = this.parentNode.children[1].children;
	    var tabName, tab;
	    var flag = 0;

	    if (c.classList.contains('vertical-center'))
	      c = e.target.parentNode

	    if(c.classList.contains('tab')){
		    tabName = c.getAttribute('toggle-target'); 
		    tab = document.getElementById(tabName)

		    if (c.className.includes('activetab')){
		      flag = 1
		    }

		    for (i = 0; i < tabcontent.length; i++) {
		      if(!tabcontent[i].id.includes(tabName)){
		      	tabcontent[i].style.display = "none";
		      	tabcontent[i].style.height = "0px";
		      }
		    }

		    for (i = 0; i < tablinks.length; i++) {
		      tablinks[i].className = tablinks[i].className.replace(" activetab", "");
		    }

		    if (flag == 0){
		      tabregion.style.height = "325px"
		      tabregion.style.overflowY = "scroll";
		      tab.style.display = "flex";
		      tab.style.height = "325px";
		      c.className += " activetab";
		    }
		    else
		    	tabregion.style.height = "0px";
		    	tabregion.style.overflow = "hidden";
		}
	})
}

function initialize(){
	let buttons = document.getElementsByClassName('card-button');
	let navbarButton = document.getElementById('navbar-button')
	let navButtons = document.getElementsByClassName("active-link");
  	let activatingElements = document.getElementsByClassName("activate");
	let IE = /MSIE|Trident/.test(window.navigator.userAgent);

	/* para cambiar las flechitas de expandir/colapasar */
	for (let i = 0; i < buttons.length; i++) {
		buttons[i].innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16"><path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/></svg>';
  		buttons[i].addEventListener("click", function(){
			let state = this.getAttribute("aria-expanded");

			if(state === "true"){
				this.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-up" viewBox="0 0 16 16"><path d="M3.204 11h9.592L8 5.519 3.204 11zm-.753-.659 4.796-5.48a1 1 0 0 1 1.506 0l4.796 5.48c.566.647.106 1.659-.753 1.659H3.204a1 1 0 0 1-.753-1.659z"/></svg>';
			}
			else{
				this.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16"><path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/></svg>';
				}
			}
		)
  	}

  	/* para navegar a cualquier parte que indique la navbar */
  	for (let i = 0; i < navButtons.length - 1; i++) {
  		navButtons[i].addEventListener("keyup", function(event){
  			if (event.keyCode === 13) {
			    // Cancel the default action, if needed
			    event.preventDefault();
  			
	  			let obj = document.getElementById(this.getAttribute("pointer"))
				if (!obj) return;
	  			window.scroll(0, findPos(obj) - 60);

	  			let state = navbarButton.getAttribute("aria-expanded");

				if(state === "true"){
					navbarButton.click();
				}
			}
  		})
	}

	for (let i = 0; i < navButtons.length; i++) {
  		navButtons[i].addEventListener("click", function(event){
	  			let obj = document.getElementById(this.getAttribute("pointer"))
				if (!obj) return;
	  			window.scroll(0, findPos(obj) - 60);

	  			let state = navbarButton.getAttribute("aria-expanded");

				if(state === "true"){
					navbarButton.click();
				}
  		})
	}

  	for (let i = 0; i < activatingElements.length; i++) {
  		let element = activatingElements[i]
  		document.addEventListener('scroll', function (){
	    	if(!element.classList.contains('active-'.concat('15')) && isInViewport(element)){
				element.classList.add('active-'.concat('15'));
				}
			}, {passive: true}
		);
  	}

  	openTabs();

  	
}

function isInViewport(element){
	const rect = element.getBoundingClientRect();
	return (
	    rect.top >= 0 &&
	    rect.left >= 0 &&
	    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
	    rect.right <= (window.innerWidth || document.documentElement.clientWidth)

	 );
}

function findPos(obj){
    let curtop = 0;

    if (obj.offsetParent){
        
        do {
            curtop += obj.offsetTop;
        } while (obj = obj.offsetParent);
    return [curtop];
    }
}

initialize();