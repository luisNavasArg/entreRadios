  function completar(){
        var xmlhttp=false;
        try {
                xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
			} catch (e) {
                try {
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
					} catch (E) {
                        xmlhttp = false;
                }
			}

        if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
                xmlhttp = new XMLHttpRequest();
		}
        return xmlhttp;
						}
	

	function autocompletar(){
			

		criterio = document.getElementById('criterio').value;
		if(criterio!=''){
		url = "autocompletar.php?criterio="+criterio; 
		completar=completar();		 	
        completar.open("GET", url, true);
        completar.onreadystatechange=function() {
                if (completar.readyState==4) {
                        respuesta = completar.innerHTML = completar.responseText;
                        opciones = document.getElementById('opciones');                        
                        opciones.style.display= 'block';
                        //~ document.getElementById('criterio').style.display='none';
                        //~ document.getElementById('buscar').style.display='none';
                        
                        opciones.innerHTML = respuesta;
                        if(criterio==''){
							criterio.style.display='criterio';
							opciones.style.display='none';
							criterio.style.display='none';
							devolver = document.getElementById('devolver');
							devolver.style.display='block';
							
							
							}
                }
        }
         completar.send(null)	
		
		}else {
		devolver = document.getElementById('devolver');
		devolver.style.display='block';
		}
	}
		
		function reemplazar_criterio(texto){
			

			document.getElementById('criterio').value=texto;
			document.getElementById('opciones').style.display='none'; 
			

	}
