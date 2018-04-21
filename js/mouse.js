                function onOver(obj){
	   document.getElementById(obj).style.backgroundColor="#1f2023";
       document.getElementById(obj).style.color="Darkgray"; 
    }


    function onOut(obj){
        
	   document.getElementById(obj).style.backgroundColor="#222427";
    document.getElementById(obj).style.color= "white";
        
    }

function onOverpic(obj){
	   document.getElementById(obj).style.backgroundColor="#1f2023";
       document.getElementById(obj).style.color="Darkgray"; 
        var srcschool;
          switch(obj){  
            case "school1": srcschool="../photo/logo/school1.png"; break;
            case "school2": srcschool="../photo/logo/school1.png"; break;
            case "school3": srcschool="../photo/logo/school2.jpg"; break;
            case "school4": srcschool="../photo/logo/school3.png"; break;
            case "kmitl": srcschool="../photo/logo/kmitl.png"; break;
            case "ite": srcschool="../photo/logo/ite.png"; break;
            }
        document.getElementById("school").src=srcschool;   
    }
    function onOutpic(obj){
	   document.getElementById(obj).style.backgroundColor="#222427";
    document.getElementById(obj).style.color= "white";
        document.getElementById("school").src="";
        document.getElementById("ite").src="";
    }






function onOffbar() {
    var x = document.getElementById("floatingMenu");
    if (x.style.display === "none") {
        x.style.display = "block";
        document.getElementById("textCloseFloating").innerHTML="Close";
    } else {
        x.style.display = "none";
         document.innerHTML = "Hello";
        document.getElementById("textCloseFloating").innerHTML="Open";
    }
}
       