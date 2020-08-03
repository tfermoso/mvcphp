$(document).ready(function () {
    $(".btnEl").click(function (e) {
        var id = e.currentTarget.id.substr(4);
        $.ajax({
            url: window.location.origin +"/librosExamen/ajax/eliminar", 
            data: "id=" +id, method: 'post', 
            success: function (datos) {
                
                alert("Libro eliminado");
                window.location.reload();
            },
            error: function (err) {
                console.log(err);
            }
        });
    })
})