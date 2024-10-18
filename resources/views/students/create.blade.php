@extends('layouts.app')

@section('content')

<div class="row">

    <x-card title="Student Registration">
        <livewire:admin.student-registration />
    </x-card>

</div>


<x-alert-dialog type="success" title="Student Created Successfully"></x-alert-dialog>




@endsection
