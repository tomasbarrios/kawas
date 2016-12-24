<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCoffeeOriginRequest;
use App\Http\Requests\UpdateCoffeeOriginRequest;
use App\Repositories\CoffeeOriginRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CoffeeOriginController extends AppBaseController
{
    /** @var  CoffeeOriginRepository */
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

        return view('coffee_origins.index')
            ->with('coffeeOrigins', $coffeeOrigins);
    }

    /**
     * Show the form for creating a new CoffeeOrigin.
     *
     * @return Response
     */
    public function create()
    {
        return view('coffee_origins.create');
    }

    /**
     * Store a newly created CoffeeOrigin in storage.
     *
     * @param CreateCoffeeOriginRequest $request
     *
     * @return Response
     */
    public function store(CreateCoffeeOriginRequest $request)
    {
        $input = $request->all();

        $coffeeOrigin = $this->coffeeOriginRepository->create($input);

        Flash::success('Coffee Origin saved successfully.');

        return redirect(route('coffeeOrigins.index'));
    }

    /**
     * Display the specified CoffeeOrigin.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $coffeeOrigin = $this->coffeeOriginRepository->findWithoutFail($id);

        if (empty($coffeeOrigin)) {
            Flash::error('Coffee Origin not found');

            return redirect(route('coffeeOrigins.index'));
        }

        return view('coffee_origins.show')->with('coffeeOrigin', $coffeeOrigin);
    }

    /**
     * Show the form for editing the specified CoffeeOrigin.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $coffeeOrigin = $this->coffeeOriginRepository->findWithoutFail($id);

        if (empty($coffeeOrigin)) {
            Flash::error('Coffee Origin not found');

            return redirect(route('coffeeOrigins.index'));
        }

        return view('coffee_origins.edit')->with('coffeeOrigin', $coffeeOrigin);
    }

    /**
     * Update the specified CoffeeOrigin in storage.
     *
     * @param  int              $id
     * @param UpdateCoffeeOriginRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCoffeeOriginRequest $request)
    {
        $coffeeOrigin = $this->coffeeOriginRepository->findWithoutFail($id);

        if (empty($coffeeOrigin)) {
            Flash::error('Coffee Origin not found');

            return redirect(route('coffeeOrigins.index'));
        }

        $coffeeOrigin = $this->coffeeOriginRepository->update($request->all(), $id);

        Flash::success('Coffee Origin updated successfully.');

        return redirect(route('coffeeOrigins.index'));
    }

    /**
     * Remove the specified CoffeeOrigin from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $coffeeOrigin = $this->coffeeOriginRepository->findWithoutFail($id);

        if (empty($coffeeOrigin)) {
            Flash::error('Coffee Origin not found');

            return redirect(route('coffeeOrigins.index'));
        }

        $this->coffeeOriginRepository->delete($id);

        Flash::success('Coffee Origin deleted successfully.');

        return redirect(route('coffeeOrigins.index'));
    }
}
