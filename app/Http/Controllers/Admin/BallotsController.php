<?php


namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Repositories\BallotRepo;
use App\Repositories\PersonalDataRepo;
use App\Repositories\FamilyDataRepo;
use App\Repositories\EducationDataRepo;
use App\Repositories\LaborDataRepo;
use App\Repositories\BudgetDataRepo;
use App\Repositories\HomeDataRepo;
use App\Repositories\SaludDataRepo;
use App\Repositories\ViciosDataRepo;
use App\Repositories\VecinosDataRepo;


class BallotsController extends CrudController {


    protected $module = '_ballots';
    protected $personalDataRepo;
    protected $familyDataRepo;
    protected $educationDataRepo;
    protected $laborDataRepo;
    protected $budgetDataRepo;
    protected $homeDataRepo;
    protected $saludDataRepo;
    protected $viciosDataRepo;


    function __construct(BallotRepo $ballotRepo,
    					 PersonalDataRepo $personalDataRepo,
                         FamilyDataRepo $familyDataRepo,
                         EducationDataRepo $educationDataRepo,
                         LaborDataRepo $laborDataRepo,
                         BudgetDataRepo $budgetDataRepo,
                         HomeDataRepo $homeDataRepo,
                         SaludDataRepo $saludDataRepo,
                         ViciosDataRepo $viciosDataRepo,
                         VecinosDataRepo $vecinosDataRepo)

    {
        $this->repo = $ballotRepo;
        $this->personalDataRepo = $personalDataRepo;
        $this->familyDataRepo = $familyDataRepo;
        $this->educationDataRepo = $educationDataRepo;
        $this->laborDataRepo = $laborDataRepo;
        $this->budgetDataRepo = $budgetDataRepo;
        $this->homeDataRepo = $homeDataRepo;
        $this->saludDataRepo = $saludDataRepo;
        $this->viciosDataRepo = $viciosDataRepo;
        $this->vecinosDataRepo = $vecinosDataRepo;
    }

       
    public function create()
    {
        return view($this->root . '/' . $this->module . '/create');
    }

