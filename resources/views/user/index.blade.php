@extends('app')

@section('title')
	Users
@stop
@section('content')

<div>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Adress</th>
            <th>Email</th>
        </tr>
    @foreach ($users as $user)
        <tr>
            {!! Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'put')) !!}
                <td>{{ $user->id }}</td>
                <td>{!! Form::text('name') !!}</td>
                <td>{!! Form::text('adress') !!}</td>
                <td>{!! Form::text('email') !!}</td>
                <td>{!! Form::submit('Update') !!}</td>
            {!! Form::close() !!}
            {!! Form::model($user, array('route' => array('users.destroy', $user->id), 'method' => 'delete')) !!}
                <td>{!! Form::submit('Delete') !!}</td>
            {!! Form::close() !!}
        </tr>
    @endforeach
    </table>
<!--
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
-->
</div>

@stop