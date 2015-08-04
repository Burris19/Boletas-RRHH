<?php


namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Repositories\BallotRepo;
use App\Repositories\PersonalDataRepo;


class BallotsController extends CrudController {


    protected $module = '_ballots';
    protected $personalDataRepo;

    function __construct(BallotRepo $ballotRepo,
    					 PersonalDataRepo $personalDataRepo)
    {
        $this->repo = $ballotRepo;
        $this->personalDataRepo = $personalDataRepo;
    }

       
    public function create()
    {
        return view($this->root . '/' . $this->module . '/create');
    }

    public function store(Request $request)
    {
    	$data = $request->all();
    	
    	$data = array_map(function($item){
            return ($item == '' ? '-----' : $item);
        }, $data);    	

        $ballot_data['dp_name'] = "Julian Hernandez";
        $ballot_data['id_user'] = "1";
        $ballot = $this->repo->create($ballot_data);

        $data['id_record'] = $ballot->id;

        $dataPersonal = $this->personalDataRepo->create($data);



    }

}