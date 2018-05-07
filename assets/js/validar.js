function validarRegistro() {

	var nombre;
	var apellido;
	var usuario;
	var contrasena;	


      nombre = document.getElementById("nombre").value;
      apellido = document.getElementById("apellido").value;
	  usuario = document.getElementById("usuario").value;
	  contrasena = document.getElementById("contrasena").value;


		if ( nombre=="" || apellido=="" || usuario=="" || contrasena=="" ) {

			 alert("No pueden estar vacios los campos");

			return false;

		}else{
	

			if ( isNaN(contrasena)) {
                alert("Solo Numeros");
				return false;		

		}else{

		alert("Registrado correctamente");


		}

		 
	}



	}

				





