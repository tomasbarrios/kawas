<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCoffeeOriginsRequest;
use App\Http\Requests\UpdateCoffeeOriginsRequest;
use App\Repositories\CoffeeOriginsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CoffeeOriginsController extends AppBaseController
{
    /** @var  CoffeeOriginsRepository */
    private $coffeeOriginsRepository;

    public function __construct(CoffeeOriginsRepository $coffeeOriginsRepo)
    {
        $this->coffeeOriginsRepository = $coffeeOriginsRepo;
    }

    /**
     * Display a listing of the CoffeeOrigins.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->coffeeOriginsRepository->pushCriteria(new RequestCriteria($request));
        $coffeeOrigins = $this->coffeeOriginsRepository->all();

        return view('coffee_origins.index')
            ->with('coffeeOrigins', $coffeeOrigins);
    }

    /**
     * Show the form for creating a new CoffeeOrigins.
     *
     * @return Response
     */
    public function create()
    {
        return view('coffee_origins.create');
    }

    /**
     * Store a newly created CoffeeOrigins in storage.
     *
     * @param CreateCoffeeOriginsRequest $request
     *
     * @return Response
     */
    public function store(CreateCoffeeOriginsRequest $request)
    {
        $input = $request->all();

        $coffeeOrigins = $this->coffeeOriginsRepository->create($input);

        Flash::success('Coffee Origins saved successfully.');

        return redirect(route('coffeeOrigins.index'));
    }

    /**
     * Display the specified CoffeeOrigins.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $coffeeOrigins = $this->coffeeOriginsRepository->findWithoutFail($id);

        if (empty($coffeeOrigins)) {
            Flash::error('Coffee Origins not found');

            return redirect(route('coffeeOrigins.index'));
        }

        return view('coffee_origins.show')->with('coffeeOrigins', $coffeeOrigins);
    }

    /**
     * Show the form for editing the specified CoffeeOrigins.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $coffeeOrigins = $this->coffeeOriginsRepository->findWithoutFail($id);

        if (empty($coffeeOrigins)) {
            Flash::error('Coffee Origins not found');

            return redirect(route('coffeeOrigins.index'));
        }

        return view('coffee_origins.edit')->with('coffeeOrigins', $coffeeOrigins);
    }

    /**
     * Update the specified CoffeeOrigins in storage.
     *
     * @param  int              $id
     * @param UpdateCoffeeOriginsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCoffeeOriginsRequest $request)
    {
        $coffeeOrigins = $this->coffeeOriginsRepository->findWithoutFail($id);

        if (empty($coffeeOrigins)) {
            Flash::error('Coffee Origins not found');

            return redirect(route('coffeeOrigins.index'));
        }

        $coffeeOrigins = $this->coffeeOriginsRepository->update($request->all(), $id);

        Flash::success('Coffee Origins updated successfully.');

        return redirect(route('coffeeOrigins.index'));
    }

    /**
     * Remove the specified CoffeeOrigins from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $coffeeOrigins = $this->coffeeOriginsRepository->findWithoutFail($id);

        if (empty($coffeeOrigins)) {
            Flash::error('Coffee Origins not found');

            return redirect(route('coffeeOrigins.index'));
        }

        $this->coffeeOriginsRepository->delete($id);

        Flash::success('Coffee Origins deleted successfully.');

        return redirect(route('coffeeOrigins.index'));
    }
}
