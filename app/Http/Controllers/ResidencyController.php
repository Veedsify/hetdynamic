<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImmigrationService;
use Illuminate\Support\Facades\Log;

class ResidencyController extends Controller
{
    //
    public function showResidencyPagesDetails($pageId)
    {
        $immigrationService = ImmigrationService::with([
            'highlights',
            'benefits',
            'requirements',
            'secondRequirements',
            'mandatoryRequirements',
            'timelineOfEvents',
        ])->where([
            'slug' => $pageId,
            'status' => true
        ])->first();

        if (!$immigrationService) {
            abort(404);
        }

        return view('pages.residency-details', [
            'pageId' => $pageId,
            'thisService' => $immigrationService
        ]);
    }

    public function showResidencyPage(Request $request)
    {
        return view("pages.residency");
    }
}