    public function store(Request $request)
    {
        //Obtenemos todos los datos
    	$data = $request->all();

        //return $data;

    	//llenamos los campos vacios 
    	$data = array_map(function($item){
            return ($item == '' ? '-----' : $item);
        }, $data);    	

        //Registramos el archivo
        $ballot_data['dp_name'] = "Julian Hernandez";
        $ballot_data['id_user'] = "1";
        $ballot = $this->repo->create($ballot_data);

        //Obtemos el id del archivo
        $data['id_record'] = $ballot->id;

        //Guardamos en la tabla datos personales
        $dataPersonal = $this->personalDataRepo->create($data);

        //Guardar en la tabla datos familiares
        //Guardar la informacion sobre el padre
        $dataPadre['tipo'] = 'padre';
        $dataPadre['nombre'] = $data['df1'];
        $dataPadre['edad'] = $data['df2'];
        $dataPadre['originario'] = $data['df3'];
        $dataPadre['ingresos'] = $data['df4'];
        $dataPadre['profecion'] = $data['df5'];
        $dataPadre['telefono'] = $data['df6'];
        $dataPadre['direccion'] = $data['df7'];
        $dataPadre['relacion'] = $data['df8'];        
        $dataPadre['hijos'] = $data['df79'];
        $dataPadre['id_record'] = $ballot->id;        
        $dataPadre = $this->familyDataRepo->create($dataPadre);


        //Guardar la informacion sobre la madre
        $dataMadre['tipo'] = 'madre';
        $dataMadre['nombre'] = $data['df9'];
        $dataMadre['edad'] = $data['df10'];
        $dataMadre['originario'] = $data['df11'];
        $dataMadre['ingresos'] = $data['df12'];
        $dataMadre['profecion'] = $data['df13'];
        $dataMadre['telefono'] = $data['df14'];
        $dataMadre['direccion'] = $data['df15'];
        $dataMadre['relacion'] = $data['df16'];
        $dataMadre['id_record'] = $ballot->id;        
        $dataMadre = $this->familyDataRepo->create($dataMadre);


        //Guardamos la informacion sobre el esposo
        $dataEsposo['tipo'] = 'esposo';
        $dataEsposo['nombre'] = $data['df17'];
        $dataEsposo['edad'] = $data['df18'];
        $dataEsposo['originario'] = $data['df19'];
        $dataEsposo['ingresos'] = $data['df20'];
        $dataEsposo['profecion'] = $data['df21'];
        $dataEsposo['telefono'] = $data['df22'];
        $dataEsposo['direccion'] = $data['df23'];
        $dataEsposo['id_record'] = $ballot->id;        
        $dataEsposo = $this->familyDataRepo->create($dataEsposo);

        $i = 24;
        while ( $i < 79) {            
            $dataHermano['tipo'] = 'hermano';
            $dataHermano['nombre'] = $data['df'.$i];
            $i++;
            $dataHermano['edad'] = $data['df'.$i];
            $i++;
            $dataHermano['profecion'] = $data['df'.$i];
            $i++;
            $dataHermano['telefono'] = $data['df'.$i];            
            $i++;
            $dataHermano['observacion'] = $data['df'.$i];
            $i++;
            $dataHermano['id_record'] = $ballot->id;
            $this->familyDataRepo->create($dataHermano);
        }
        

        //Guardamos la informacion del estudiante
        //Educacion Primaria
            $dataEducation['establecimiento'] = $data['de1'];
            $dataEducation['direccion'] = $data['de2'];
            $dataEducation['fecha'] = $data['de3'];
            $dataEducation['tipo'] = 'primaria';
            $dataEducation['id_record'] = $ballot->id;
            $this->educationDataRepo->create($dataEducation);
        //Educacion Secundatia
            $dataEducation['establecimiento'] = $data['de4'];
            $dataEducation['direccion'] = $data['de5'];
            $dataEducation['fecha'] = $data['de6'];            
            $dataEducation['tipo'] = 'secundaria';
            $dataEducation['id_record'] = $ballot->id;
            $this->educationDataRepo->create($dataEducation);
        //Educacion diversificado
            $dataEducation['establecimiento'] = $data['de7'];
            $dataEducation['direccion'] = $data['de8'];
            $dataEducation['fecha'] = $data['de10'];
            $dataEducation['titulo'] = $data['de9'];
            $dataEducation['tipo'] = 'diversificado';
            $dataEducation['id_record'] = $ballot->id;
            $this->educationDataRepo->create($dataEducation);

        //Educacion Universidad
            $dataEducation['establecimiento'] = $data['de11'];
            $dataEducation['direccion'] = $data['de12'];
            $dataEducation['fecha'] = $data['de14'];
            $dataEducation['titulo'] = $data['de13'];
            $dataEducation['observacion'] = $data['de15'];
            $dataEducation['tipo'] = 'universidad';
            $dataEducation['id_record'] = $ballot->id;
            $this->educationDataRepo->create($dataEducation);


        //Informacion Laboral
            $e = 1;
            while ( $e < 122) {            
                $dataLabor['empresa'] = $data['dl'.$e];
                $e++;
                $dataLabor['direccion'] = $data['dl'.$e];
                $e++;
                $dataLabor['telefono'] = $data['dl'.$e];
                $e++;
                $dataLabor['puesto'] = $data['dl'.$e];
                $e++;
                $dataLabor['jefe_inmediato'] = $data['dl'.$e];            
                $e++;
                $dataLabor['puesto_jefe_inmediato'] = $data['dl'.$e];
                $e++;
                $dataLabor['fecha_inicio'] = $data['dl'.$e];
                $e++;
                $dataLabor['fecha_retiro'] = $data['dl'.$e];
                $e++;
                $dataLabor['ultimo_salario'] = $data['dl'.$e];
                $e++;
                $dataLabor['motivo_despido'] = $data['dl'.$e];
                $e++;
                $dataLabor['referencia_obtenida'] = $data['dl'.$e];
                $e++;
                $dataLabor['id_record'] = $ballot->id;
                $this->laborDataRepo->create($dataLabor);
            }

        // Presupuesto Mensual
            $i = 1;
            while ( $i < 24 ) {                               
                $databudget['ingresos'] = $data['ingreso'.$i];                
                $databudget['egresos'] = $data['egreso'.$i];                
                $databudget['diferencia'] = $data['diferencia'.$i];
                $databudget['id_record'] = $ballot->id;
                $this->budgetDataRepo->create($databudget);
                $i++;
            }

        // Redidencia 
            $this->homeDataRepo->create($data);

        // Salud 
            $this->saludDataRepo->create($data);
        
        // Vicios            
            $this->viciosDataRepo->create($data); 

        // Vecinos
            $this->vecinosDataRepo->create($data);    


    }

}
