<?php

namespace App\Http\Controllers\Admin;
use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\ContactRequest as StoreRequest;
// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ContactRequest as UpdateRequest;

class ContactController extends CrudController
{

    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Contact');
        $this->crud->setRoute(config('backpack.base.route_prefix').'/contact');
        $this->crud->setEntityNameStrings('contact', 'contacts');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        // $this->crud->setFromDb();

        $this->crud->addColumns( ['name', 'email', 'phone', 'message']);
        $this->crud->addField('name');
        $this->crud->addField('email');
        $this->crud->addField('phone');
        $this->crud->addField('message');

        $this->crud->allowAccess('revisions');

    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
