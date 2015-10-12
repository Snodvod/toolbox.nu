@extends('app')

@section('title')
	Users
@stop
@section('content')

<div>
	<form action="/users/edit" method="POST">
		{!! method_field('PUT') !!}
		<table>
			<tr>
				<th>Name</th>
				<th>Adress</th>
				<th>Email</th>
			</tr>

			@foreach ($users as $user)
				<tr>
					<td>{{ $user->name }}</td>
					<td>{{ $user->adress }}</td>
					<td>{{ $user->email }}</td>
					<td><button class="edit" id="{{ $user->id }}">Edit</button></td>
					<td><button>Delete</button></td>
				</tr>
			@endforeach

		</table>
	</form>
</div>

@stop