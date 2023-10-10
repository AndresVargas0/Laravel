function datos(){
    var username = document.getElementById("username").value;
    if(username==""){
        alert ("Porfavor Ingrese un Nombre de Usuario");
        document.getElementById("username").focus();
    }
    else{
        console.log(username+" ");
        document.getElementById("username").value="";
    }
}