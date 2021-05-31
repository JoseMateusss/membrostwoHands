// Call the dataTables jQuery plugin
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
