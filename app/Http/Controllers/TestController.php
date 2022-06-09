<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;


class TestController extends Controller

{

    /**

     * Write Your Code..

     *

     * @return string

    */

    public function index()

    {

        $users = User::paginate(5);
        return view('welcome',compact('users'));

    }

}