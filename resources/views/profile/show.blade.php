@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-body bg-picture">
                    <div class="d-flex align-items-start">
                        <img src="{{ asset('images/users/profile.jpg') }}"
                             class="rounded-circle img-thumbnail me-3 flex-grow-1"
                             alt="profile-image" style="width: 150px;">

                        <div class="flex-grow-1">
                            <h4 class="m-0">{{ $user->name }}</h4>
                            <p class="text-muted">
                                <i class="fa fa-info-circle me-2"></i>Information
                            </p>

                            <ul class="list-unstyled mb-0">
                                <li class="mb-2">
                                    <strong>AP/F Number (Username): </strong>
                                    <span>{{ $user->username }}</span>
                                </li>
                                <li class="mb-2">
                                    <strong>Category: </strong>
                                    <span>{{ $user->student_type }}</span>
                                </li>
                                <li class="mb-2">
                                    <strong>Command: </strong>
                                    <span>{{ $user->command }}</span>
                                </li>
                                <li class="mb-2">
                                    <strong>Current Course: </strong>
                                    <span> - </span>
                                </li>
                                <li class="mb-2">
                                    <strong>Gender: </strong>
                                    <span>{{ $user->gender }}</span>
                                </li>
                                <li class="mb-2">
                                    <strong>State Of Origin: </strong>
                                    <span>{{ $user->state }}</span>
                                </li>
                                <li class="mb-2">
                                    <strong>Qualification: </strong>
                                    <span>{{ $user->qualification }}</span>
                                </li>
                                <li class="mb-2">
                                    <strong>Birth Year: </strong>
                                    <span>{{ $user->birth_year }}</span>
                                </li>
                                <li class="mb-2">
                                    <strong>Date Of Enlistment: </strong>
                                    <span>{{ $user->enlistment_date }}</span>
                                </li>
                                <li class="mb-2">
                                    <strong>Date Of Promotion: </strong>
                                    <span>{{ $user->promotion_date }}</span>
                                </li>
                                <li class="mb-2">
                                    <strong>Date Of Documentation: </strong>
                                    <span>{{ $user->created_at }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="col-sm-4">
            <x-card title="Course mates">
                <ul class="list-group mb-0 user-list">
                    <li class="list-group-item">
                        <a href="#" class="user-list-item">
                            <div class="user avatar-sm float-start me-2">
                                <img src="{{ asset('images/users/user-2.jpg') }}" alt=""
                                    class="img-fluid rounded-circle">
                            </div>
                            <div class="user-desc">
                                <h5 class="name mt-0 mb-1">Michael Zenaty</h5>
                                <p class="desc text-muted mb-0 font-12">Enugu Command</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </x-card>

        </div>
    </div>
@endsection
