@include('adminDashboard.headersAdmin.header')
            <main class="content">
                <div class="container-fluid p-0">
                    {{-- <h1 class="h3 mb-3"><strong>MPL</strong> Dashboard</h1> --}}
                    <h1 class="h3 mb-3"><strong>MPL - </strong> Lives</h1>
					<br>
					<div>
						@if (Session::has('success'))
							<div class="alert alert-primary" role="alert">
								{{Session::get('success')}}
							</div>     
						@endif

					   <a class="btn btn-dark" href="{{ Route('lives.index') }}">View Data</a>
					</div>
					<hr>
					<div class="container">
						<form class="form-group" action="{{ Route('lives.insert') }}" method="POST" enctype="multipart/form-data">
							@csrf
							@if(get_Languages())
								@foreach (get_Languages() as $key => $item)
								<h2> {{ __('messages.'.$item->abbr) }} </h2>
								<hr>
									<input class="form-control" type="hidden" value="{{ $item->name }}" name="lives[{{ $key }}][translation_lang]">
									<input class="form-control" type="hidden" value="{{ $item->abbr }}" name="lives[{{ $key }}][abbr]">

									Select Team 1 :
									<select class="form-control" name="lives[{{ $key }}][team_id]">
										@foreach (All_Teams() as $teams)
											<option value="{{ $teams->id }}">{{ $teams->team_name }}</option>									
										@endforeach
									</select>
									<br>
									Select Team 2 :
									<select class="form-control" name="lives[{{ $key }}][team_id2]">
										@foreach (All_Teams() as $teams)
											<option value="{{ $teams->id }}">{{ $teams->team_name }}</option>									
										@endforeach
									</select>
									<br>
									Description : <input class="form-control" type="text" name="lives[{{ $key }}][desc]"><br>
									Youtube Link : <input class="form-control" type="text" name="lives[{{ $key }}][youtube]"><br>
									<br>
								@endforeach
							@endif

							<input type="submit" class="form-control w-25" value="save">
						</form>
					</div>

					
                </div>
            </main>

@include('adminDashboard.headersAdmin.footer')
      