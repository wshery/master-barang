		<!-- Vendor -->
		<script src="<?php echo base_url(); ?>/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="<?php echo base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="<?php echo base_url(); ?>/assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="<?php echo base_url(); ?>/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="<?php echo base_url(); ?>/assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="<?php echo base_url(); ?>/assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		<!-- Specific Page Vendor -->
		<script src="<?php echo base_url(); ?>/assets/vendor/pnotify/pnotify.custom.js"></script>
		<script src="<?php echo base_url(); ?>/assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
		<script src="<?php echo base_url(); ?>/assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>
		<script src="<?php echo base_url(); ?>/assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>

		<script src="<?php echo base_url(); ?>/assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
		<script src="<?php echo base_url(); ?>/assets/vendor/select2/select2.js"></script>
		<script src="<?php echo base_url(); ?>/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<script src="<?php echo base_url(); ?>/assets/vendor/jquery-maskedinput/jquery.maskedinput.js"></script>
		<script src="<?php echo base_url(); ?>/assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
		<script src="<?php echo base_url(); ?>/assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
		<script src="<?php echo base_url(); ?>/assets/vendor/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
		<script src="<?php echo base_url(); ?>/assets/vendor/fuelux/js/spinner.js"></script>
		<script src="<?php echo base_url(); ?>/assets/vendor/dropzone/dropzone.js"></script>
		<script src="<?php echo base_url(); ?>/assets/vendor/bootstrap-markdown/js/markdown.js"></script>
		<script src="<?php echo base_url(); ?>/assets/vendor/bootstrap-markdown/js/to-markdown.js"></script>
		<script src="<?php echo base_url(); ?>/assets/vendor/bootstrap-markdown/js/bootstrap-markdown.js"></script>
		<script src="<?php echo base_url(); ?>/assets/vendor/codemirror/lib/codemirror.js"></script>
		<script src="<?php echo base_url(); ?>/assets/vendor/codemirror/addon/selection/active-line.js"></script>
		<script src="<?php echo base_url(); ?>/assets/vendor/codemirror/addon/edit/matchbrackets.js"></script>
		<script src="<?php echo base_url(); ?>/assets/vendor/codemirror/mode/javascript/javascript.js"></script>
		<script src="<?php echo base_url(); ?>/assets/vendor/codemirror/mode/xml/xml.js"></script>
		<script src="<?php echo base_url(); ?>/assets/vendor/codemirror/mode/htmlmixed/htmlmixed.js"></script>
		<script src="<?php echo base_url(); ?>/assets/vendor/codemirror/mode/css/css.js"></script>
		<script src="<?php echo base_url(); ?>/assets/vendor/summernote/summernote.js"></script>
		<script src="<?php echo base_url(); ?>/assets/vendor/bootstrap-maxlength/bootstrap-maxlength.js"></script>
		<script src="<?php echo base_url(); ?>/assets/vendor/ios7-switch/ios7-switch.js"></script>
		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url(); ?>/assets/javascripts/theme.js"></script>

		<!-- Theme Custom -->
		<script src="<?php echo base_url(); ?>/assets/javascripts/theme.custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url(); ?>/assets/javascripts/theme.init.js"></script>

		<script src="<?php echo base_url(); ?>/assets/vendor/dropzone/dropzone.js"></script>
		<script src="<?php echo base_url(); ?>/assets/vendor/jquery-autosize/jquery.autosize.js"></script>
		<script src="<?php echo base_url(); ?>/assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>


		<!-- Examples -->
		<script src="<?php echo base_url(); ?>/assets/javascripts/ui-elements/examples.modals.js"></script>
		<script src="<?php echo base_url(); ?>/assets/javascripts/forms/examples.advanced.form.js"></script>
		<script src="<?php echo base_url(); ?>/assets/javascripts/tables/examples.datatables.default.js"></script>
		<script src="<?php echo base_url(); ?>/assets/javascripts/tables/examples.datatables.row.with.details.js"></script>
		<script src="<?php echo base_url(); ?>/assets/javascripts/tables/examples.datatables.tabletools.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('#example').DataTable();
				$('#example2').DataTable();
			});
		</script>

		<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>

		<script>
			$(document).ready(function() {
				// Sembunyikan alert validasi kosong
				$("#kosong").hide();
			});
		</script>
		<script>
			$(document).ready(function() {
				$("#myModal2").modal("show");

				$("#myBtn").click(function() {
					$("MyModal2").modal("hide");
				});

				$("#myModal2").on('hide.bs.modal', function() {
					var backConfirm = confirm("Tou Want Go Back?");
					if (backConfirm == true) {
						window.location.href = '<?= site_url('stockin/create'); ?>';
					} else {
						window.location.href = '<?= site_url('stockin/modallokasi') ?>'
					}
				})
			})
		</script>
		<!-- uppper -->
		<script>
			function n1() {
				var x = document.getElementById("n11");
				x.value = x.value.toUpperCase();
			}

			function n2() {
				var x = document.getElementById("n22");
				x.value = x.value.toUpperCase();
			}

			function n3() {
				var x = document.getElementById("n33");
				x.value = x.value.toUpperCase();
			}

			function n4() {
				var x = document.getElementById("n44");
				x.value = x.value.toUpperCase();
			}

			function n5() {
				var x = document.getElementById("n55");
				x.value = x.value.toUpperCase();
			}
		</script>
		<!-- uppper -->

		<script>
			$(document).ready(function() {
				$('#checkAll').click(function() {
					if (this.checked) {
						$('.checkbox').each(function() {
							this.checked = true;
						});
					} else {
						$('.checkbox').each(function() {
							this.checked = false;
						});
					}
				});

				$('#delete').click(function() {
					var dataArr = new Array();
					if ($('input:checkbox:checked').length > 0) {
						$('input:checkbox:checked').each(function() {
							dataArr.push($(this).attr('id'));
							$(this).closest('tr').remove();
						});
						sendResponse(dataArr)
					} else {
						alert('No record selected ');
					}

				});


				function sendResponse(dataArr) {
					$.ajax({
						type: 'post',
						url: '<?php echo site_url('proses_data/process_seldel'); ?>',
						data: {
							'data': dataArr
						},
						success: function(response) {
							alert(response);
							window.location.href = '<?php echo site_url('view_item/data_item'); ?>';
						},
						error: function(errResponse) {
							alert(errResponse);
							window.location.href = '<?php echo site_url('view_item/data_item'); ?>';
						}
					});
				}

			});
		</script>

		<!-- jquery-maskmoney-master -->
		<script src="<?php echo base_url(); ?>/assets/jquery-maskmoney-master/dist/jquery.maskMoney.js"></script>
		<script src="<?php echo base_url(); ?>/assets/jquery-maskmoney-master/dist/jquery.maskMoney.min.js"></script>

		<script>
			$(document).ready(function() {
				$('#harga').maskMoney({
					prefix: 'Rp. ',
					thousands: '.',
					decimal: ',',
					precision: 0
				});
			});
		</script>
		<!-- jquery-maskmoney-master -->

		<!-- uppper -->
		<script>
			function n1() {
				var x = document.getElementById("n11");
				x.value = x.value.toUpperCase();
			}
		</script>
		<!-- uppper -->


		</body>

		</html>