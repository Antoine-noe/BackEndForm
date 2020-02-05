
var mDPSaisi2=document.querySelector("#pwd2");
var voir2=document.querySelector("#voir2");

function voirMDP()

{

    mDPSaisi2.type="text";
}
function cacherMDP()
{

    mDPSaisi2.type="password";
}

voir2.addEventListener('mousedown', voirMDP);
voir2.addEventListener('mouseup', cacherMDP);



