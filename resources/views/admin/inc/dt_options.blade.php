//responsive: true,
processing: true,
serverSide: true,
"autoWidth": false,
"lengthMenu": [ [{{ config('global.dataTablePagesize') }}], [{{ config('global.dataTablePagesize') }}] ],
"pageLength": '{{ config('global.pagesize') }}',
aaSorting: [[0, 'asc']],