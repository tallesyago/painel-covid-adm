<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.21/af-2.3.5/b-1.6.2/b-colvis-1.6.2/b-flash-1.6.2/b-html5-1.6.2/b-print-1.6.2/cr-1.5.2/fc-3.3.1/fh-3.1.7/kt-2.5.2/rg-1.1.2/rr-1.2.7/sc-2.0.2/sp-1.1.0/sl-1.3.1/datatables.min.css" />

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.21/af-2.3.5/b-1.6.2/b-colvis-1.6.2/b-flash-1.6.2/b-html5-1.6.2/b-print-1.6.2/cr-1.5.2/fc-3.3.1/fh-3.1.7/kt-2.5.2/rg-1.1.2/rr-1.2.7/sc-2.0.2/sp-1.1.0/sl-1.3.1/datatables.min.js"></script>

<script>
    var table;
    $(document).ready(function() {
        table = $('#tableNoticias').DataTable({
            "ajax": "../Ajax/Noticias/getDados",
            "processing": true,
            columns: [{
                    data: "id",
                    visible: false
                },
                {
                    data: "titulo"
                },
                {
                    data: "conteudo",
                },
                {
                    "mRender": function(data, type, row) {
                        return '<a href="" onClick="deletar(' + row.id + ');return false;">Excluir</a>' +
                            ' <a href="" onClick="editar(\'' + row.id + '\' , \'' + row.titulo + '\' , \'' + row.conteudo + '\');return false;">Editar</a>';
                    },
                }
            ],
            dom: 'Bfrtip',
            // buttons: [{
            //         extend: 'print',
            //         title: 'Painel Covid 19 - Relatório de Notícias - emitido em ' + dataAtualFormatada(),
            //         text: '<i class=""></i> imprimir',
            //         exportOptions: {
            //             columns: [1, 2, 3, 4, 5]
            //         }
            //     },
            //     {
            //         extend: 'pdf',
            //         title: 'Painel Covid 19 - Relatório de Casos - emitido em ' + dataAtualFormatada(),
            //         text: '<i class=""></i> pdf',
            //         exportOptions: {
            //             columns: [1, 2, 3, 4, 5]
            //         }
            //     },
            //     {
            //         extend: 'excel',
            //         title: 'Painel Covid 19 - Relatório de Casos - emitido em ' + dataAtualFormatada(),
            //         text: '<i class=""></i> excel',
            //         exportOptions: {
            //             columns: [1, 2, 3, 4, 5]
            //         }
            //     }
            // ],
            responsive: true,
            "oLanguage": {
                "sSearch": "Pesquisa"
            },
            "language": {
                "paginate": {
                    "previous": "Anterior",
                    "next": "Próxima"
                },
                "processing": "Carregando...",
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "Desculpe, nada encontrado",
                "info": "Página _PAGE_ de _PAGES_",
                "infoEmpty": "Sem registros disponíveis",
                "infoFiltered": "(filtrado de _MAX_ total registros)"
            }


        });
    });
</script>

<div class="container">
    <h1>Notícias</h1>

    <table class="table" id="tableNoticias">
        <thead>
            <tr>
                <th>id</th>
                <th>titulo</th>
                <th>conteudo</th>
                <th>ações</th>
            </tr>
        </thead>
    </table>
</div>

<script>
    //cadastro e edição
    $(document).ready(function() {
        $('#btn').click(function() {
            var dados = $('#form').serializeArray();
            $.ajax({
                type: "POST",
                url: "/noticias/storeDt",
                data: dados,
                success: function(result) {
                    $('#form').trigger("reset");
                    table.ajax.reload();
                    $('#id').val(null);
                }
            });
            return false;
        });
    });

    //modal de edição
    function editar(id, titulo, conteudo) {
        $('#id').val(id);
        $('#titulo').val(titulo);
        $('#conteudo').val(conteudo);
    }

    //deleção
    function deletar(id) {
        $.ajax({
            type: "DELETE",
            url: "../noticias/deleteDt/" + id,
            success: function(result) {
                table.ajax.reload();
            }
        });
    }
</script>
<div>
    <!-- Atualizar nome da cabeça de acordo com o botão que o cara clicar -->
    <h1 id="cabeca">Criar/Atualizar</h1>
    <form id="form" method="post">
        <input type="hidden" id="id" name="id">
        <input type="text" class="form-control" name="titulo" id="titulo" placeholder="titulo">
        <textarea class=" form-control" name="conteudo" id="conteudo" placeholder="conteudo"></textarea>
        <input type="submit" name="submit" value="Salvar" id="btn" class="btn btn-primary">
    </form>

</div>