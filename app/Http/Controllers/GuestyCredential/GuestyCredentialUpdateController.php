<?php

namespace App\Http\Controllers\GuestyCredential;

use App\Http\Controllers\Controller;
use App\Http\Requests\GuestyCredentialRequest;
use App\Models\GuestyCredential;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class GuestyCredentialUpdateController extends Controller
{

    public function __invoke(GuestyCredentialRequest $request): RedirectResponse
    {

        $data = $request->all();
        $userId = Auth::user()->id;
        $data['user_id'] = $userId;

        GuestyCredential::updateOrCreate(
            ['user_id' => $userId],
            $data
        );

        return Redirect::route('profile.edit');
    }
}
