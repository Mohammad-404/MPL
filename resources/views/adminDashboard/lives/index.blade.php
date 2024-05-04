@include('adminDashboard.headersAdmin.header')
            <main class="content">
                <div class="container-fluid p-0">
                    {{-- <h1 class="h3 mb-3"><strong>MPL</strong> Dashboard</h1> --}}
                    <h1 class="h3 mb-3"><strong>MPL - </strong> Lives</h1>
					<br>
					<div>
					   <a class="btn btn-dark" href="{{ Route('lives.form') }}">Add Lives</a>
					</div>
					<hr>
					<h2> Other Language </h2>
					@isset ($lives_relation)
					<table class="table text-center">
						<tr class="bg-dark">
							<th class="text-white">Team 1</th>
							<th class="text-white">Team 2</th>
							<th class="text-white">Team 1 Logo</th>
							<th class="text-white">Team 2 Logo</th>
							<th class="text-white">Team 1 ID</th>
							<th class="text-white">Team 2 ID</th>
							<th class="text-white">Description</th>
							<th class="text-white">Youtube</th>
							<th class="text-white">Created At</th>
							<th class="text-white" colspan="2" style="text-align:center;">Tools</th>
						</tr>
						@foreach ($lives_relation->livess as $item)	
							<tr>
								<td>{{ $item->teams1->team_name }}</td>
								<td>{{ $item->teams2->team_name }}</td>
								<td>
									<?php 
										$logo = $item->teams1->logo;
									?>
									<img src="{{asset("images$logo")}}" width="50px" height="50px">
								</td>
								<td>
									<?php 
										$logo = $item->teams2->logo;
									?>
									<img src="{{asset("images$logo")}}" width="50px" height="50px">
								</td>
								<td>{{ $item->teams1->id }}</td>
								<td>{{ $item->teams2->id }}</td>
								<td>{{ $item->desc }}</td>
								<td>{{ $item->youtube }}</td>
								<td>{{ $item->created_at }}</td>
								<td> <input class="btn btn-danger" type="submit" value="delete"> </td>
								<td> <input class="btn btn-success" type="submit" value="update"> </td>
							</tr>
						@endforeach
					</table>
				@endisset


					<h2> Main Languages </h2>
					@isset ($lives)
					<table class="table text-center">
						<tr class="bg-dark">
							<th class="text-white">Team 1</th>
							<th class="text-white">Team 2</th>
							<th class="text-white">Team 1 Logo</th>
							<th class="text-white">Team 2 Logo</th>
							<th class="text-white">Team 1 ID</th>
							<th class="text-white">Team 2 ID</th>
							<th class="text-white">Description</th>
							<th class="text-white">Youtube</th>
							<th class="text-white">Created At</th>
							<th class="text-white" colspan="2" style="text-align:center;">Tools</th>
						</tr>
						@foreach ($lives as $item)	
							<tr>
								<td>{{ $item->teams1->team_name }}</td>
								<td>{{ $item->teams2->team_name }}</td>
								<td>
									<?php 
										$logo = $item->teams1->logo;
									?>
									<img src="{{asset("images$logo")}}" width="50px" height="50px">
								</td>
								<td>
									<?php 
										$logo = $item->teams2->logo;
									?>
									<img src="{{asset("images$logo")}}" width="50px" height="50px">
								</td>
								<td>{{ $item->teams1->id }}</td>
								<td>{{ $item->teams2->id }}</td>
								<td>{{ $item->desc }}</td>
								<td>{{ $item->youtube }}</td>
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
