@include('adminDashboard.headersAdmin.header')
            <main class="content">
                <div class="container-fluid p-0">
                    {{-- <h1 class="h3 mb-3"><strong>MPL</strong> Dashboard</h1> --}}
                    <h1 class="h3 mb-3"><strong>MPL - </strong> Languages</h1>
					<br>
					<div>
					   <a class="btn btn-dark" href="{{ Route('lang.form') }}">Add Languages</a>
					</div>
					<hr>
					@isset ($lang)
						<table class="table text-center">
							<tr class="bg-dark">
								<th class="text-white">Abbr</th>
								<th class="text-white">Locale</th>
								<th class="text-white">Name</th>
								<th class="text-white">Direction</th>
								<th class="text-white">Active</th>
								<th class="text-white">Created At</th>
								<th class="text-white" colspan="2" style="text-align:center;">Tools</th>
							</tr>
							@foreach ($lang as $item)	
								<tr>
									<td>{{ $item->abbr }}</td>
									<td>{{ $item->locale }}</td>
									<td>{{ $item->name }}</td>
									<td>{{ $item->direction }}</td>
									<td>{{ $item->active }}</td>
									<td>{{ $item->created_at }}</td>
									<td> <input class="btn btn-danger" type="submit" value="delete"> </td>
									<td> <input class="btn btn-success" type="submit" value="update"> </td>
								</tr>
							@endforeach
						</table>
					@endisset
                </div>
            </main>

@include('adminDashboard.headersAdmin.footer')
   