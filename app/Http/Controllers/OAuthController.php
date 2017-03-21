<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OAuthController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    function authorizeLink(Request $request)
    {
        $state = $request->session()->get('csrf_token');
        $request->session()->put('state', $state);

        $query = implode('&', [
            'scope=identity.basic,identity.email,identity.team,identity.avatar',
            'client_id='.config('services.slack.client_id'),
            'redirect_uri='.config('services.slack.redirect_uri'),
            'state='.$state,
        ]);

        return redirect("https://slack.com/oauth/authorize?{$query}");
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    function callback(Request $request)
    {
        if (! $this->verifyState($request)) {
            $request->session()->flash('error', 'Failed verification.');
            return redirect('/auth/login');
        }

        $accessToken = $this->getAccessToken($request->input('code'));

        dd($accessToken);

        return redirect('/members');
    }

    /**
     * @param Request $request
     * @return bool
     */
    private function verifyState(Request $request)
    {
        return $request->session()->pull('state') === $request->input('state');
    }

    /**
     * @param string $code
     * @return string
     */
    private function getAccessToken($code)
    {
        // TODO: Get access token.
        return $code;
    }
}
