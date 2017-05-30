<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController {

    use AuthorizesRequests,
        DispatchesJobs,
        ValidatesRequests;

    /**
     * 
     * @param array $errors
     * @return type
     */
    protected function redirectBackWithErrors($errors) {
        if ($request->expectsJson()) {
            return response()->json($errors, 422);
        }

        return redirect()->back()->withErrors($errors);
    }

    protected function redirectWithMessages($messages, $redirectTo = null) {
        if ($redirectTo) {
            return redirect($redirectTo)->with('messages', $messages);
        }
        return redirect()->back()->with('messages', $messages);
    }

}
