@include('adminDashboard.headersAdmin.header')
            <main class="content">
                <div class="container-fluid p-0">
                    {{-- <h1 class="h3 mb-3"><strong>MPL</strong> Dashboard</h1> --}}
                    <h1 class="h3 mb-3"><strong>MPL - </strong> Slider</h1>
					<br>
					<div>
						@if (Session::has('success'))
							<div class="alert alert-primary" role="alert">
								{{Session::get('success')}}
							</div>     
						@endif

					   <a class="btn btn-dark" href="{{ Route('lang.index') }}">View Data</a>
					</div>
					<hr>	
					<div class="container">
						<form class="form-group" action="{{ Route('lang.insert') }}" method="POST" enctype="multipart/form-data">
							@csrf
							<h2>Add Languages</h2>
							Abbr : <input class="form-control" type="text" name="abbr"><br>
							Language Name : <input class="form-control" type="text" name="name"><br>
							Direction : <input class="form-control" type="text" name="direction"><br>
							Active : <input class="" style="width:30px;" checked type="checkbox" name="active">
							<br>
							<br>
							<input type="submit" class="form-control w-25" value="save">
						</form>
					</div>
                </div>
            </main>
@include('adminDashboard.headersAdmin.footer')