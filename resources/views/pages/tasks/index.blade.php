@extends('layouts.app')

@section('title', 'Задачи')

@section('content')
<style>
    .table-container {
        max-width: 100%;
        overflow-x: auto;
    }
</style>
    <div>
        @livewire('tasks.index')
    </div>
@endsection