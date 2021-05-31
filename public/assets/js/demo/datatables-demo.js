// Call the dataTables jQuery plugin
$(document).ready( function () {
  $('#dataTable').DataTable({
      ajax: {
          url: 'http://127.0.0.1:8000/dataapi',
          type: 'get',
          datatype: 'json',

      },
      columns: [
          {'data': 'id'},
          {'data': 'name'},
          {'data': 'email'},
          {'data': 'options'},
      ]
  });
} );
