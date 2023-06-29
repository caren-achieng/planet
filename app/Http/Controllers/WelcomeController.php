<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\News;
use App\Models\SiteIdentity;
use App\Models\Target;
use App\Models\TargetsAndMilestones;
use App\Models\updateAndHappening;
use Illuminate\Http\Request;
use Illuminate\View\View;

class WelcomeController extends Controller
{
    public function index():View
    {
        $siteIdentities =  SiteIdentity::orderBy('id', 'desc')->get();
        $targetsAndMilestones =  TargetsAndMilestones::orderBy('id', 'desc')->limit(4)->get();
        $target = Target::first();
        $news = News::first();
        $updatesAndHappenings = updateAndHappening::orderBy('id', 'desc')->limit(3)->get();

        return view('welcome', compact('siteIdentities', 'targetsAndMilestones', 'target', 'news', 'updatesAndHappenings'));
    }
}
