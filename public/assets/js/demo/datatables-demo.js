// Call the dataTables jQuery plugin
function testeclick(id){
    //console.log(id);
    swal({
            title: "Tem certeza?",
            text: "Uma vez excluído, você não poderá recuperar este usuário!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type:'DELETE',
                    url:'http://127.0.0.1:8000/users/'+id,
                    context: this,
                    success: function (response){

                        linhas = $('#dataTable>tbody>tr');
                        e = linhas.filter( function (i, elemento){
                             return elemento.cells[0].textContent == id;
                        });
                        if(e)
                            e.remove();
                        swal("Puf! O usuário foi deletado com sucesso!", {
                            icon: "success",
                        });                                    
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        swal("Opsss...", "Você não pode completar essa ação, pois está logado com esse usuário", "error");
                    }

                    
                });
                
            } else {
                swal("O usuário não foi deletado!");
            }
        });
};


$(document).ready( function () {
  $('#dataTable').DataTable({
      ajax: {
          url: 'http://127.0.0.1:8000/dataapi',
          type: 'get',
          datatype: 'json',
        },
        buttons: [

            {
                extend: 'print',
                text: '<i class="fa fa-print"></i>',
                className: 'btn btn-default',
            }
        ],
      "language":{
            "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Portuguese-Brasil.json"
      },  
      columns: [
          {'data': 'id'},
          {'data': 'name'},
          {'data': 'email'},
          {'data': 'options'},
      ]
  });
} );


