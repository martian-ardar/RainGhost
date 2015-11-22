$(function()
{
	function setBottons()
	{
		var btnAddUser = $('#addUser')
		btnAddUser.linkbutton(
		{
			iconCls : 'icon-search',
		});
		var btnEditUser = $('#editUser')
		btnEditUser.linkbutton(
		{
			iconCls : 'icon-search',
		});
		var btnRemoveUser = $('#removeUser')
		btnRemoveUser.linkbutton(
		{
			iconCls : 'icon-search',
		});
	}

	function setDatagrids()
	{
		var dgUsers = $('#dgUser')
		dgUsers.datagrid(
		{
			url: '/getqdata/',
			//queryParams: queryParams,
			//width: 1900,
			toolbar: '#viewBox',
			method: 'get',
			rownumbers: true,
			singleSelect: true,
			pagination: true,
			pageSize: 30,
			pageList: [20, 30, 60, 100, 200],

			columns:
			[[
				{
					field: 'question_text',
					align: 'center',
					title: '<strong>Question</strong>',
					width: 55
				},
				{
					field: 'pub_date',
					align: 'center',
					title: '<strong>Publish Date</strong>',
					width: 55
				}
			]]
		})
		//kwd.datagrid('enableFilter')
	}

	setBottons();
	setDatagrids();
})
