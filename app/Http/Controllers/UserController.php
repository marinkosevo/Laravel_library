<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();

        return view('user.index', ['users' => $users]);
    }
    

    
    public function getUspjeh()
    {
        return view('uspjeh');
    }
    public function getPretragaUspjeh()
    {
        return view('pretraga-uspjeh');
    }
    public function getKnjige()
    {
        return view('pretraga-knjiga');
    }
    public function getMoje()
    {
        return view('moje-knjige');
    }
    public function getOdjava()
    {
        return view('odjava');
    }
    public function getPocetna()
    {
        return view('pocetna');
    }
    public function getDobrodosli()
    {
        return view('dobrodosli');
    }
    public function postRegistracija(Request $request)
    {
        $this->validate($request, [
           'email' => 'required|email|unique:users',
             'name' => 'required|max:120',
             'lastname' => 'required|max:120',
             'username' => 'required|max:120|unique:users',
             'password' => 'required|min:6',
        ]);
        $email = $request['email'];
        $name = $request['name'];
        $lastname = $request['lastname'];
        $username = $request['username'];
        $password = bcrypt($request['password']);
        
        $user = new User();
        $user->email = $email;
        $user->name = $name;
        $user->lastname = $lastname;
        $user->username = $username;
        $user->password = $password;
        
        $user->save();
        
        return redirect()->route('pretraga-uspjeh');
    }
    
    public function postPretraga(Request $request)
    {
        $username =  Auth::user()->username;
        $ISBN = $request['ISBN'];
        $kolicina = DB::table('knjige')->where('ISBN', '1084504717')->value('kolicina');
        if ($kolicina > 0) {
            DB::insert('insert into rezervirane (naslov, autor, ISBN) select naslov, autor, ISBN from knjige where ISBN = '.$ISBN.'');
            DB::update('update rezervirane set username = "' .$username. '" where ISBN = '.$ISBN.'');
            DB::update('update knjige set kolicina = kolicina - 1 where ISBN = '.$ISBN.'');
         
            return redirect()->route('pretraga-uspjeh');
        } else {
            return redirect()->route('dobrodosli');
        }
    }
    public function postPrijava(Request $request)
    {
        $this->validate($request, [
             'username' => 'required|max:120',
             'password' => 'required|min:6',
        ]);
        if (Auth::attempt(['username' => $request['username'], 'password' => $request['password']])) {
            if (Auth::user()->admin == '1') {
                return view('admin');
            } else {
                return redirect()->route('dobrodosli');
            }
        }
        return redirect()->back();
    }
    public function postOdjava(Request $request)
    {
        Auth::logout();
        return view('odjava');
    }
    
    public function get_results($keyword)
    {
        return View::make('rezultati')
            ->with('title', 'Rezultati pretrage')
            ->with('knjiga', knjiga::search($keyword));
    }
    
    public function post_search()
    {
        $keyword = Input::get('keyword');
        return Redirect::to('rezultati/'.$keyword);
    }
}
