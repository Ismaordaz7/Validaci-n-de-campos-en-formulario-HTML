function validaPass(){
    var p1=document.getElementById("pass").value
    var p2=document.getElementById("pass2").value
    if(p1!==p2){
        alert=("Las contraseñas no coinciden.Verifica tu contraseña");
        return false;//Evita que el formulario se envie mientras la contrasela es incorrecta

    }
    return true;//permite que el formulario se enve si la contraseña coinciden
}