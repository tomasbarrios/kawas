<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLotsRequest;
use App\Http\Requests\UpdateLotsRequest;
use App\Repositories\LotsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class LotsController extends AppBaseController
{
    /** @var  LotsRepository */
    private $lotsRepository;

    public function __construct(LotsRepository $lotsRepo)
    {
        $this->lotsRepository = $lotsRepo;
    }

    /**
     * Display a listing of the Lots.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->lotsRepository->pushCriteria(new RequestCriteria($request));
        $lots = $this->lotsRepository->all();

        return view('lots.index')
            ->with('lots', $lots);
    }

    /**
     * Show the form for creating a new Lots.
     *
     * @return Response
     */
    public function create()
    {
        return view('lots.create');
    }

    /**
     * Store a newly created Lots in storage.
     *
     * @param CreateLotsRequest $request
     *
     * @return Response
     */
    public function store(CreateLotsRequest $request)
    {
        $input = $request->all();

        $lots = $this->lotsRepository->create($input);

        Flash::success('Lots saved successfully.');

        return redirect(route('lots.index'));
    }

    /**
     * Display the specified Lots.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $lots = $this->lotsRepository->findWithoutFail($id);

        if (empty($lots)) {
            Flash::error('Lots not found');

            return redirect(route('lots.index'));
        }

        return view('lots.show')->with('lots', $lots);
    }

    /**
     * Show the form for editing the specified Lots.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $lots = $this->lotsRepository->findWithoutFail($id);

        if (empty($lots)) {
            Flash::error('Lots not found');

            return redirect(route('lots.index'));
        }

        return view('lots.edit')->with('lots', $lots);
    }

    /**
     * Update the specified Lots in storage.
     *
     * @param  int              $id
     * @param UpdateLotsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLotsRequest $request)
    {
        $lots = $this->lotsRepository->findWithoutFail($id);

        if (empty($lots)) {
            Flash::error('Lots not found');

            return redirect(route('lots.index'));
        }

        $lots = $this->lotsRepository->update($request->all(), $id);

        Flash::success('Lots updated successfully.');

        return redirect(route('lots.index'));
    }

    /**
     * Remove the specified Lots from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $lots = $this->lotsRepository->findWithoutFail($id);

        if (empty($lots)) {
            Flash::error('Lots not found');

            return redirect(route('lots.index'));
        }

        $this->lotsRepository->delete($id);

        Flash::success('Lots deleted successfully.');

        return redirect(route('lots.index'));
    }
}
