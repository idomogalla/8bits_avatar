// Definición de variables
var canvas = null; contexto = null, miAvatar = new Array();
window.addEventListener('load', carga, false);

function carga(){
	canvas = document.getElementById('miCanvas');
    contexto = canvas.getContext('2d');

    for(var i = 0; i < 9; i++)
        miAvatar[i] = null;    
}

function setImagen(parte, archivo){
    switch(parte){
    	case 0:
    		miAvatar[0] = archivo;
    		break;
    	case 1:
    		miAvatar[1] = archivo;
    		break;
    	case 2:
    		miAvatar[2] = archivo;
    		break;
    	case 3:
    		miAvatar[3] = archivo;
    		break;
    	case 4:
    		miAvatar[4] = archivo;
    		break;
    	case 5:
    		miAvatar[5] = archivo;
    		break;
    	case 6:
    		miAvatar[6] = archivo;
    		break;
		case 7:
    		miAvatar[7] = archivo;
    		break;    		
        case 8:
            miAvatar[8] = archivo;
            break;               
    }
    contexto.clearRect (0 ,0 ,canvas.width, canvas.height);
    dibujar();
}

function dibujar(){	
	for(var i = 0; i < 9; i++){
		if(miAvatar[i]){
			var miImagen = new Image();
            miImagen.src = miAvatar[i];
	        miImagen.onload = (function (j) {
	        		return function(){
	            		contexto.drawImage(this, 0, 0);
	            	};
	        	})(miImagen);
		}
	}
}

function borrar(){
	for(var i = 0; i < 9; i++)
		miAvatar[i] = null;

    canvas.height = canvas.height;
}

function guardar(nombre){
	var cs = new CanvasSaver('./saveme.php')
	cs.savePNG(canvas, nombre);
}
function guardar(a){(new CanvasSaver("./saveme.php")).savePNG(canvas,a)};