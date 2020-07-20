$(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#tabelaOrcamentos tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="&#xF002; Procurar" style="font-family:Arial, FontAwesome" />');
    } );
 
    // DataTable
    var table = $('#tabelaOrcamentos').DataTable({
        responsive: true,
        "oLanguage":{
                "sUrl" : "br.txt"
            },
        initComplete: function () {
            // Apply the search
            this.api().columns().every( function () {
                var that = this;
 
                $( 'input', this.footer() ).on( 'keyup change clear', function () {
                    if ( that.search() !== this.value ) {
                        that
                            .search( this.value )
                            .draw();
                    }
                } );
            } );
        }
    });
 
} );
