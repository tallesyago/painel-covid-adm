<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Notícias</h1>
        <button type="button" class="btn btn-primary" data-toggle="modal" onclick="modalCad()">
            Cadastrar noticia
        </button>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-bordered" style="width: 100%" id="tableNoticias">
            <thead>
                <tr>
                    <th>id</th>
                    <th>titulo</th>
                    <th>conteudo</th>
                    <th style="width: 20%">ações</th>
                </tr>
            </thead>
        </table>
    </div>
    <br /><br />
</main>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form" method="post">
                    <input type="hidden" id="id" name="id">
                    <input type="text" class="form-control" name="titulo" id="titulo" placeholder="titulo">
                    <textarea class=" form-control" name="conteudo" id="conteudo" placeholder="conteudo"></textarea>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" id="btn">Salvar</button>
            </div>
        </div>
    </div>
</div>
<script src="../assets/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
<script src="../assets/dashboard.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.21/b-1.6.2/b-html5-1.6.2/b-print-1.6.2/cr-1.5.2/r-2.2.5/datatables.min.js"></script>
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
                    "mData": null,
                    "mRender": function(data, type, row) {
                        return '<div class="btn-group" role="group" aria-label="Basic example"><a href="" class="btn btn btn-outline-dark" onClick="editar(\'' + row.id + '\' , \'' + row.titulo + '\' , \'' + row.conteudo + '\');return false;">Editar</a>' +
                            ' <a href="" class="btn btn-outline-danger" onClick="deletar(' + row.id + ');return false;">Excluir</a></div>';
                    },
                }
            ],
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'print',
                    title: 'Painel Covid 19 - Relatório de Notícias - emitido em ' + dataAtualFormatada(),
                    text: '<i class="print"></i> impressão',
                    exportOptions: {
                        columns: [1, 2]
                    }
                },
                {
                    extend: 'pdf',
                    title: 'Painel Covid 19 - Relatório de Casos - emitido em ' + dataAtualFormatada(),
                    text: '<i class=""></i> pdf',
                    exportOptions: {
                        columns: [1, 2]
                    }
                },
                {
                    extend: 'excel',
                    title: 'Painel Covid 19 - Relatório de Casos - emitido em ' + dataAtualFormatada(),
                    text: '<i class=""></i> excel',
                    exportOptions: {
                        columns: [1, 2]
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
<script>
    //evitar edições incompletas, reseta todos os campos
    $('#exampleModal').on('hidden.bs.modal', function(e) {
        $(this)
            .find("input,textarea,select")
            .val('')
            .end()
            .find("input[type=checkbox], input[type=radio]")
            .prop("checked", "")
            .end();
    })
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
                    $('#id').val("");
                    $('#exampleModal').modal('hide')
                }
            });
            return false;
        });
    });
    //modal de edição
    function editar(id, titulo, conteudo) {
        modalEd();
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

    function dataAtualFormatada() {
        var data = new Date(),
            dia = data.getDate().toString().padStart(2, '0'),
            mes = (data.getMonth() + 1).toString().padStart(2, '0'), //+1 pois no getMonth Janeiro começa com zero.
            ano = data.getFullYear();
        time = data.getHours() + "h" + data.getMinutes() + "min";
        return " " + dia + "-" + mes + "-" + ano + " " + time;
    }

    function modalEd() {
        $('#exampleModalLabel').text('Editar notícia');
        $('#exampleModal').modal('show')
    }

    function modalCad() {
        $('#exampleModalLabel').text('Cadastrar notícia');
        $('#exampleModal').modal('show')
    }
</script>