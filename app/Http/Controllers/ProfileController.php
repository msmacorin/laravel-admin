<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\ProfileService;

class ProfileController extends Controller {

    use \Illuminate\Foundation\Auth\SendsPasswordResetEmails;
    
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(Request $request) {
        return view('pages.profile')->with('states', $this->getStates());
    }

    public function save(Request $request, ProfileService $service) {
        $user = $request->only('id', 'name');
        $profile = $request->only('phone', 'zip_code', 'address', 'city', 'state');
        $response = $service->updateProfile($user, $profile);
        if ($response->isError()) {
            return back()->withErrors($response->message());
        }
        return back()->with('messages', $response->message());
    }
    
    protected function sendResetLinkResponse($response) {
        return redirect('/profile')->with('messages', trans('passwords.sent'));
    }
    
    private function getStates() {
        $states = [
            'AC' => 'Acre',
            'AL' => 'Alagoas',
            'AP' => 'Amapá',
            'AM' => 'Amazonas',
            'BA' => 'Bahia',
            'CE' => 'Ceará',
            'DF' => 'Distrito Federal',
            'ES' => 'Espírito Santo',
            'GO' => 'Goías',
            'MA' => 'Maranhão',
            'MT' => 'Mato Grosso',
            'MS' => 'Mato Grosso do Sul',
            'MG' => 'Minas Gerais',
            'PA' => 'Pará',
            'PB' => 'Paraíba',
            'PR' => 'Parana',
            'PE' => 'Pernambuco',
            'PI' => 'Piauí',
            'RJ' => 'Rio de Janeiro',
            'RN' => 'Rio Grande do Norte',
            'RS' => 'Rio Grande do Sul',
            'RO' => 'Rondônia',
            'RR' => 'Roraima',
            'SC' => 'Santa Catarina',
            'SP' => 'São Paulo',
            'SE' => 'Sergipe',
            'TO' => 'Tocantins',
        ];
        return $states;
    }

}
