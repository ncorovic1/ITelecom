<?php

namespace App\Http\Controllers;

use View;
use App\Models\LoginAttempt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\PageVisitController;

class LoginAttemptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function logLoginAttempt($request, $login_result)
    {
        $this->create($request, $login_result);
    }

    protected function create(Request $request, $login_result)
    {
        LoginAttempt::create(
            [
                'email' => $request->email,
                'ip_address' => $_SERVER['REMOTE_ADDR'],
                'login_result' => $login_result,
            ]
        );
    }

    public function getPlus() {

        //$request = new Request();
        //$page_visit_controller = new PageVisitController();
        //$page_visit_controller->create($request);
        
        return LoginAttemptController::getAll();
    }

    public function getAll() {

        

        $email = Input::get('email', '');
        $created_at = Input::get('created_at', '');

        if ($created_at == 'Najstarije') {
            $login_attempts = LoginAttempt::orderBy('created_at', 'asc');
        } else {
            $login_attempts = LoginAttempt::orderBy('created_at', 'desc');
        }
        
        if ($email != '') {
            $login_attempts = $login_attempts->where('email', 'like', $email.'%')
                                        ->orWhere('email', 'like', '%'.$email)
                                        ->orWhere('email', 'like', '%'.$email.'%');
        }

        $login_attempts = $login_attempts->paginate(30);

        return View::make('dnevnik-prijava')->with('login_attempts', $login_attempts);
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
     * @param  \App\LoginAttempt  $loginAttempt
     * @return \Illuminate\Http\Response
     */
    public function show(LoginAttempt $loginAttempt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LoginAttempt  $loginAttempt
     * @return \Illuminate\Http\Response
     */
    public function edit(LoginAttempt $loginAttempt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LoginAttempt  $loginAttempt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LoginAttempt $loginAttempt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LoginAttempt  $loginAttempt
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoginAttempt $loginAttempt)
    {
        //
    }
}
