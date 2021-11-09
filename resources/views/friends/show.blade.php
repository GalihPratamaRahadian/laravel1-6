@extends('layouts.app')

@section('title', 'Cobaaaaaa')

@section('content')
<div class="card">
    <div class="card-body">
    <h3>Nama Teman: {{$friend['nama']}}</h3>
    <h3>No Tlp: {{$friend['no_tlp']}}</h3>
    <h3>Alamar Teman: {{$friend['alamat']}}</h3>
    </div>
</div>

@endsection
