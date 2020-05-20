<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Casos</h1>
    </div>
    <div class="table-responsive">
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
</main>

<div style="display:none">
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
                        columns: [1, 2, 3, 4, 5]
                    }
                },
                {
                    extend: 'pdf',
                    title: 'Painel Covid 19 - Relatório de Casos - emitido em ' + dataAtualFormatada(),
                    text: '<i class=""></i> pdf',
                    exportOptions: {
                        columns: [1, 2, 3, 4, 5]
                    }
                },
                {
                    extend: 'excel',
                    title: 'Painel Covid 19 - Relatório de Casos - emitido em ' + dataAtualFormatada(),
                    text: '<i class=""></i> excel',
                    exportOptions: {
                        columns: [1, 2, 3, 4, 5]
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