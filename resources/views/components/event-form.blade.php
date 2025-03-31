@props([action,method])

<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($method === 'PUT' || $method === 'PATCH')
    @method($method)
</form>