<?php

namespace App\Http\Controllers;

use View;
use App\Models\PageVisit;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Input;

class PageVisitController extends Controller
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

    public function getAll() {

        $email = Input::get('email', '');
        $created_at = Input::get('created_at', '');

        if ($created_at == 'Najstarije') {
            $page_visits = PageVisit::orderBy('created_at', 'asc');
        } else {
            $page_visits = PageVisit::orderBy('created_at', 'desc');
        }
        
        if ($email != '') {
            $page_visits = $page_visits->where('email', 'like', $email.'%')
                                        ->orWhere('email', 'like', '%'.$email)
                                        ->orWhere('email', 'like', '%'.$email.'%');
        }

        $page_visits = $page_visits->paginate(30);

        return View::make('dnevnik-posjeta')->with('page_visits', $page_visits);
    }

    public function getAllPDF() {

        /*$email = Input::get('email', '');
        $created_at = Input::get('created_at', '');

        if ($created_at == 'Najstarije') {
            $page_visits = PageVisit::orderBy('created_at', 'asc');
        } else {
            $page_visits = PageVisit::orderBy('created_at', 'desc');
        }
        
        if ($email != '') {
            $page_visits = $page_visits->where('email', 'like', $email.'%')
                                        ->orWhere('email', 'like', '%'.$email)
                                        ->orWhere('email', 'like', '%'.$email.'%');
        }*/

        $page_visits = PageVisit::paginate(30);

        return View::make('posjete-pdf')->with('page_visits', $page_visits);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $email = null;
        if (Auth::user()) {
            $email = Auth::user()->email;
        }

        $result = 'AUTHORIZED';

        if (!Auth::user()) {
            $result = 'INTERCEPTED';
        }

        PageVisit::create(
            [
                'email' => $email,
                'route' => $request->getRequestURI(),
                'ip_address' => $_SERVER['REMOTE_ADDR'],
                'result' => $result,
            ]
        );

        return view($request->getRequestURI());
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
     * @param  \App\PageVisit  $pageVisit
     * @return \Illuminate\Http\Response
     */
    public function show(PageVisit $pageVisit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PageVisit  $pageVisit
     * @return \Illuminate\Http\Response
     */
    public function edit(PageVisit $pageVisit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PageVisit  $pageVisit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PageVisit $pageVisit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PageVisit  $pageVisit
     * @return \Illuminate\Http\Response
     */
    public function destroy(PageVisit $pageVisit)
    {
        //
    }
}
