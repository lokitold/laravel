<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateAlbum2Request;
use App\Http\Requests\UpdateAlbum2Request;
use App\Repositories\Album2Repository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class Album2Controller extends InfyOmBaseController
{
    /** @var  Album2Repository */
    private $album2Repository;

    public function __construct(Album2Repository $album2Repo)
    {
        $this->album2Repository = $album2Repo;
    }

    /**
     * Display a listing of the Album2.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->album2Repository->pushCriteria(new RequestCriteria($request));
        $album2s = $this->album2Repository->all();

        return view('album2s.index')
            ->with('album2s', $album2s);
    }

    /**
     * Show the form for creating a new Album2.
     *
     * @return Response
     */
    public function create()
    {
        return view('album2s.create');
    }

    /**
     * Store a newly created Album2 in storage.
     *
     * @param CreateAlbum2Request $request
     *
     * @return Response
     */
    public function store(CreateAlbum2Request $request)
    {
        $input = $request->all();

        $album2 = $this->album2Repository->create($input);

        Flash::success('Album2 saved successfully.');

        return redirect(route('album2s.index'));
    }

    /**
     * Display the specified Album2.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $album2 = $this->album2Repository->findWithoutFail($id);

        if (empty($album2)) {
            Flash::error('Album2 not found');

            return redirect(route('album2s.index'));
        }

        return view('album2s.show')->with('album2', $album2);
    }

    /**
     * Show the form for editing the specified Album2.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $album2 = $this->album2Repository->findWithoutFail($id);

        if (empty($album2)) {
            Flash::error('Album2 not found');

            return redirect(route('album2s.index'));
        }

        return view('album2s.edit')->with('album2', $album2);
    }

    /**
     * Update the specified Album2 in storage.
     *
     * @param  int              $id
     * @param UpdateAlbum2Request $request
     *
     * @return Response
     */
    public function update($id, UpdateAlbum2Request $request)
    {
        $album2 = $this->album2Repository->findWithoutFail($id);

        if (empty($album2)) {
            Flash::error('Album2 not found');

            return redirect(route('album2s.index'));
        }

        $album2 = $this->album2Repository->update($request->all(), $id);

        Flash::success('Album2 updated successfully.');

        return redirect(route('album2s.index'));
    }

    /**
     * Remove the specified Album2 from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $album2 = $this->album2Repository->findWithoutFail($id);

        if (empty($album2)) {
            Flash::error('Album2 not found');

            return redirect(route('album2s.index'));
        }

        $this->album2Repository->delete($id);

        Flash::success('Album2 deleted successfully.');

        return redirect(route('album2s.index'));
    }
}
