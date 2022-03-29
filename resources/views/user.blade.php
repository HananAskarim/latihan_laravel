@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Data Siswa</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Nama</th>
                    <th>Role</th>
                    <th>Email</th>
                    <th>AKSI</th>
                </tr>
                @foreach($user as $s)
                <tr>
                    <td>{{$s->name}}</td>
                    <td>{{$s->role}}</td>
                    <td>{{$s->email}}</td>
                    <td>
                        <ul class="nav">
                            <a href="{{route ('user.edit', $s->id)}}" class="btn btn-primary mr-2">Edit</a>
                            <form action="{{route ('user.destroy', $s->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-warning" onclick="return confirm('Apakah yakin ingin menghapus?')">Delete</button>
                            </form>
                        </ul>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection