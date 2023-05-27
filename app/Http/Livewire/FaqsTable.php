<?php

namespace App\Http\Livewire;

use App\Models\FAQ;
use Livewire\Component;
use Livewire\WithPagination;

class FaqsTable extends Component
{
    use WithPagination;
    public string $search = '';

    public string $orderBy = 'faq_question';
    public string $orderDir = 'ASC';

    public array $selectedIds = [];
    protected $queryString = [
        'search' => ['except' => '']
    ];
    public function render()
    {
        return view('livewire.faqs-table', [
            'faqs' => FAQ::where('faq_question', 'like', "%{$this->search}%")
                ->orWhere('faq_answer', 'like', "%{$this->search}%")
                ->orderBy($this->orderBy, $this->orderDir)
                ->paginate(10)
        ]);
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function setOrderBy(string $field)
    {
        if ($field === $this->orderBy) {
            $this->orderDir = ($this->orderDir === 'ASC') ? 'DESC' : 'ASC';
        } else {
            $this->reset('orderDir');
            $this->orderBy = $field;
        }
    }
    public function OpenEditModal() {

    }
}