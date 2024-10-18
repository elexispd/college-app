<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class StudentList extends Component
{
    use WithPagination;
    public $status = 'all';
    public $ap_number = '';
    public $perPage = 2;
    public $search = '';

    // Updating query string to persist search parameters across pagination
    protected $queryString = [
        'status' => ['except' => 'all'],
        'ap_number' => ['except' => ''],
        'search' => ['except' => ''],
        'page' => ['except' => 1]
    ];

    public function updatingSearch()
    {
        $this->resetPage(); // Reset pagination when search input changes
    }

    public function mount()
    {
        if (
            (empty(request()->input('status')) &&
            empty(request()->input('ap_number')) &&
            (empty(request()->input('year')) || empty(request()->input('number'))))
        ) {
            session()->flash('error', 'Invalid search request');
            return $this->redirectRoute('student.search');
        }
    }

    public function render()
    {

        $query = User::query();

        // Handle status search
        if ($this->status) {
            switch ($this->status) {
                case 'active':
                    $query->where('status', true);
                    break;
                case 'inactive':
                    $query->where('status', false);
                    break;
                default:
                    $query->where('is_staff', false);
            }
        }

        // Handle AP/F Number search
        if ($this->ap_number) {
            $query->where('ap_number', $this->ap_number);
        }


        $students = $query->search($this->search)->latest()->paginate($this->perPage);

        return view('livewire.student-list', compact('students'));
    }




}
