<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.21/af-2.3.5/b-1.6.2/b-colvis-1.6.2/b-flash-1.6.2/b-html5-1.6.2/b-print-1.6.2/cr-1.5.2/fc-3.3.1/fh-3.1.7/kt-2.5.2/rg-1.1.2/rr-1.2.7/sc-2.0.2/sp-1.1.0/sl-1.3.1/datatables.min.css" />

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.21/af-2.3.5/b-1.6.2/b-colvis-1.6.2/b-flash-1.6.2/b-html5-1.6.2/b-print-1.6.2/cr-1.5.2/fc-3.3.1/fh-3.1.7/kt-2.5.2/rg-1.1.2/rr-1.2.7/sc-2.0.2/sp-1.1.0/sl-1.3.1/datatables.min.js"></script>

<script>
    var table;
    $(document).ready(function() {
        table = $('#tableCasos').DataTable({
            "ajax": "../Ajax/Casos/getDados",
            "processing": true,
            columns: [{
                    data: "id",
                    visible: false
                },
                {
                    data: "confirmados"
                },
                {
                    data: "suspeitos",
                },
                {
                    data: "descartados",
                },
                {
                    data: "recuperados",
                },
                {
                    data: "obitos",
                },
                {
                    "mRender": function(data, type, row) {
                        return '<a href="" onClick="deletar(' + row.id + ');return false;">Excluir</a>' +
                            ' <a href="" onClick="editar(\'' + row.id + '\' , \'' + row.confirmados + '\' , \'' + row.suspeitos + '\', \'' + row.descartados + '\' , \'' + row.obitos + '\' , \'' + row.recuperados + '\');return false;">Editar</a>';
                    },
                }
            ],
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ],
            buttons: [{
                    extend: 'print',
                    title: 'Painel Covid 19 - Relatório de Casos - emitido em ' + dataAtualFormatada(),
                    text: '<i class=""></i> imprimir',
                    exportOptions: {
                        columns: [1,2,3,4,5]
                    }
                },
                {
                    extend: 'pdf',
                    title: 'Painel Covid 19 - Relatório de Casos - emitido em ' + dataAtualFormatada(),
                    text: '<i class=""></i> pdf',
                    exportOptions: {
                        columns: [1,2,3,4,5]
                    }
                },
                {
                    extend: 'excel',
                    title: 'Painel Covid 19 - Relatório de Casos - emitido em ' + dataAtualFormatada(),
                    text: '<i class=""></i> excel',
                    exportOptions: {
                        columns: [1,2,3,4,5]
                    }
                }
            ],
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
    <h1>Casos</h1>

    <table class="table" id="tableCasos">
        <thead>
            <tr>
                <th>id</th>
                <th>confirmados</th>
                <th>suspeitos</th>
                <th>descartados</th>
                <th>recuperados</th>
                <th>obitos</th>
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
                url: "/casos/storeDt",
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
    function editar(id, confirmados, suspeitos, descartados, obitos, recuperados) {
        $('#id').val(id);
        $('#confirmados').val(confirmados);
        $('#suspeitos').val(suspeitos);
        $('#obitos').val(obitos);
        $('#recuperados').val(recuperados);
        $('#descartados').val(descartados);


    }

    //deleção
    function deletar(id) {
        $.ajax({
            type: "DELETE",
            url: "../casos/deleteDt/" + id,
            success: function(result) {
                table.ajax.reload();
            }
        });
    }

    function dataAtualFormatada() {
        var data = new Date(),
            dia = data.getDate().toString().padStart(2, '0'),
            mes = (data.getMonth() + 1).toString().padStart(2, '0'), //+1 pois no getMonth Janeiro começa com zero.
            ano = data.getFullYear();
        time = data.getHours() + "h" + data.getMinutes() + "min";
        return " " + dia + "-" + mes + "-" + ano + " " + time;
    }
</script>
<div>
    <!-- Atualizar nome da cabeça de acordo com o botão que o cara clicar -->
    <h1 id="cabeca">Criar/Atualizar</h1>
    <form id="form" method="post">
        <input type="hidden" id="id" name="id">
        <input type="text" class="form-control" name="confirmados" id="confirmados" placeholder="confirmados">
        <input type="text" class="form-control" name="suspeitos" id="suspeitos" placeholder="suspeitos">
        <input type="text" class="form-control" name="descartados" id="descartados" placeholder="descartados">
        <input type="text" class="form-control" name="recuperados" id="recuperados" placeholder="recuperados">
        <input type="text" class="form-control" name="obitos" id="obitos" placeholder="obitos">
        <input type="submit" name="submit" value="Salvar" id="btn" class="btn btn-primary">
    </form>

</div>