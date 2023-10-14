function despliegue(elemento){
	var desplegar = document.getElementById(elemento);
	if (desplegar.className === "cerrado") {
		desplegar.className = "abierto";
	}
	else{
		desplegar.className = "cerrado";
	}
}

   function menufun(){
   var listamenuh = document.getElementById('listamenu');
	if (listamenuh.className === "cerrado") {
		listamenuh.className = "abierto";
	}
	else{
		listamenuh.className = "cerrado";
	}
}


function cerrarx (){
	var cerradoo = document.getElementById('listamenu');
		if (cerradoo.className === "abierto") {
		cerradoo.className = "cerrado";
	}
	else{
		cerradoo.className = "abierto";
	}
  
}


//alert("para poder iniciar ");




function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
