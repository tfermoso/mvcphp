$(document).ready(function () {
    $(".btnEliminar").click(function (e) {
        var id = e.currentTarget.id.substr(4);
        $.ajax({
            url: window.location.origin +"/juego/ajax/eliminar", 
            data: "id=" +id, method: 'post', 
            success: function (datos) {
                
                alert("Usuario eliminado correctamente");
                window.location.reload();
            },
            error: function (err) {
                console.log(err);
            }
        });
    })
})