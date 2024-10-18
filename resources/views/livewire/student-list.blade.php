<div class="responsive-table-plugin">
    <div class="table-rep-plugin">
        <div class="table-responsive" data-pattern="priority-columns">
            <input type="text" wire:model.live.debounce.300ms="search" class="form-control p-1" style="width: 200px;" >
            <table id="tech-companies-1" class="table table-striped">
                <thead>
                <tr>
                    <th>S/N</th>
                    <th data-priority="1">Name</th>
                    <th data-priority="3">AP Number (Username)</th>
                    <th data-priority="1">Gender</th>
                    <th data-priority="3">State</th>
                    <th data-priority="3">Command</th>
                    <th data-priority="3">Course</th>
                    <th data-priority="6">Documention Date</th>
                    <th data-priority="6">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <th> {{ $loop->iteration }} </th>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->username }}</td>
                            <td>{{ $student->gender }}</td>
                            <td>{{ $student->state }}</td>
                            <td>{{ $student->command }}</td>
                            <td>2024 Course 2</td>
                            <td>{{ $student->created_at }}</td>
                            <td>
                                <a href="{{ route('profile.show', ['user' => $student, 'name' => str_replace(' ', '-', $student->name)]) }}" class="btn btn-xs btn-info">View</a>
                                <a href="#" class="btn btn-xs btn-warning" wire:click="$dispatch('show-edit-modal', { student_id: {{ $student->id }} })" data-bs-toggle="modal" data-bs-target="#con-close-modal" >Edit</a>
                                <a href="#" class="btn btn-xs btn-danger">Delete</a>
                            </td>
                        </tr>

                    @endforeach
                 </tbody>
            </table>
            <div>
                @if (count($students) > 1)
                    <div>
                        <label for="perPage">Per Page</label>
                        <select id="perPage" class="form-control d-inline" style="width: 40px;" wire:model.live="perPage" >
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                @endif


                {{ $students->links('vendor.livewire.bootstrap') }}
            </div>

            <!-- Include the modal outside the loop -->
            <livewire:form-modal :key="'edit-student-modal'" />

        </div> <!-- end .table-responsive -->

    </div> <!-- end .table-rep-plugin-->
</div>
