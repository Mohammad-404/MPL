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

					   <a class="btn btn-dark" href="{{ Route('slider.index') }}">View Data</a>
					</div>
					<hr>	
					<div class="container">
						<form class="form-group" action="{{ Route('slider.insert') }}" method="POST" enctype="multipart/form-data">
							@csrf
							Insert Image :
							<input class="form-control" type="file" name="photo">
							<br>
							<hr>
							@if(get_Languages())
								@foreach (get_Languages() as $key => $item)
								<h2> {{ __('messages.'.$item->abbr) }} </h2>
								<hr>
									<input class="form-control" type="hidden" value="{{ $item->name }}" name="slider[{{ $key }}][translation_lang]">
									<input class="form-control" type="hidden" value="{{ $item->abbr }}" name="slider[{{ $key }}][abbr]">
									{{ __('messages.Title') }} : <input class="form-control" type="text" name="slider[{{ $key }}][title]">
									<br>
									{{ __('messages.Desc') }} : <input class="form-control" type="text" name="slider[{{ $key }}][desc]">
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
         