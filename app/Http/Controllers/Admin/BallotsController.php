<?php


namespace App\Http\Controllers\Admin;
use App\Repositories\BallotRepo;


class BallotsController extends CrudController {


    protected $module = '_ballots';

    function __construct(BallotRepo $ballotRepo)
    {
        $this->repo = $ballotRepo;
    }

       
    public function create()
    {
        return view($this->root . '/' . $this->module . '/create');
    }

}