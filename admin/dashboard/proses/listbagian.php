<?php
	include('../../../config/query.php');
								$q = new Query();
								$status = $_GET['status'];
								$sql = "SELECT * FROM master_bagian WHERE status = '".$status."'";
								$select = $q->query($sql);
								$store = $q->store($select);
								$sts = "";
								foreach($store as $rs => $i) {
									if($i[3] == 1){
										$sts = "Aktif";
									} else {
										$sts = "Tidak Aktif";
									}
									echo "<tr>
											<td class='text-upper'>".$i[1]."</td>
											<td class='text-upper'>".$i[2]."</td>
											<td class='text-upper'><p class='".(($i[3]==1)?'text-success':'text-danger')."'><b>".$sts."</b></p></td>
											<td>
												<div class='btn-group'>
						                          <button data-toggle='dropdown' class='btn btn-default dropdown-toggle' type='button' aria-expanded='false'>
						                          <span class='caret'></span> Aksi
						                          </button>
						                          <ul class='dropdown-menu pull-right'>
						                            <li><a class='edit' href='' id='edit' data-recid='".$i[0]."'><i class='fa fa-edit'></i> Edit</a></li>
						                            <li><a class='hapus' href='' id='hapus' data-recid='".$i[0]."'><i class='fa fa-times'></i> Hapus</a></li>
						                          </ul>
						                        </div>
											</td>
										</tr>";
								}
			echo "<script>
						$(document).ready(function() {
							$('#table1').DataTable();
									$('.edit').on('click', function(e) {
										e.preventDefault();
										var id = $(this).data('recid');
										console.log(id);
										$.ajax({
											url: 'page/editmasterbagian.php',
											type: 'GET',
											data: { 'id': id },
											success: function(response) {
												$('#loading-state').fadeIn('slow');
												$('#utama').html(response);
											},
											error: function(error) {
												console.log(error);
											},
											complete: function() {
												$('#loading-state').fadeOut('slow');
											}
										})
									})

									$('.hapus').on('click', function(e) {
										e.preventDefault();
										var id = $(this).data('recid');
										console.log(id);
										bootbox.confirm('Hapus item ini?', function(a) {
											console.log(a);
											if(a){
												$.ajax({
													url: 'proses/hapusbagian.php',
													type: 'POST',
													data: { 'id': id },
													success: function(response) {
														if(response === 'true'){
															bootbox.alert('Berhasil Dihapus', function() {
																window.location.href = 'index.php?page=daftarbagian';
															});								
														} else {
															bootbox.alert('Terjadi Kesalahan, hubungi admin!');
														}
													},
													complete: function() {
														$('#loading-state').fadeOut('slow');
													},
													error: function(error) {
														console.log(error);
													}
												})
											}
										})
									})
							})
					</script>";
							?>