<?php

namespace App\Http\Livewire\Admin;

use App\Mail\ReplyContactFormWebsite;
use App\Models\message;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contacts extends Component
{
    public $replyShowModel;
    public $ShowModel;
    public $modelId;
    public $rep;
    public $reply_message;
    public function reply()
    {
        message::find($this->modelId)->update([
            'reply_by' => \Auth::id(),
            'status' => 1,
            'reply_message' => $this->reply_message,
        ]);
//        dd($this->rep->email);
//        Mail::to($this->rep->email)->send(new ReplyContactFormWebsite($this->reply_message));
        $this->reply_message ='';
        $this->replyShowModel = false;

        session()->flash('message', 'Trả lời thành công');

    }

    public function replyShowModel($id)
    {
        $this->modelId = $id;
        $this->rep = message::find($id);
        $this->replyShowModel = true;
    }
    public function ShowModel($id)
    {
        $this->modelId = $id;
        $this->rep = message::find($id);
        $this->ShowModel = true;
    }


    public function render()
    {
        $contacts = message::orderBy('created_at', 'Desc')->paginate(10);

        return view('livewire.admin.contacts',[
            'contacts' => $contacts,
        ]);
    }
}
