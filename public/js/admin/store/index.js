var Index = function(){

	var getStoreList = function() {
		var data = [];
		var ServiceListData = $('#stores-tbl').DataTable({
			"aoColumnDefs": [
				{ "bSortable": false, "aTargets": [6] },
			],
			"serverSide": true,
			"bLengthChange": false,
			"processing": true,
			"pageLength": 10,
			"ordering":true,
			"order": [[0, 'desc']],
			"searching":true,
			"destroy": true,
			"ajax": {
				"url": route("store.data"),
				"type": "POST",
				"data": data,
				"dataSrc": function (json) {
					return json.data;
				}
            },
			"columns": [				
				{ "data": "name"},
				{ "data": "address"},				
				{ "data": "available_products", "render":function(data, type, row) {
						if(row['available_products'] !== null){
							return '<span class="badge badge-info">'+row['available_products']+'</span>';
						}
						return '-';
					}
				},
				{ "data": "phone"},
				{ "data": "email"},		
				{ "data": "status", "render":function(data, type, row) {
						if(row['status'] == '1') {
							return '<span class="badge badge-success">Active</span>';
						}
						else {
							return '<span class="badge badge-danger">Inactive</span>';
						}
					}
				},
				{ "data": "id", "render":function(data, type, row) {
						var actionRow = "";	
						actionRow += '<a href="'+route("store.edit", row['id'])+'" title="Edit"><i class="fas fa-edit" title="Edit"></i></a>&nbsp;&nbsp;&nbsp;';
						actionRow += '<a href="javascript:void(0);" onClick="Index.deleteStore('+row['id']+')" title="Delete" class="delete-confirmation-button"><i class="fas fa-trash-alt" title="Delete"></i></a>';
						return actionRow;
					}
				},				
			]
		});
	}

	var deleteStore = function(deleteid)
	{
		Swal.fire({title: 'Are you sure?', text: "You want to delete this store?", icon: 'warning', showCancelButton: true, confirmButtonColor: '#3085d6', cancelButtonColor: '#d33', confirmButtonText: 'Yes, delete it!'}).then((result) => {
		  if (result.isConfirmed) {
			 var data = {};
				data['_method'] = "delete";
				$.ajax({
					url: route("store.delete", deleteid),
					type: "POST",
					data: data,
					success: function(r) {
						if($.trim(r)) {
							Swal.fire('Deleted!','The store has been deleted successfully!','success');
							getStoreList();
						}
					}
				});
		  }
		});
	}

	return{
		init:function(){
			getStoreList();
		},
		deleteStore
	}
}();

// Initialize when page loads
$(function() {
	 Index.init();
});