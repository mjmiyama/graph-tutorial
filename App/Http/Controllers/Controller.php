<?php

namespace App\Http\Controllers;

class Controller
{
public function loadViewData()
{
    $viewData = [];

    // Check for flash errors
    if (session('error')) {
        $viewData['error'] = session('error');
        $viewData['errorDetail'] = session('errorDetail');
    }

    // Check for logged on user
    if (session('userName'))
    {
        $viewData['userName'] = session('userName');
        $viewData['userEmail'] = session('userEmail');
        $viewData['userTimeZone'] = session('userTimeZone');
    }

    return $viewData;
}
}
