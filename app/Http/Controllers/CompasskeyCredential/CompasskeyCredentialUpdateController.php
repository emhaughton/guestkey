<?php

namespace App\Http\Controllers\CompasskeyCredential;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompasskeyCredentialRequest;
use App\Models\CompasskeyCredential;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CompasskeyCredentialUpdateController extends Controller
{

    public function __invoke(CompasskeyCredentialRequest $request): RedirectResponse
    {

        $data = $request->all();
        $userId = Auth::user()->id;
        $data['user_id'] = $userId;

        CompasskeyCredential::updateOrCreate(
            ['user_id' => $userId],
            $data
        );

        return Redirect::route('profile.edit');
    }
}
