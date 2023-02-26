<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;

class ContactIndex extends Component
{
    use WithPagination;

    public $statusUpdate = false;
    public $paginate = 5;
    public $search;

    protected $listeners = [
        'contactStored',
        'contactUpdated'
    ];

    public function render()
    {
        if ($this->search === null) {
            $data = Contact::latest()->paginate($this->paginate);
        }else{
            $data = Contact::latest()->where('name', 'like', '%' . $this->search . '%')->paginate($this->paginate);
        }
        return view('livewire.contact-index', ['contacts' => $data]);
    }

    public function getContact($id)
    {
        $this->statusUpdate = true;

        $contact = Contact::find($id);

        $this->emit('getContact', $contact);
    }

    public function destroy($id)
    {
        if ($id) {
            $contact = Contact::find($id);
            $contact->delete();
            session()->flash('message', 'Contact berhasil dihapus');
        }
    }

    public function contactStored($contact)
    {
        // dd($contact);
        session()->flash('message', 'Contact ' . $contact['name'] . ' berhasil disimpan');
    }

    public function contactUpdated($contact)
    {
        // dd($contact);
        session()->flash('message', 'Contact ' . $contact['name'] . ' berhasil diupdate');
    }
}
