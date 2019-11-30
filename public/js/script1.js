$(document).ready(function() {
	 $(".btn-danger").click(function(e){
	 	alert("hola");
        e.preventDefault();
        if (!confirm("¿Está seguro de eliminar?")) {
            return false;
        }
});