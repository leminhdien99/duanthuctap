<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ListContactController extends Controller
{
    public $Contact;

    public function __construct()
    {
        $this->contact = new Contact();
    }
    function listContact(){
        $condition = [
                'delete' => 0,
        ];
        $query =$this->contact->listContact($condition);
        return view('Admin.Contact.ListContact', compact('query'));
    }
    public function statusContact($id){
        $condition = [
            'id' => $id
        ];
        $query = $this->contact->firstContact($condition);
        if ($query->status == 0){
            $value= [
                'status' => 1
            ];
        }else{
            $value= [
                'status' => 0
            ];
        }
        $this->contact->updateContact($condition,$value);
        return back();
    }
    function listDeleteContact()
    {
        $condition = [
            'delete' => 1,
        ]; //
        $data = $this->contact->listContact($condition);
        return view('admin.contact.DeleteContact', ['page' => 'contact', 'query' => $data]);
    }
}
