<?php

namespace App\Http\Controllers;

use App\DataTables\Album3DataTable;
use App\Http\Requests;
use App\Http\Requests\CreateAlbum3Request;
use App\Http\Requests\UpdateAlbum3Request;
use App\Repositories\Album3Repository;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Response;

class Album3Controller extends AppBaseController
{
    /** @var  Album3Repository */
    private $album3Repository;

    public function __construct(Album3Repository $album3Repo)
    {
        $this->album3Repository = $album3Repo;
    }

    /**
     * Display a listing of the Album3.
     *
     * @param Album3DataTable $album3DataTable
     * @return Response
     */
    public function index(Album3DataTable $album3DataTable)
    {
        return $album3DataTable->render('album3s.index');

    }

    /**
     * Show the form for creating a new Album3.
     *
     * @return Response
     */
    public function create()
    {
        return view('album3s.create');
    }

    /**
     * Store a newly created Album3 in storage.
     *
     * @param CreateAlbum3Request $request
     *
     * @return Response
     */
    public function store(CreateAlbum3Request $request)
    {
        $input = $request->all();

        $album3 = $this->album3Repository->create($input);

        Flash::success('Album3 saved successfully.');

        return redirect(route('album3s.index'));
    }

    /**
     * Display the specified Album3.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $album3 = $this->album3Repository->findWithoutFail($id);

        if (empty($album3)) {
            Flash::error('Album3 not found');

            return redirect(route('album3s.index'));
        }

        return view('album3s.show')->with('album3', $album3);
    }

    /**
     * Show the form for editing the specified Album3.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $album3 = $this->album3Repository->findWithoutFail($id);

        if (empty($album3)) {
            Flash::error('Album3 not found');

            return redirect(route('album3s.index'));
        }

        return view('album3s.edit')->with('album3', $album3);
    }

    /**
     * Update the specified Album3 in storage.
     *
     * @param  int              $id
     * @param UpdateAlbum3Request $request
     *
     * @return Response
     */
    public function update($id, UpdateAlbum3Request $request)
    {
        $album3 = $this->album3Repository->findWithoutFail($id);

        if (empty($album3)) {
            Flash::error('Album3 not found');

            return redirect(route('album3s.index'));
        }

        $album3 = $this->album3Repository->update($request->all(), $id);

        Flash::success('Album3 updated successfully.');

        return redirect(route('album3s.index'));
    }

    /**
     * Remove the specified Album3 from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $album3 = $this->album3Repository->findWithoutFail($id);

        if (empty($album3)) {
            Flash::error('Album3 not found');

            return redirect(route('album3s.index'));
        }

        $this->album3Repository->delete($id);

        Flash::success('Album3 deleted successfully.');

        return redirect(route('album3s.index'));
    }
}
