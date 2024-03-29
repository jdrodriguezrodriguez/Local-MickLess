//OVERLAY PARA ACCESO
document.getElementById("menu-trigger").addEventListener("click", function(event) {
    event.preventDefault(); 
    document.getElementById("overlay").style.display = "block"; 
    document.getElementById("menu").style.display = "block"; 
});


document.getElementById("overlay").addEventListener("click", function() {
    document.getElementById("overlay").style.display = "none"; 
    document.getElementById("menu").style.display = "none"; 
});


//OVERLAY PARA REGISTRO
document.getElementById("menu-trigger-registro").addEventListener("click", function(event) {
    event.preventDefault(); 
    document.getElementById("overlay-registro").style.display = "block"; 
    document.getElementById("menu-registro").style.display = "block"; 
});
                    //OCULAR EL ACCESO AL INTERACTUAR CON EL REGISTRO
document.getElementById("menu-trigger-registro").addEventListener("click", function() {
    document.getElementById("overlay").style.display = "none"; 
    document.getElementById("menu").style.display = "none"; 
});

document.getElementById("overlay-registro").addEventListener("click", function() {
    document.getElementById("overlay-registro").style.display = "none"; 
    document.getElementById("menu-registro").style.display = "none"; 
});