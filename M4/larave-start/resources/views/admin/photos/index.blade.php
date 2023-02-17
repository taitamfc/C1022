@extends('admin.layouts.master')

@section('title') Trang quan ly photo  @endsection

@section('content')
    <h1>Trang hien thi danh sach</h1>
    {{ $id }}
    <br>
    {{ $name }}
    <br>
    {{ $age }}
    @foreach( $params as $param )
        {{ $param }} <br>
    @endforeach
    @if( $age > 18 )
        <h1>Duoc uong bia</h1>
    @else
        <h1>Duoc uong ruou</h1>
    @endif
@endsection

@section('scripts')
    <script>
        alert(123);
    </script>
@endsection

