<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/2.0.0/js/dataTables.min.js"></script>
<script>
	let table = new DataTable('#datatable1');
</script>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap4.js"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<script>
	//$(document).ready(function() {
	//	<?php //if(session()->getFlashdata('status')) { ?>
	//		alertify.set('notifier','position', 'top-right');
	//		alertify.success("<?php //= session()->getFlashdata('status') ?>//");
	//	<?php //} ?>
	//});
</script>

<script>
	$(document).ready(function() {
		$('.confirm-delete').click(function (e){
			e.preventDefault();

			confirmDialog = confirm("Are you sure you want to delete?");
			if (confirmDialog) {
				var id = $(this).val();
				$.ajax({
					type: "DELETE",
					url: "/employee/confirmdelete/" + id,
					success: function (response) {
						alert('Employee deleted successfully');
						window.location.reload();
					}
				})
			}
		};
	});
</script>

</body>
</html>
