<div class="page-wrapper" id="app">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<div class="mt-5">
								
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
												<th>Store Name</th>
												<th>Address</th>
												<th>Order</th>
												<th>Quantity</th>
												<th>Total</th>
												<th>Ph.Number</th>
												<th>Message</th>
												<th>Status</th>
												<th class="text-right">Actions</th>
											</tr>	
										</thead>
										<tbody>
											<tr v-for="order in orders" :key="orders.id">
												<td>{{order.name}}</td>
												<td>{{order.address}}</td>
												<td>{{order.products}}</td>
												<td>{{order.quantity}}</td>
												<td>{{order.total}}</td>
												<td>{{order.phone}}</td>
												<td>{{order.message}}</td>
												<td>
													<select name="" id="">
														<option value="Pending">Pending</option>
														<option value="Packed">Packed</option>
														<option value="Out For Delivery">Out For Delivery</option>
														<option value="Delivered">Delivered</option>
													</select>
												</td>
												<td><button type="button" class="btn-primary">Update</button></td>
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


<script src="https://cdn.jsdelivr.net/npm/vue@3"></script>
<script>
const app= Vue.createApp({
	data() {
		return {
			orders:<?= json_encode($data)?>
		}
	},
});

app.mount('#app');
</script>