<?php

namespace App\Http\Livewire\Backend\BookCategory;

use App\BookCategory;
use Livewire\Component;
use phpDocumentor\Reflection\Types\Null_;

class Index extends Component
{
    public $name,$description;

    public function rules(){
        return [
            'name'=> 'required|string',
            'description'=>'required|string',


        ];
    }
    public function storeBook(){
        $validatedData=$this->validate();
        BookCategory::create([
            'name'=> $this->name,
            'description' => $this->description,
        ]);
        session()->flash('message','Book Added Successfully');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }
    public function resetInput(){
        $this->name=NULL;
        $this->description=NULL;
    }
    public function render()
    {
        return view('livewire.backend.book-category.index');
    }
}
