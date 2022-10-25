function validar(){
    
    var nombre, apellido, email, usuario,pass, expresion;
    nombre = document.getElementById("nombre").value;
    apellido = document.getElementById("apellido").value;
    email = document.getElementById("email").value;
    usuario = document.getElementById("usuario").value;
    pass = document.getElementById("password").value;
    expresion = /\w+@\w+\.+[a-z]/;

    if (nombre === "" || apellido === "" || email === "" || usuario === ""|| pass === ""){
        alert("Todos los campos son obligatorios");
        return false;
    }
    else if (nombre.length>30){
        alert("El nombre es muy largo");
        return false;
    }
    else if (apellido.length>80){
        alert("El apellido es muy largo");
        return false;
    }
    else if (email.length>100){
        alert("El correo es muy largo");
        return false;
    }
    else if (!expresion.test(email)){
        alert("El correo no es válido");
        return false;
    }
    else if (usuario.length>20){
        alert("El usuario debe tener 20 carácteres como máximo");
        return false;
    }

}
