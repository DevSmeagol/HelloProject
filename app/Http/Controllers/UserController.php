<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = Customer::all();
        return view('user.index', compact('users'));
        

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('user.create');
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
    public function show(Customer $user)
    {
        //
        //$user = Customer::find($id);
        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function test()
    {
        //
        
        return view('user.create');
        

    }
    public function testPost()
    {
        //
        Customer::create(['firstName'=> request('Firstname'),'lastName'=> request('Lastname'),'idCard'=> request('Idcard'),'tel'=> request('Tel'),'idLine'=> request('Idline'),'address'=> request('Address')]);
        // Customer::create(request(['Firstname','Lastname','Idcard','Tel','Idcard','Address'])); //null
        // $post = new Customer;
        // $post->firstName = request('Firstname');
        // $post->lastName = request('Lastname');
        // $post->idCard = request('Idcard');
        // $post->tel = request('Tel');
        // $post->idLine = request('Idline');
        // $post->address = request('Address');

        // $post->save();

        return redirect('/users');

    }
}
