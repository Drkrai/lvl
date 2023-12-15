<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<div class="mt-5">
								<h4 class="card-title float-left mt-2">All Rooms</h4> <a href="add-room.html" class="btn btn-primary float-right veiwbutton">Add Room</a> </div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="card card-table">
							<div class="card-body booking_card">
								<div class="table-responsive">
									<table class="datatable table table-stripped table table-hover table-center mb-0">
										<thead>
											<tr>
												<th>Booking ID</th>
												<th>Name</th>
												<th>Room Type</th>
												<th>Total Numbers</th>
												<th>Date</th>
												<th>Time</th>
												<th>Arrival Date</th>
												<th>Depature Date</th>
												<th>Email ID</th>
												<th>Ph.Number</th>
												<th>Status</th>
												<th class="text-right">Actions</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>BKG-0001</td>
												<td>
													<h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-03.jpg" alt="User Image"></a>
                                                    <a href="profile.html">Tommy Bernal <span>#0001</span></a>
                                                    </h2>
                                                </td>
												<td>Double</td>
												<td>10</td>
												<td>21-03-2020</td>
												<td>11.00 AM</td>
												<td>22-03-2020</td>
												<td>23-03-2020</td>
												<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c0b4afadadb9a2a5b2aea1ac80a5b8a1adb0aca5eea3afad">[email&#160;protected]</a></td>
												<td>631-254-6480</td>
												<td>
													<div class="actions"> <a href="#" class="btn btn-sm bg-success-light mr-2">Active</a> </div>
												</td>
												<td class="text-right">
													<div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
														<div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="edit-room.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> </div>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="delete_asset" class="modal fade delete-modal" role="dialog">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-body text-center"> <img src="assets/img/sent.png" alt="" width="50" height="46">
							<h3 class="delete_class">Are you sure want to delete this Asset?</h3>
							<div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
								<button type="submit" class="btn btn-danger">Delete</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>