<?php
/**
 * Created by PhpStorm.
 * User: aholsinger
 * Date: 9/7/16
 * Time: 9:46 PM
 */

namespace Novate\Http\Controllers;


class DashboardController extends Controller {

    public function index() {
        return view('dashboard.index');
    }

}