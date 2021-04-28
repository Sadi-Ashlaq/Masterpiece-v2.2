@extends('layout.adminlayout')

@section('content')

<title>Manage Brand</title>

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
								<li class="list-inline-item">Manage Brand</li>
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
					<h1 class="title-4">Manage Brand

					</h1>
					<hr class="line-seprate">
				</div>
			</div>
		</div>
	</section>
	<!-- END WELCOME-->

	<!-- STATISTIC  -->
	<div class="main-content">
		<div class="section__content section__content--p30">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header">ADD BRAND FORM</div>
							<div class="card-body">
								<div class="card-title">
									<h3 class="text-center title-2">Add Brand</h3>
								</div>
								<hr>
								<form action="{{ route('store_brand') }}" method="post" enctype="multipart/form-data">
									@csrf
									<div class="form-group">
										<label for="cc-payment" class="control-label mb-1">Brand Name</label>
										<input id="cc-pament" name="Brand_Name" type="text" class="form-control" aria-required="true" aria-invalid="false">

										<div class="alert-danger">{{$errors->first('Brand_Name')}}</div>

									</div>

									<div class="form-group has-success">
										<label for="cc-name" class="control-label mb-1">Brand Image</label>
										<input id="cc-name" name="Brand_Image" type="file" class="form-control cc-name valid"
										autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
										<span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
										<div class="alert-danger">{{$errors->first('Brand_Image')}}</div>
									</div>
								</div>
								<div>
									<button id="payment-button" type="submit" class="btn btn-lg bg-success btn-info btn-block">
										<span id="payment-button-amount">Add Brand</span>

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

						<div class="table-responsive m-b-40">
							<table class="table table-borderless table-data3">
								<thead>
									<tr>
										<th>ID</th>
										<th>Brand Name</th>
										<th>Brand Image</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($brands as $Brand)

									<!-- Modal -->
									<div class="modal fade gg" id="edit_{{$Brand->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">

													<h3 class="modal-title" id="exampleModalLongTitle">Update Brand</h3>
													<form action="{{ route('edit_brand', [$Brand -> id]) }}" method="post" enctype="multipart/form-data">

														@csrf
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="modal-body">
														<div class="form-group">
															<label for="cc-payment" class="control-label mb-1">Brand Name</label>
															<input id="cc-pament" name="Brand_Name" value="{{$Brand -> Brand_Name}}" type="text" class="form-control" aria-required="true" aria-invalid="false">
														</div>

														<div class="form-group has-success">
															<label for="cc-name" class="control-label mb-1">Brand Image</label>
															<input id="cc-name2" name="Brand_Image" type="file" class="form-control cc-name valid"
															autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
															<span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
														</div>

														<div>
															<button id="payment-button" type="submit" class="btn btn-lg bg-success btn-info btn-block">

																<span id="payment-button-amount">Update Brand</span>

															</button>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>

									<tr>
										<td>{{$Brand -> id}}</td>
										<td>{{$Brand -> Brand_Name}}</td>
										<td><img src="/images/Brand_Image/{{$Brand -> Brand_Image}}" class="img-thumbnail" width="100" height="100" alt="brand image"></td>
										<!-- Button trigger modal -->
										<td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_{{$Brand->id}}">
												Edit
											</button>

										</td>

										<td>
											<button type="submit" class="btn btn-danger"><a href="{{ route('delete_brand', [$Brand -> id]) }}" class="text-white">Delete</a>
											</button>
										</td>
									</tr>
								</form>
								@endforeach
							</tbody>
						</table>
					</div>
					<!-- END DATA TABLE-->
					@endsection
