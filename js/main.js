// Header Scroll
let nav = document.querySelector(".navbar");
window.onscroll = function () {
    if(document.documentElement.scrollTop > 20){
        nav.classList.add("header-scrolled");
    }else{
        nav.classList.remove("header-scrolled");
    }
} 

// nav hide 
let navBar = document.querySelectorAll(".nav-link");
let navCollapse = document.querySelector(".navbar-collapse.collapse");
navBar.forEach(function (a){
    a.addEventListener("click", function(){
        navCollapse.classList.remove("show");
    })
})
 

function imgSlider(anything){
    document.querySelector('.startbucks').src = anything;
}
var yname = ['Student','Developer','Engineer','Business','Poor Man','Marial'];
var i = 0;
		function name1()
		{
			var object = document.getElementById("name");
			object.innerText = yname[i]; 
			i++;
			if(i == yname.length)
			{
				i=0;
			}

		}
		window.setInterval(name1,1000);

// var i = 0,text;
// text = "student";
// function typing(){
// 	if(i<text.length){
// 		document.getElementById("name").innerHTML += text.charAt(i);
// 		i++;
// 		setTimeout(typing,5);
// 	}
// }
// typing();
