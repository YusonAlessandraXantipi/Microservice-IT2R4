<?php

namespace App\Http\Controllers;

use App\Models\UserJob; // Your model is located inside the Models folder
use Illuminate\Http\Response; // Response components
use App\Traits\ApiResponser; // Standardized API response handling
use Illuminate\Http\Request; // Handling HTTP requests in Lumen
use DB; // If not using Lumen Eloquent, you can use the DB component in Lumen

class UserJobController extends Controller
{
    // Use the ApiResponser trait
    use ApiResponser;

    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        $usersjob = UserJob::all();
        return $this->successResponse($usersjob);
    }

    public function show($id)
    {
        $userjob = UserJob::findOrFail($id);
        return $this->successResponse($userjob);
    }
}