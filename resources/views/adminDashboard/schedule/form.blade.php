@include('adminDashboard.headersAdmin.header')
            <main class="content">
                <div class="container-fluid p-0">
                    {{-- <h1 class="h3 mb-3"><strong>MPL</strong> Dashboard</h1> --}}
                    <h1 class="h3 mb-3"><strong>MPL - </strong> schedule</h1>
					<br>
					<div>
						@if (Session::has('success'))
							<div class="alert alert-primary" role="alert">
								{{Session::get('success')}}
							</div>     
						@endif

					   <a class="btn btn-dark" href="{{ Route('schedule.index') }}">View Data</a>
					</div>
					<hr>	
					<div class="container">
						<form class="form-group" action="{{ Route('schedule.insert') }}" method="POST" enctype="multipart/form-data">
							@csrf
							<h2>Add schedule</h2>
							
							Select Team 1 :
							<select class="form-control" name="Team_id_1">
								@foreach (All_Teams() as $teams)
									<option value="{{ $teams->id }}">{{ $teams->team_name }}</option>									
								@endforeach
							</select>
							<br>
							Select Team 2 :
							<select class="form-control" name="Team_id_2">
								@foreach (All_Teams() as $teams)
									<option value="{{ $teams->id }}">{{ $teams->team_name }}</option>									
								@endforeach
							</select>

							Date Match : <input class="form-control" type="date" name="date_match"><br>
							Time : <input class="form-control" type="time" name="time"><br>
							<br>
							<input type="submit" class="form-control w-25" value="save">
						</form>
					</div>
                </div>
            </main>
@include('adminDashboard.headersAdmin.footer')
  