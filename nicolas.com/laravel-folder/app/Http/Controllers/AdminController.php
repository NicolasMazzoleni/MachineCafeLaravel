<?php

namespace App\Http\Controllers;

use App\User;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::orderBy('name', 'ASC')->get();

        $data = ['users' => $users];

        return view('admin', $data);
    }


    public function details($id)
    {
        $user = User::find($id);
        $data = ['user' => $user];
        return view('detailsUser', $data);
    }


    public function update($id)
    {

        $modification = User::find($id);
        $modification->name = request('name');
        $modification->type = request('type');
        $modification->save();
        return redirect('/admin');


    }


    public function delete($id)
    {
        $delete = User::find($id);
        $delete->delete();
        return redirect('/admin');
    }

}
