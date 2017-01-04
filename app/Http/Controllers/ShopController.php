<?php

namespace App\Http\Controllers;

use App\Repositories\CoffeeOriginRepository;

use App\Http\Requests;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;

class ShopController extends Controller
{
  private $coffeeOriginRepository;

  public function __construct(CoffeeOriginRepository $coffeeOriginRepo)
  {
      $this->coffeeOriginRepository = $coffeeOriginRepo;
  }

  /**
   * Display a listing of the CoffeeOrigin.
   *
   * @param Request $request
   * @return Response
   */
  public function index(Request $request)
  {
      $this->coffeeOriginRepository->pushCriteria(new RequestCriteria($request));
      $coffeeOrigins = $this->coffeeOriginRepository->all();

      return view('shop.shop')
          ->with('coffeeOrigins', $coffeeOrigins);
  }

  public function show($slug)
  {
      $coffeOrigin = CoffeeOrigin::where('slug', $slug)->firstOrFail();
      // $interested = CoffeeOrigin::where('slug', '!=', $slug)->get()->random(4);

      return view('shop.show')->with(['coffeOrigin' => $coffeOrigin]);//, 'interested' => $interested]);
  }
}