@extends('layouts.app')

@section('title', 'Groups')

@section('content')
<a href="/groups/create" class="card-link btn-primary">Tambah Group</a>
@foreach($groups as $group)

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <a href="/groups/{{ $group['id'] }}" class="card-title">{{ $group['name'] }}</a>
    <p class="card-text">{{ $group['description'] }}</p>
    <hr>
    <a href="/groups/addmember/{{$group['id']}}" class="card-link btn-primary">Tambah Anggota Teman</a>
    
    <ul class="list-group">
    @foreach($group->friends as $friend)
      <li class="list-group-item d-flex justify-content-between align-items-center">
      {{$friend->nama}}
      <form action="/Groups/deleteaddmember/{{ $friend->id }}" method="POST">
    @csrf
    @method('PUT')
    <button type="submit" class="bedge card-link btn-danger">X</button>
  </form>
      </li>

    @endforeach
  </ul>

    </hr>
    <a href="/groups/{{ $group['id'] }}/edit" class="card-link btn-warning">Edit group</a>
    <form action="/Groups/{{ $group['id']}}" method="POST">
    @csrf
    @method('DELETE')
    <button class="card-link btn-danger">Delete group</button>
  </form>
  </div>
</div>

@endforeach
<div>
 {{ $groups->links() }}
</div>
 @endsection
