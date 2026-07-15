<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Counter;
use App\Models\History;
use App\Models\Partner;
use App\Models\ProductCategory;
use App\Models\Slider;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $counters = Counter::query()->get(['id', 'amount']);
        $historyItems = History::query()
            ->where('status', History::IS_ACTIVE)
            ->get(['id', 'year']);
        $partners = Partner::query()
            ->where('status', Partner::IS_ACTIVE)
            ->get(['id', 'image']);
        $productCategories = ProductCategory::query()
            ->where('status', ProductCategory::IS_ACTIVE)
            ->where('main_page_show', ProductCategory::SHOW_IN_MAIN_PAGE)
            ->get(['id', 'slug','icon']);

        $sliders = Slider::query()
            ->where('status', Slider::IS_ACTIVE)
            ->get(['id', 'image']);

        return view('frontend.home', [
            'counters' => $counters,
            'historyItems' => $historyItems,
            'partners' => $partners,
            'productCategories' => $productCategories,
            'sliders' => $sliders,
        ]);
    }
}
