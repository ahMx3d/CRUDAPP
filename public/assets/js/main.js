$(document).ready(function() {
	// Show User Details.
	$('body').on('click', '.info-btn', function(e) {
		// Prevent Default.
		e.preventDefault();
		// Assign User ID Variable.
		infoID = $(this).attr('id');
		// Assign User Controller Method.
		controller = window.location.pathname + 'users/show';

		// AJAX Requset.
		$.ajax({
			url: controller,
			type: 'POST',
			data: {
				infoID: infoID
			},
			success: function(response) {
				// Parse JSON Data.
				data = JSON.parse(response);

				// Sweet Alert Info Modal.
				Swal.fire({
					title: '<strong class="text-info">User Info</strong>',
					icon: 'info',
					html:
						'<b>User ID: </b><span>'+data.id+'</span><br />' +
						'<b>First Name: </b><span>'+data.first_name+'</span><br />' +
						'<b>Last Name: </b><span>'+data.last_name+'</span><br />' +
						'<b>User Email: </b><span>'+data.email+'</span><br />' +
						'<b>Phone Number: </b><span>'+data.phone+'</span><br />',
					showCloseButton: true
				});
			}
		});
	});

	// Delete AJAX Request.
	$('body').on('click', '.del-btn', function(e) {
		// Prevent Refresh.
		e.preventDefault();

		// Assign Variables.
		tr = $(this).closest('tr'); // User Row.
		delID = $(this).attr('id'); // User ID.

		// Sweet Alert Message.
		Swal.fire({
			title: 'Are you sure?',
			text: "You won't be able to revert this!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#d33',
			cancelButtonColor: '#3085d6',
			confirmButtonText: 'Yes, delete it!'
		}).then((result) => {
			if (result.value) {
				// Assign Controller Method.
				controller = window.location.pathname + 'users/del';

				// AJAX Request.
				$.ajax({
					url: controller,
					type: 'POST',
					data: {
						delID: delID
					},
					success: function(response) {
						// Danger Deleted Row.
						tr.css('background-color', '#ff6666');
						// Sweet Alert Message.
						swal.fire('Deleted!', 'Your file has been deleted.', 'success');

						// Invoke Show Users.
						showAllUsers();
					}
				});
			}
		});
	});

	// Update AJAX Request.
	$('#update').on('click', function(e) {
		// HTML5 Validation Check.
		if ($('#edit-form-data')[0].checkValidity()) {
			// Prevent Submition.
			e.preventDefault();
			controller = window.location.pathname + 'users/update';
			// AJAX Request.
			$.ajax({
				url: controller,
				type: 'POST',
				data: $('#edit-form-data').serialize() + '&action=update',
				success: function(response) {
					// Sweet Alert Message.
					swal.fire({
						title: 'Confirmation',
						text: 'User updated successfully',
						icon: 'success',
						confirmButtonText: 'OK'
					});

					// Hide Modal.
					$('#edit-user').modal('hide');

					// Reset Form.
					$('#edit-form-data')[0].reset();

					// Invoke Show Users.
					showAllUsers();
				}
				// ,
				// error: function (e) {
				//     e.preventDefault();
				// }
			});
		}
	});

	// Edit AJAX Request.
	$('body').on('click', '.edit-btn', function(e) {
		// Prevent Page Refresh.
		e.preventDefault();
		// Assign User ID Variable.
		userID = $(this).attr('id');
		// Assign Controller Variable.
		controller = window.location.pathname + 'users/edit';
		// AJAX Request.
		$.ajax({
			url: controller,
			type: 'POST',
			data: {
				editID: userID
			},
			success: function(response) {
				// Parse User Data.
				data = JSON.parse(response);

				// User Input Data.
				$('#id').val(data.id);
				$('#edit-fname').val(data.first_name);
				$('#edit-lname').val(data.last_name);
				$('#edit-email').val(data.email);
				$('#edit-phone').val(data.phone);
			}
		});
	});

	// Insert AJAX Request.
	$('#insert').on('click', function(e) {
		// HTML5 Validation Check.
		if ($('#form-data')[0].checkValidity()) {
			// Prevent Submition.
			e.preventDefault();
			controller = window.location.pathname + 'users/add';
			// AJAX Request.
			$.ajax({
				url: controller,
				type: 'POST',
				data: $('#form-data').serialize() + '&action=insert',
				success: function(response) {
					// Sweet Alert Message.
					swal.fire({
						title: 'Confirmation',
						text: 'User added successfully',
						icon: 'success',
						confirmButtonText: 'OK'
					});

					// Hide Modal.
					$('#new-user').modal('hide');

					// Reset Form.
					$('#form-data')[0].reset();

					// Invoke Show Users.
					showAllUsers();
				}
			});
		}
	});

	showAllUsers();
	// AJAX Show Users.
	function showAllUsers() {
		// Users Controller.
		controller = window.location.pathname + 'users/index';
		// AJAX Request.
		$.ajax({
			url: controller,
			type: 'POST',
			data: {
				action: 'view'
			},
			success: function(response) {
				// Involve Users Table.
				$('#show-users').html(response);
				// Invoke DataTables Plugin.
				$('table').DataTable({
					order: [ 0, 'desc' ]
				});
			}
		});
	}
});
