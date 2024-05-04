@include('adminDashboard.headersAdmin.header')
            <main class="content">
                <div class="container-fluid p-0">
                    {{-- <h1 class="h3 mb-3"><strong>MPL</strong> Dashboard</h1> --}}
                    <h1 class="h3 mb-3"><strong>MPL - </strong> Slider</h1>
					<br>
					<div>
					   <a class="btn btn-dark" href="{{ Route('slider.form') }}">Add Slider</a>
					</div>
					<hr>
					<h2> Other Language </h2>
					@isset ($slider_relation)
						
					<table class="table text-center">
						<tr class="bg-dark">
							<th class="text-white">Language No</th>
							<th class="text-white">Language Name</th>
							<th class="text-white">Title</th>
							<th class="text-white">Desc</th>
							<th class="text-white">Photo</th>
							<th class="text-white" colspan="2" style="text-align:center;">Tools</th>
						</tr>
						@foreach ($slider_relation->sliders as $item)	
							<tr>
								<td>{{ $item->translation_of }}</td>
								<td>{{ $item->translation_lang }}</td>
								<td>{{ $item->title }}</td>
								<td>{{ $item->desc }}</td>
								<td>
									<img src="{{asset("images$item->photo")}}" width="50px" height="50px">						
								</td>
								<td> <input class="btn btn-danger" type="submit" value="delete"> </td>
								<td> <input class="btn btn-success" type="submit" value="update"> </td>
							</tr>
						@endforeach
					</table>

					<h2> Main Languages </h2>
					<table class="table text-center">
						<tr class="bg-dark">
							<th class="text-white">Language No</th>
							<th class="text-white">Language Name</th>
							<th class="text-white">Title</th>
							<th class="text-white">Desc</th>
							<th class="text-white">Photo</th>
							<th class="text-white" colspan="2" style="text-align:center;">Tools</th>
						</tr>
						@foreach ($slider as $item)
							<tr>
								<td>{{ $item->translation_of }}</td>
								<td>{{ $item->translation_lang }}</td>
								<td>{{ $item->title }}</td>
								<td>{{ $item->desc }}</td>
								<td>									
									<img src="{{asset("images$item->photo")}}" width="50px" height="50px">						
								</td>
								<td> <input class="btn btn-danger" type="submit" value="delete"> </td>
								<td> <input class="btn btn-success" type="submit" value="update"> </td>
							</tr>
						@endforeach
					</table>
					@endisset
                </div>
            </main>

			@include('adminDashboard.headersAdmin.footer')
