@extends('layout.adminlayout')

@section('content')
<title>Manage Phone</title>
<!-- PAGE CONTENT-->
<div class="page-content--bgf7">
	<!-- BREADCRUMB-->
	<section class="au-breadcrumb2">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="au-breadcrumb-content">
						<div class="au-breadcrumb-left">
							<span class="au-breadcrumb-span">You are here:</span>
							<ul class="list-unstyled list-inline au-breadcrumb__list">
								<li class="list-inline-item active">
									<a href="{{ route('admin.dashboard') }}">Dashboard</a>
								</li>
								<li class="list-inline-item seprate">
									<span>/</span>
								</li>
								<li class="list-inline-item">Manage Phone</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END BREADCRUMB-->

	<!-- WELCOME-->
	<section class="welcome p-t-10">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="title-4">Manage Phone</h1>
					<hr class="line-seprate">
				</div>
			</div>
		</div>
	</section>
	<!-- END WELCOME-->

	<!-- STATISTIC-->
	<div class="main-content">
		<div class="section__content section__content--p30">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header">ADD PHONE FORM</div>
							<div class="card-body">
								<div class="card-title">
									<h3 class="text-center title-2">Add Phone</h3>
								</div>
								<hr>
								<form action="{{ route('store_phone') }}" method="post" enctype="multipart/form-data">
									@csrf
									<div class="form-group">
										<label for="cc-payment" class="control-label mb-1">Phone Name</label>
										<input id="cc-pament" name="Phone_Name" type="text" class="form-control" aria-required="true" aria-invalid="false">
										<div class="alert-danger">{{$errors->first('Phone_Name')}}</div>
									</div>

									<div class="form-group has-success">
										<div class="rs-select2--light rs-select2--md">
											<label for="cc-payment" class="control-label mb-1">Phone Brand</label>
											<select class="js-select2" name="brand_id">
												<option selected="selected">Select Brand</option>
												@foreach ($brands as $Brand)

												<option value="{{$Brand->id}}">{{$Brand->Brand_Name}}</option>

												@endforeach
											</select>
											<div class="dropDownSelect2"></div>
										</div>
										<div class="alert-danger">{{$errors->first('Phone_Brand')}}</div>
									</div>

{{--									<div  class="form-group has-success">--}}
{{--										<div class="rs-select2--light rs-select2--md">--}}
{{--											<label for="cc-payment" class="control-label mb-1">Phone Color</label>--}}
{{--											<select class="js-select2" name="Phone_Color">--}}
{{--												<option selected="selected">Select Color</option>--}}
{{--												<option value="Black">Black</option>--}}
{{--												<option value="White">White</option>--}}
{{--												<option value="Selver">Selver</option>--}}
{{--											</select>--}}
{{--											<div class="dropDownSelect2"></div>--}}
{{--										</div>--}}
{{--										<div class="alert-danger">{{$errors->first('Phone_Color')}}</div>--}}
{{--									</div>--}}

									<div class="form-group has-success">
										<label for="cc-name" class="control-label mb-1">Phone Image</label>
										<input id="cc-name" name="Phone_Image" type="file" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
										autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
										<span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
									</div>
									<div class="alert-danger">{{$errors->first('Phone_Image')}}</div>
								</div>
								<div>
									<button id="payment-button" type="submit" class="btn btn-lg bg-success btn-info btn-block">

										<span id="payment-button-amount">Add Phone</span>

									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- END STATISTIC-->

				<!-- DATA TABLE -->
				<div class="row m-t-30">
					<div class="col-md-12">
						<!-- DATA TABLE-->
						<div class="table-responsive m-b-40">
							<table class="table table-borderless table-data3">
								<thead>
									<tr>

										<th>ID</th>
										<th>Phone Name</th>
										<th>Phone Brand</th>
										<th>Phone Color</th>
										<th>Phone Image</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
								</thead>
								<tbody>

									@foreach ($phones as $Phone)

									<!-- Modal -->
									<div class="modal fade gg" id="edit_{{$Phone->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">

													<h3 class="modal-title" id="exampleModalLongTitle">Update Phone</h3>

													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<form action="{{ route('edit_phone', [$Phone -> id]) }}" method="post" enctype="multipart/form-data">
														@csrf
														<div class="form-group">
															<label for="cc-payment" class="control-label mb-1">Phone Name</label>
															<input id="cc-pament" name="Phone_Name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$Phone -> Phone_Name}}">
															<div class="alert-danger">{{$errors->first('Phone_Name')}}</div>
														</div>

																								 <div class="form-group has-success">
																								<div class="rs-select2--light rs-select2--md">
																										<label for="cc-payment" class="control-label mb-1">Phone Brand</label>
																						<select class="js-select2" name="Phone_Brand">
																								<option selected="selected">Select Brand</option>

                                                                                            <option value="{{$Brand->id}}">{{$Brand->Brand_Name}}</option>

																						</select>
																						<div class="dropDownSelect2"></div>
																				</div>
																				<div class="alert-danger">{{$errors->first('Phone_Brand')}}</div>
																			</div>

																			<div class="form-group has-success">
																				<div class="rs-select2--light rs-select2--md">
																					<label for="cc-payment" class="control-label mb-1">Phone Color</label>
																					<select class="js-select2" name="Phone_Color" value="{{$Phone -> Phone_Color}}">
																						<option selected="selected">Select Color</option>
																						<option value="Black">Black</option>
																						<option value="White">White</option>
																						<option value="Selver">Selver</option>
																					</select>
																					<div class="dropDownSelect2"></div>
																				</div>
																				<div class="alert-danger">{{$errors->first('Phone_Color')}}</div>
																			</div>

																			<div class="form-group has-success">
																				<label for="cc-name" class="control-label mb-1">Phone Image</label>
																				<input id="cc-name" name="Phone_Image" type="file" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
																				autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
																				<span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
																			</div>
																			<div class="alert-danger">{{$errors->first('Phone_Image')}}</div>
																		</div>
																		<div>
																			<button id="payment-button" type="submit" class="btn btn-lg bg-success btn-info btn-block">

																				<span id="payment-button-amount">Update Phone</span>

																			</button>
																		</div>
																	</form>
																</div>

															</div>
														</div>
													</div>

													<tr>
														<td>{{$Phone -> id}}</td>
														<td>{{$Phone -> Phone_Name}}</td>
														<td>{{$Phone -> Brand-> Brand_Name}}</td>
														<td>{{$Phone -> Phone_Color}}</td>
														<td><img src="/images/Phone_Image/{{$Phone -> Phone_Image}}"  class="img-thumbnail" width="100" height="100" alt="phone image"></td>



														<!-- Button trigger modal -->
														<td>

															<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_{{$Phone->id}}">
																Edit
															</button>

														</td>

														<td>
															<button type="submit" class="btn btn-danger"><a href="{{ route('delete_phone', [$Phone -> id]) }}" class="text-white">Delete</a>
															</button>
														</td>
													</tr>
												</form>
												@endforeach
											</tbody>
										</table>
									</div>

									@endsection
