@extends('layouts.app')

@section('content')
    <div class="row">
        @if (session('error'))
            <div class="alert alert-danger text-center">
                {{ session('error') }}
            </div>
        @endif

        <div class="col-6">
            <x-card title="Search By Status">
                <form action="{{ route('student.index') }}" method="get">
                    <div class="mb-3">
                        <label for="status">Status</label>
                        <select name="status" class="form-select">
                            <option value="">Select</option>
                            <option value="all">All Time</option>
                            <option value="active">Active</option>
                            <option value="inactive">InActive</option>
                        </select>
                    </div>

                    <x-button>
                        Search
                    </x-button>
                </form>
            </x-card>
        </div>


        <div class="col-6">
            <x-card title="Search By Status">
                <form action="{{ route('student.index') }}" method="get">
                    <div class="mb-3">
                        <label for="status">AP/F Number (Username)</label>
                        <input type="text" class="form-control" name="ap_number">
                    </div>

                    <x-button>
                        Search
                    </x-button>
                </form>
            </x-card>
        </div>


        <div class="col-6">
            <x-card title="Search By Course">
                <form action="{{ route('student.index') }}" method="get">
                    <div class="mb-3">
                        <label for="year">Course Year</label>
                        <select name="year" class="form-select" >
                            <option value="">Select</option>
                            <option value="2024">2024</option>
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="number">Course Number</label>
                        <select name="number" class="form-select">
                            <option value="">Select</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>

                    <x-button>
                        Search
                    </x-button>
                </form>
            </x-card>
        </div>



    </div>
@endsection
