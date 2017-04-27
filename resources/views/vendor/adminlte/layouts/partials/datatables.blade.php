<script src="{{ asset('/plugins/jQuery/jquery-2.2.3.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/plugins/datatables/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/plugins/datatables/Buttons-1.2.4/js/dataTables.buttons.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/plugins/datatables/Buttons-1.2.4/js/buttons.flash.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/plugins/datatables/Buttons-1.2.4/js/buttons.html5.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/plugins/datatables/Buttons-1.2.4/js/buttons.print.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/plugins/datatables/pdfmake-0.1.18/build/pdfmake.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/plugins/datatables/pdfmake-0.1.18/build/vfs_fonts.js') }}" type="text/javascript"></script>
<script src="{{ asset('/plugins/datatables/Buttons-1.2.4/js/buttons.flash.min.js') }}" type="text/javascript"></script>
<script>
jQuery( document ).ready(function( $ ) {
    $('#table').DataTable({
      dom: 'Bfrtip',
      language: {
            buttons: {
                copyTitle: 'Añadido al portapapeles',
                copyKeys: 'Pulse <i> Ctrl </ i> o <i> \ u2318 </ i> + <i> C </ i> para copiar datos de la tabla en el portapapeles. <br> cancelar, haga clic en este mensaje o pulse Esc',
                copySuccess: {
                    _: 'Copiados %d registros',
                    1: 'Copiado 1 registro'
                }
        },
        decimal: ",",
        thousands: ".",
        sProcessing:     "Procesando...",
        sLengthMenu:     "Mostrar _MENU_ registros",
        sZeroRecords:    "No se encontraron resultados",
        sEmptyTable:     "NingÃºn dato disponible en esta tabla",
        sInfo:           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        sInfoEmpty:      "Mostrando registros del 0 al 0 de un total de 0 registros",
        sInfoFiltered:   "(filtrado de un total de _MAX_ registros)",
        sInfoPostFix:    "",
        sSearch:         "Buscar:",
        sUrl:            "",
        sInfoThousands:  ".",
        sLoadingRecords: "Cargando...",
        oPaginate: {
            sFirst:    "Primero",
            sLast:     "Último",
            sNext:     "Siguiente",
            sPrevious: "Anterior"
            },
        oAria: {
            sSortAscending:  ": Activar para ordenar la columna de manera ascendente",
            sSortDescending: ": Activar para ordenar la columna de manera descendente"
            }
        },
      lengthMenu: [
            [ 10, 25, 50, -1 ],
            [ '10 Filas', '25 Filas', '50 Filas', 'Ver Todo' ]
            ],

      buttons: [
            {extend: 'pageLength', text: '<i class="fa fa-eye"></i>', titleAttr:'Mostrar'}, 
            {extend: 'copy', text: '<i class="fa fa-files-o"></i>', titleAttr:'Copiar Registros'}, 
            {extend: 'excel', text: '<i class="fa fa-file-excel-o"></i>', titleAttr:'Exportar a Excel'}, 
            {extend: 'pdf', text: '<i class="fa fa-file-pdf-o"></i>',titleAttr:'Exportar a PDF'}, 
            {extend: 'print', text: '<i class="fa fa-print"></i>',titleAttr:'Imprimir'}
        ]
    });
});
// Code that uses other library's $ can follow here.
</script>