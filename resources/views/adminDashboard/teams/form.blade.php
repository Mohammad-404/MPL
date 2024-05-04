@include('adminDashboard.headersAdmin.header')

            <main class="content">
                <div class="container-fluid p-0">
                    {{-- <h1 class="h3 mb-3"><strong>MPL</strong> Dashboard</h1> --}}
                    <h1 class="h3 mb-3"><strong>MPL - </strong> Teams</h1>
					<br>
					<div>
						@if (Session::has('success'))
							<div class="alert alert-primary" role="alert">
								{{Session::get('success')}}
							</div>     
						@endif

					   <a class="btn btn-dark" href="{{ Route('teams.index') }}">View Data</a>
					</div>
					<hr>	
					<div class="container">
						<form class="form-group" action="{{ Route('teams.insert') }}" method="POST" enctype="multipart/form-data">
							@csrf
							Insert Image [Team Photo] :
							<input class="form-control" type="file" name="photo">
							<br>
							Insert Image [Logo] :
							<input class="form-control" type="file" name="logo">
							<br>
							<hr>
							@if(get_Languages())
								@foreach (get_Languages() as $key => $item)
									<h2> {{ __('messages.'.$item->abbr) }} </h2>
									<hr>
									<input class="form-control" type="hidden" value="{{ $item->name }}" name="teams[{{ $key }}][translation_lang]">
									<input class="form-control" type="hidden" value="{{ $item->abbr }}" name="teams[{{ $key }}][abbr]">
									{{ __('messages.Team Name') }} : <input class="form-control" type="text" name="teams[{{ $key }}][team_name]">
									{{ __('messages.Members') }} : <input class="form-control" type="text" name="teams[{{ $key }}][members]">
									<br>
									<hr>
								@endforeach
							@endif
							
							<input type="submit" class="form-control" value="save">
						</form>
					</div>
                </div>
            </main>
			@include('adminDashboard.headersAdmin.footer')
