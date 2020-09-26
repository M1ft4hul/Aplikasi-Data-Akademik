const SweetAlert = $('.sweetalert').data('sweetalert');

if (SweetAlert) {
	Swal.fire({
		type: 'error',
		title: 'Gagal Login...',
		text: '' + SweetAlert
	})

}
