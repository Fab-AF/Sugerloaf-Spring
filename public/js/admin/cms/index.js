var Index = function(){

	var getCmsList = function() {
		var data = [];
		//data['type'] = $("#custome-assign-type").val();

		var usersLitData = $('#cms-tbl').DataTable({
			"aoColumnDefs": [
				{ "bSortable": false, "aTargets": [3] },
			],
			"serverSide": true,
			"bLengthChange": false,
			"processing": true,
			"pageLength": 10,
			"ordering":true,
			"order": [[0, 'asc']],
			"searching":true,
			"destroy": true,
			"ajax": {
				"url": route("cms.data"),
				"type": "POST",
				"data": data,
				"dataSrc": function (json) {
					return json.data;
				}
            },
			"columns": [
				{ "data": "title"},
				{ "data": "slug"},
				{ "data": "status", "render":function(data, type, row) {
						if(row['status'] == '1') {
							return '<span class="badge badge-success">Published</span>';
						}
						else {
							return '<span class="badge badge-danger">Blocked</span>';
						}
					}
				},
				{ "data": "id", "render":function(data, type, row) {						
						var actionRow = "";						
						actionRow += '<a href="'+route("public.editor.view")+'?type=page&page='+row["id"]+'" title="Edit"><i class="fas fa-edit" title="Edit"></i></a>&nbsp;&nbsp;&nbsp;';

						actionRow += '<a href="javascript:void(0);" title="View"><i class="fas fa-eye"></i></a>&nbsp;&nbsp;&nbsp;';
						
						if(row['is_deletable'] == '1'){
							actionRow += '<a href="javascript:void(0);" onClick="Index.deleteCms('+row['id']+')" title="Delete" class="delete-confirmation-button"><i class="fas fa-trash-alt" title="Delete"></i></a>';
						}

						return actionRow;
					}
				},				
			]
		});
	}

	var deleteCms = function(deleteid)
	{
		Swal.fire({title: 'Are you sure?', text: "You want to delete this page?", icon: 'warning', showCancelButton: true, confirmButtonColor: '#3085d6', cancelButtonColor: '#d33', confirmButtonText: 'Yes, delete it!'}).then((result) => {
		  if (result.isConfirmed) {
			 var data = {};
				data['_method'] = "delete";
				$.ajax({
					url: route("cms.delete", deleteid),
					type: "POST",
					data: data,
					success: function(r) {
						if($.trim(r)) {
							Swal.fire('Deleted!','CMS Page has been deleted successfully!','success');
							getCmsList();
						}
					}
				});
		  }
		});
	}

	return{
		init:function(){
			getCmsList();
		},
		deleteCms,
		getCmsList
	}
}();

// Initialize when page loads
$(function() {
	Index.init();
});