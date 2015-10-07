<?php
/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 26/09/2015
 * Time: 01:26
 */

namespace CodeAgenda\Http\Controllers;


class IndexController extends Controller
{

    public function index()
    {
        return view('agenda');
    }

}