<div class="main-panel">
	<div class="main-content">
		<div class="content-wrapper">
			<h3 class="mt-2">Selamat datang, <?php echo $username; ?>!</h3>
			<!--info cards Starts-->
			<div class="row" matchHeight="card">
				<div class="col-sm-6 col-xl-3 col-lg-6 col-12">
					<div class="card">
						<div class="card-body">
							<div class="px-3 py-3">
								<div class="media">
									<div class="media-body text-left">
										<h3 class="mb-1 info">10</h3>
										<span>Total Device</span>
									</div>
									<div class="media-right align-self-center">
										<i class="ft-cpu info font-large-2 float-right"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-xl-3 col-lg-6 col-12">
					<div class="card">
						<div class="card-body">
							<div class="px-3 py-3">
								<div class="media">
									<div class="media-body text-left">
										<h3 class="mb-1 lime">23</h3>
										<span>Active Device</span>
									</div>
									<div class="media-right align-self-center">
										<i class="icon-energy lime font-large-2 float-right"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-xl-3 col-lg-6 col-12">
					<div class="card bg-danger">
						<div class="card-body">
							<div class="px-3 py-3">
								<div class="media">
									<div class="media-left align-self-center">
										<i class="ft-pause-circle white font-large-2 float-left"></i>
									</div>
									<div class="media-body white text-right">
										<h5>Matikan Semua Device</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-xl-3 col-lg-6 col-12">
					<div class="card bg-success">
						<div class="card-body">
							<div class="px-3 py-3">
								<div class="media">
									<div class="media-left align-self-center">
										<i class="ft-radio white font-large-2 float-left"></i>
									</div>
									<div class="media-body white text-right">
										<h5>Nyalakan Semua Device</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--info cards Ends-->
			<div class="row" matchHeight="card">
				<div class="col-xl-6 col-lg-6 col-sm-6">
					<div class="card">
						<div class="card-header pb-0">
							<h4 class="card-title">Statistics Electricity Consumption</h4>
						</div>
						<div class="card-body">
							<div class="card-block">
								<div class="chart-info mb-2">
									<span class="text-uppercase mr-3"><i class="fa fa-circle primary font-small-2 mr-1"></i> Lamp</span>
									<span class="text-uppercase"><i class="fa fa-circle warning font-small-2 mr-1"></i> AC</span>
								</div>
								<div id="line-chart2" class="height-350 lineChart2 lineChart2Shadow">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-sm-6">
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-sm-12">
							<div class="card" style="padding: 7px;">
								<div class="card-body">
									<div class="card-block">
										<h4 class="card-title">List Device Yang Paling Banyak Digunakan</h4>
									</div>
									<table class="table table-responsive-md text-center">
										<thead>
											<tr>
												<th>ID Device</th>
												<th>Device Alias</th>
												<th>Jml. Pemakaian</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><span class="badge badge-info">CD001</span></td>
												<td>Lampu Atas 1</td>
												<td><span class="badge badge-danger">46</span></td>
												<td>
													<label class="switch">
					                                  <!-- <input
					                                  type="checkbox"
					                                  id="<?php echo $u['id'] ?>"
					                                  onchange='oncheckchange(this,<?php echo $u['pin'];?>,"<?php echo $u['id'];?>","<?php echo $u['customer_id'];?>")'
					                                    <?php 
					                                      if($u['state']=="true"){
					                                        echo 'checked';
					                                      }
					                                      else
					                                  
					                                    ?>
					                                  > -->
					                                  <span class="slider round"></span>
					                                </label>
												</td>
											</tr>
											<tr>
												<td><span class="badge badge-info">CD003</span></td>
												<td>Lampu Atas 2</td>
												<td><span class="badge badge-danger">41</span></td>
												<td>
													<label class="switch">
					                                  <!-- <input
					                                  type="checkbox"
					                                  id="<?php echo $u['id'] ?>"
					                                  onchange='oncheckchange(this,<?php echo $u['pin'];?>,"<?php echo $u['id'];?>","<?php echo $u['customer_id'];?>")'
					                                    <?php 
					                                      if($u['state']=="true"){
					                                        echo 'checked';
					                                      }
					                                      else
					                                  
					                                    ?>
					                                  > -->
					                                  <span class="slider round"></span>
					                                </label>
												</td>
											</tr>
											<tr>
												<td><span class="badge badge-info">CD002</span></td>
												<td>Ruang Rapat</td>
												<td><span class="badge badge-danger">20</span></td>
												<td>
													<label class="switch">
					                                  <!-- <input
					                                  type="checkbox"
					                                  id="<?php echo $u['id'] ?>"
					                                  onchange='oncheckchange(this,<?php echo $u['pin'];?>,"<?php echo $u['id'];?>","<?php echo $u['customer_id'];?>")'
					                                    <?php 
					                                      if($u['state']=="true"){
					                                        echo 'checked';
					                                      }
					                                      else
					                                  
					                                    ?>
					                                  > -->
					                                  <span class="slider round"></span>
					                                </label>
												</td>
											</tr>
											<tr>
												<td><span class="badge badge-info">CD004</span></td>
												<td>Depan TL</td>
												<td><span class="badge badge-danger">17</span></td>
												<td>
													<label class="switch">
					                                  <!-- <input
					                                  type="checkbox"
					                                  id="<?php echo $u['id'] ?>"
					                                  onchange='oncheckchange(this,<?php echo $u['pin'];?>,"<?php echo $u['id'];?>","<?php echo $u['customer_id'];?>")'
					                                    <?php 
					                                      if($u['state']=="true"){
					                                        echo 'checked';
					                                      }
					                                      else
					                                  
					                                    ?>
					                                  > -->
					                                  <span class="slider round"></span>
					                                </label>
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
		</div>
	</div>