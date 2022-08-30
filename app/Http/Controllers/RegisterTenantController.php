<?php

namespace App\Http\Controllers;

use App\Jobs\CreateTenantAdminJob;
use App\Models\Tenant;
use Illuminate\Http\Request;

class RegisterTenantController extends Controller
{
    public function create()
    {
        return view('tenant.register');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            "store" => ['required'],
            "domain" => ['required', 'alphanum'],
            "name" => ['required'],
            "email" => ['required', 'string', 'email', 'max:255'],
            "password" => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $data['domain'] = strtolower($data['domain']) . "." . config('tenancy.central_domains')[0];
        $data['password'] = bcrypt($request->password);

        $tenant = Tenant::create($data);
        $tenant->domains()->create(["domain" => $data["domain"]]);
        return redirect()->back()->with('success', 'Store Registered Successfully');
    }
}
