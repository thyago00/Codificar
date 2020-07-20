$(document).on("click", "#deletar", function(e){
    e.preventDefault();
    var link = $(this).attr('href');

    swal({
        title: "Você tem certeza?",
        text: "Este orçamento será deletado",
        type: "warning",
        showCancelButton: true, 
        confirmButtonText: "Ok",
        cancelButtonText: "Cancelar"
    },
    function(){
        window.location.href = link;
    });
});