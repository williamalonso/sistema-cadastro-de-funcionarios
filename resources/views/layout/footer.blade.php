    <!-- Plugin "Font Awesome" JS --> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js"></script>
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- CDN Google jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Datatable JS -->
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    
    <!-- JQuery Mask -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.8/jquery.mask.js"></script>
    
    <script>
        $(document).ready( function () {
            $('#tabela-principal').DataTable({
                "language": {
                    "lengthMenu": " _MENU_ registros por página",
                    "zeroRecords": "Nada encontrado",
                    "info": "Mostrando página _PAGE_ de _PAGES_",
                    "infoEmpty": "Não há registros disponíveis",
                    "infoFiltered": "(filtrado de um total de _MAX_ registros)",
                    "search": "Pesquisar",
                    "oPaginate": {
                        "sFirst":    "Primero",
                        "sLast":    "Último",
                        "sNext":    "Próximo",
                        "sPrevious": "Anterior"
                    },
                }
            });
            $('.alerta').delay(3000).fadeOut();
            
            $('.sem_numero').bind("keydown", function(e){
                var teclasPermitidas = (e.which >= 65 && e.which <= 90);
                var outrosPermitidos = (",8,9,32,37,38,39,40,46,".indexOf(","+e.which+",") > -1);
                if( teclasPermitidas || outrosPermitidos){
                    return true;
                }else{
                    return false;
                }
            });
            $('.celular').mask('00000-0000');
            $('.telefone').mask('0000-0000');
            $('.cpf').mask('000.000.000-00', {reverse: true});
            $('.cep').mask('00000-000');
            
        } );
    </script>

    <!-- Footer -->
        <footer class="bg-secondary p-3 mt-5" id="rodape">
            <div class="container">
                <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <p class="text-light m-0 text-center pt-1">&copy; Tudo o que quiser colocar aqui</p>
                </div>
                </div>
            </div>
        </footer>
    </body>
</html>