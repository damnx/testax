<?php

namespace App\Http\Controllers\Home;

use App\Http\Requests\ContactRequest as StoreRequest;
// use App\Http\Controllers\Controller;
use App\Models\Contact;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Illuminate\Http\Request;

class HomeController extends CrudController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.home');
    }

    public function addContact(StoreRequest $request)
    {
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        if($contact->save()){
            $data = [
                "status" => 0,
                "data"=>[],
                "message"=>'Gửi thành công'
            ];
        }else{
            $data = [
                "status" => 1,
                "data"=>[],
                "message"=>'Gửi thất bại'
            ];
        }

        return view('pages.home',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
