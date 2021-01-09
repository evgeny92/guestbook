<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SignatureResource;
use App\Models\Signature;
use Illuminate\Http\Request;

class SignatureController extends Controller
{
    /**
     * Return a paginated list of signatures
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $signatures = Signature::latest()
            ->ignoreFlagged()
            ->paginate(20);

        return SignatureResource::collection($signatures);
    }

    /**
     * Fetch and return signature
     * @param Signature $signature
     * @return SignatureResource
     */
    public function show(Signature $signature)
    {
        return new SignatureResource($signature);
    }

    /**
     * Validate and save a new signature to the db
     * @param Request $request
     * @return SignatureResource
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $signature = $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'email' => 'required|email',
            'body' => 'required|min:3'
        ]);

        $signature = Signature::create($signature);

        return new SignatureResource($signature);
    }
}
