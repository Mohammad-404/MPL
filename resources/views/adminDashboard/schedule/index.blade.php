@include('adminDashboard.headersAdmin.header')
            <main class="content">
                <div class="container-fluid p-0">
                    {{-- <h1 class="h3 mb-3"><strong>MPL</strong> Dashboard</h1> --}}
                    <h1 class="h3 mb-3"><strong>MPL - </strong> Schedule</h1>
					<br>
					<div>
					   <a class="btn btn-dark" href="{{ Route('schedule.form') }}">Add schedule</a>
					</div>
					<hr>
					@isset ($schedule)
						<table class="table text-center">
							<tr class="bg-dark">
								<th class="text-white">Team 1</th>
								<th class="text-white">Team 2</th>
								<th class="text-white">Team 1 Logo</th>
								<th class="text-white">Team 2 Logo</th>
								<th class="text-white">Team 1 ID</th>
								<th class="text-white">Team 2 ID</th>
								<th class="text-white">Date Match</th>
								<th class="text-white">Time</th>
								<th class="text-white">Created At</th>
								<th class="text-white" colspan="2" style="text-align:center;">Tools</th>
							</tr>
							@foreach ($schedule as $item)	
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
									<td>{{ $item->date_match }}</td>
									<td>{{ $item->time }}</td>
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
