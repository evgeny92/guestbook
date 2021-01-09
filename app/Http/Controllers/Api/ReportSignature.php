<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Signature;
use Illuminate\Http\Request;

class ReportSignature extends Controller
{
    /**
     * Flag given signature
     * @param Signature $signature
     * @return Signature
     */
    public function update(Signature $signature)
    {
        $signature->flag();

        return $signature;
    }
}
