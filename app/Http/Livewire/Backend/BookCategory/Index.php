<?php

namespace App\Http\Livewire\Backend\BookCategory;

use App\BookCategory;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme ='bootstrap';
    public $name,$description;

    // protected function rules()
    // {
    //     return [
    //         'name' => 'required|min:6',
    //         'description' => 'required',
    //     ];
    // }
    // public function updated($fields)
    // {
    //     $this->validateOnly($fields);
    // }
    public function resetInput(){
        $this->name='';
        $this->description=NULL;
    }
    public function storeBook(){
        $validatedData=$this->validate([
            'name' => 'required|min:6',
            'description' => 'required',
        ]);
        BookCategory::create($validatedData);
        session()->flash('message','Book Added Successfully');

        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }
    
    public function render()
    {
        $books = BookCategory::orderBy('id','DESC')->paginate(1);
        return view('livewire.backend.book-category.index',['books'=> $books]);
    }
}
