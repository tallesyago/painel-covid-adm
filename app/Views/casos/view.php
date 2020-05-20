<!doctype html>
<html lang="pt_BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Painel COVID</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.21/af-2.3.5/b-1.6.2/b-colvis-1.6.2/b-flash-1.6.2/b-html5-1.6.2/b-print-1.6.2/cr-1.5.2/fc-3.3.1/fh-3.1.7/kt-2.5.2/rg-1.1.2/rr-1.2.7/sc-2.0.2/sp-1.1.0/sl-1.3.1/datatables.min.css" />

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="../assets/dashboard.css" rel="stylesheet">
</head>

<body>

    <!-- header -->
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Painel COVID</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <!-- sidebar -->
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="sidebar-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="home"></span>
                                Início <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <span data-feather="bar-chart-2"></span>
                                Casos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/noticias">
                                <span data-feather="book-open"></span>
                                Notícias
                            </a>
                        </li>
                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Meus dados</span>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="user"></span>
                                Perfil
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="log-out"></span>
                                Sair
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- conteudo -->
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
        </div>
    </div>

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


    <!-- <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script> -->
    <script src="../assets/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script src="../assets/dashboard.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.21/af-2.3.5/b-1.6.2/b-colvis-1.6.2/b-flash-1.6.2/b-html5-1.6.2/b-print-1.6.2/cr-1.5.2/fc-3.3.1/fh-3.1.7/kt-2.5.2/rg-1.1.2/rr-1.2.7/sc-2.0.2/sp-1.1.0/sl-1.3.1/datatables.min.js"></script>

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
</body>

</html>