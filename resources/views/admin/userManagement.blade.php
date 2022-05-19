@extends('Components.layout')

@section('content')
    <section class="section">
        <table class="table is-hoverable is-fullwidth">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Mail</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Role</th>
                <th></th>
            </tr>
            {{--Edit User Pop up--}}
            <x-modal title="Test" content="test content lul"></x-modal>
            {{--Show Users in table--}}
            @foreach($users as $user)
                <tr class="has-icons-right">
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->updated_at }}</td>
                    <td>{{ $user->role_id == 0 ? "User" : 'Admin' }}</td>
                    <td>
                        <a href="#">
                            <span class="icon">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </span>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </section>
@endsection