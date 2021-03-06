<?php

namespace App\Http\Controllers\Admin;
use App\Models\PersonalData;
use Illuminate\Http\Request;
use App\Helpers\UploadX;
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
use App\Repositories\FilesDataRepo;
use App\Models\Record;
use App\Models\FamilyData;
use App\Models\EducationData;
use App\Models\BudgetData;
use App\Models\VecinosData;
use App\Models\ViciosData;
use App\Models\SaludData;
use App\Models\HomeData;
use App\Models\LaborData;
use app\Models\FileData;
use Imagick;

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
    protected $filesDataRepo;

    function __construct(BallotRepo $ballotRepo,
    					 PersonalDataRepo $personalDataRepo,
                         FamilyDataRepo $familyDataRepo,
                         EducationDataRepo $educationDataRepo,
                         LaborDataRepo $laborDataRepo,
                         BudgetDataRepo $budgetDataRepo,
                         HomeDataRepo $homeDataRepo,
                         SaludDataRepo $saludDataRepo,
                         ViciosDataRepo $viciosDataRepo,
                         VecinosDataRepo $vecinosDataRepo,
                         FilesDataRepo $filesDataRepo)

    {
        $this->repo = $ballotRepo;
        $this->personalDataRepo   = $personalDataRepo;
        $this->familyDataRepo     = $familyDataRepo;
        $this->educationDataRepo  = $educationDataRepo;
        $this->laborDataRepo      = $laborDataRepo;
        $this->budgetDataRepo     = $budgetDataRepo;
        $this->homeDataRepo       = $homeDataRepo;
        $this->saludDataRepo      = $saludDataRepo;
        $this->viciosDataRepo     = $viciosDataRepo;
        $this->vecinosDataRepo    = $vecinosDataRepo;
        $this->filesDataRepo      = $filesDataRepo;
    }

    public function index()
    {
        $data = Record::where('estado','ready')->get();
        $fields = $this->fields();
        return view($this->root . '/' . $this->module  .'/list', compact('data','fields'));
    }

    public function create()
    {
        return view($this->root . '/' . $this->module . '/create');
    }
    public function edit($id)
    {
        $db  = $this->repo->findOrFail($id);
        $dp = PersonalData::where('id_record',$id)->get();
        $dfp = FamilyData::whereRaw('tipo = ? and id_record = ?',['padre',$id])->get();
        $dfm = FamilyData::whereRaw('tipo = ? and id_record = ?',['madre',$id])->get();
        $dfe = FamilyData::whereRaw('tipo = ? and id_record = ?',['esposo',$id])->get();
        $dfh = FamilyData::whereRaw('tipo = ? and id_record = ?',['hermano',$id])->get();
        $dep = EducationData::whereRaw('tipo = ? and id_record = ?',['primaria',$id])->get();
        $des = EducationData::whereRaw('tipo = ? and id_record = ?',['secundaria',$id])->get();
        $ded = EducationData::whereRaw('tipo = ? and id_record = ?',['diversificado',$id])->get();
        $deu = EducationData::whereRaw('tipo = ? and id_record = ?',['universidad',$id])->get();
        $da  = FileData::where('id_record',$id)->get();
        $dl  = LaborData::where('id_record',$id)->get();
        $pf  = BudgetData::where('id_record',$id)->get();
        $ho  = HomeData::where('id_record',$id)->get();
        $sa  = SaludData::where('id_record',$id)->get();
        $vi  = ViciosData::where('id_record',$id)->get();
        $ve  = VecinosData::where('id_record',$id)->get();
        //return $ve[0];
        return view($this->root . '/' . $this->module . '/edit',compact('db','dp','dfp','dfm','dfe','dfh','dep','des','ded','deu','pf','ve','vi','sa','ho','dl','da'));
    }

    public function showDelete($id)
    {
        $data = $this->repo->findOrFail($id);
        return view($this->root . '/' . $this->module . '/delete',compact('data'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        for($i = 1 ; $i<=9 ; $i++)
        {
            if($request->hasFile('input'.$i)) {
                $image = UploadX::uploadFile($request->file('input'.$i),'pictures', $i.time());
                $data['input'.$i] = $image['url'];
            }else{
                $data['input'.$i] = "";
            }
        }

        for ($i=7; $i <=8 ; $i++) {
            $key = 'input'.$i;
            if($request->hasFile($key)) {
                // Create a instance for imagick with the url of PDF
                $im = new Imagick();
                $im->setResolution(144, 144);
                $im->readImage($data[$key] . '[0]');
                $im->setImageFormat('png');

                // Set the url of the image converted

                $url = 'pictures/' . $i . time() . '.png';

                // Put the image in the public folder
                file_put_contents($url, $im);

                // Remove the PDF uploaded
                UploadX::deleteFile($data[$key]);

                // Set the new url for the image
                $data[$key] = $url;
            }else{
                $data[$key] = "";
            }
        }


        //llenamos los campos vacios
    	  $data = array_map(function($item){
            return ($item == '' ? '-----' : $item);
        }, $data);


        //Registramos el archivo
        $data['name'] = \Auth::user()->name;
        $data['job'] = \Auth::user()->job;
        $ballot_data['id_user'] = \Auth::id();
        $ballot_data['puesto'] = $data['puesto_empresa'];
        $ballot_data['empresa'] = $data['nombre_empresa'];
        $ballot_data['nombre'] = $data['dp1']. ' ' . $data['dp2'];
        $ballot_data['estado'] = 'ready';
        $ballot_data['observacion'] = $data['observacion'];
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
        $dataPadre['familiares_presos'] = $data['df80'];
        $dataPadre['descripcion_familiares_presos'] = $data['df81'];
        $dataPadre['id_record'] = $ballot->id;
        $dataPadre = $this->familyDataRepo->create($dataPadre);

        //Guardamos en la tabla archivos
        for($i = 1 ; $i <= 9; $i++)
        {
            $datafiles['url'] = $data['input'.$i];
            $datafiles['id_record'] = $ballot->id;
            $this->filesDataRepo->create($datafiles);
        }
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
            while ( $e < 231) {
                $dataLabor['empresa']                                     = $data['dl'.$e++];
                $dataLabor['direccion']                                   = $data['dl'.$e++];
                $dataLabor['telefono']                                    = $data['dl'.$e++];
                $dataLabor['puesto']                                      = $data['dl'.$e++];
                $dataLabor['jefe_inmediato']                              = $data['dl'.$e++];
                $dataLabor['puesto_jefe_inmediato']                       = $data['dl'.$e++];
                $dataLabor['fecha_inicio']                                = $data['dl'.$e++];
                $dataLabor['fecha_retiro']                                = $data['dl'.$e++];
                $dataLabor['ultimo_salario']                              = $data['dl'.$e++];
                $dataLabor['motivo_despido']                              = $data['dl'.$e++];

                $dataLabor['departamento_que_confirma']                   = $data['dl'.$e++];
                $dataLabor['nombre_puesto']                               = $data['dl'.$e++];
                $dataLabor['fechas_en_las_que_laboro']                    = $data['dl'.$e++];
                $dataLabor['puesto_que_desempeño']                        = $data['dl'.$e++];
                $dataLabor['tiene_llamadas_de_atencion']                  = $data['dl'.$e++];
                $dataLabor['motivo_del_retiro']                           = $data['dl'.$e++];
                $dataLabor['jefe_inmediato2']                              = $data['dl'.$e++];
                $dataLabor['nombre_y_puesto']                             = $data['dl'.$e++];
                $dataLabor['desenpeño']                                   = $data['dl'.$e++];
                $dataLabor['fortaleza_laborales']                         = $data['dl'.$e++];
                $dataLabor['area_de_mejora2']                             = $data['dl'.$e++];
                $dataLabor['como_fueron_sus_relaciones_interpersonales']  = $data['dl'.$e++];
                $dataLabor['motivo_de_retiro2']                           = $data['dl'.$e++];
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
        $i = 1;
        while ( $i < 28 ) {
            $vecinos['v1'] = $data['v'.$i];
            $i++;
            $vecinos['v2'] = $data['v'.$i];
            $i++;
            $vecinos['v3'] = $data['v'.$i];
            $i++;
            $vecinos['v4'] = $data['v'.$i];
            $i++;
            $vecinos['v5'] = $data['v'.$i];
            $i++;
            $vecinos['v6'] = $data['v'.$i];
            $i++;
            $vecinos['v7'] = $data['v'.$i];
            $i++;
            $vecinos['v8'] = $data['v'.$i];
            $i++;
            $vecinos['id_record'] = $ballot->id;
            $vecinos['v9'] = $data['v'.$i];

            $this->vecinosDataRepo->create($vecinos);
            $i++;
        }

        $folder = 'pdfs';
        if (!is_dir($folder))
        {
            // Create directory
            $oldmask = umask(0);
            mkdir($folder, 0777);
            umask($oldmask);
        }

        $ballot->url = $folder . '/' . time() . '.pdf';
        $ballot->save();


        $pdf_factory = \App::make('dompdf');
        $pdf = $pdf_factory->loadView('pdf',compact('data'))->save($ballot->url);

        return [
            'message' => 'Boleta generada exitosamente',
            'success' => true,
            'id' =>  $ballot->id
        ];
    }
    public function getPDF($id)
    {
        $pdf = $this->repo->findOrFail($id);
        $file = file_get_contents(public_path() . '/' . $pdf->url);
        return response($file,200)->header('Content-Type','application/pdf');

    }

    public function getInfor($id)
    {
        $da  = FileData::where('id_record',$id)->get();
        $url = $da[8]->url;
        if($url != '-----') {
            $file = file_get_contents(public_path() . '/' . $url);
            return response($file,200)->header('Content-Type','application/pdf');
        }
        else {
            return "No se ha subido ningun archivo";
        }
    }
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $data['id_record'] = $id;

        $datafile = FileData::where('id_record',$id)->get();
        for($i = 1 ; $i <= 9 ; $i++ )
        {
            // Upload new image
            if($request->hasFile('input'.$i)) {
                $foto = $datafile[$i-1]->url;
                $image = UploadX::uploadFile($request->file('input'.$i),'pictures', $i . time());
                $data['input'.$i] = $image['url'];
            } else {
                $foto = $datafile[$i-1]->url;
                $data['input'.$i] = $foto;
            }
        }

        for ($i=7; $i <=8 ; $i++) {
            $key = 'input'.$i;
            if($request->hasFile($key)) {
                // Create a instance for imagick with the url of PDF
                $im = new Imagick();
                $im->setResolution(144, 144);
                $im->readImage($data[$key] . '[0]');
                $im->setImageFormat('png');

                // Set the url of the image converted
                $url = 'pictures/' . $i . time() . '.png';

                // Put the image in the public folder
                file_put_contents($url, $im);

                // Remove the PDF uploaded
                UploadX::deleteFile($data[$key]);

                // Set the new url for the image
                $data[$key] = $url;
            }
        }

        //llenamos los campos vacios
        $data = array_map(function($item){
            return ($item == '' ? '-----' : $item);
        }, $data);

        //Guardo en el repo
        $data['name'] = \Auth::user()->name;
        $data['job'] = \Auth::user()->job;
        $ballot_data = $this->repo->findOrFail($id);
        $ballot_data = $this->repo->update($ballot_data, $data);
        $ballot_data->id_user = \Auth::id();
        $ballot_data->puesto = $data['puesto_empresa'];
        $ballot_data->empresa = $data['nombre_empresa'];
        $ballot_data->nombre = $data['dp1']. ' ' . $data['dp2'];
        $ballot_data->observacion = $data['observacion'];
        $ballot_data->save();

        //Guardamos en la tabla datos personales
        $dataPersonal = PersonalData::where('id_record',$id)->first();
        $dataPersonal = $this->personalDataRepo->update($dataPersonal, $data);
        $dataPersonal->dp1 = $data['dp1'];
        $dataPersonal->dp2 = $data['dp2'];
        $dataPersonal->dp3 = $data['dp3'];
        $dataPersonal->dp4 = $data['dp4'];
        $dataPersonal->dp5 = $data['dp5'];
        $dataPersonal->dp6 = $data['dp6'];
        $dataPersonal->dp7 = $data['dp7'];
        $dataPersonal->dp8 = $data['dp8'];
        $dataPersonal->dp9 = $data['dp9'];
        $dataPersonal->dp10 = $data['dp10'];
        $dataPersonal->dp11 = $data['dp11'];
        $dataPersonal->dp12 = $data['dp12'];
        $dataPersonal->dp13 = $data['dp13'];
        $dataPersonal->dp14 = $data['dp14'];
        $dataPersonal->dp15 = $data['dp15'];
        $dataPersonal->id_record = $id;
        $dataPersonal->save();


        //Guardamos en la tabla archivos
        $datafile = FileData::where('id_record',$id)->get();
        $i = 1 ;
        $indice = 0;
        while($i <= 9)
        {
            $url = $data['input'.$i];
            if ($datafile[$indice]->url != $url && $url!='-----' ) {
              UploadX::deleteFile($datafile[$indice]->url);
              $datafile[$indice]->url =  $data['input'.$i];
            }

            $datafile[$indice]->id_record = $id;
            $datafile[$indice]->save();
            $i++;
            $indice++;
        }

        //Guardar en la tabla datos familiares
        //Guardar la informacion sobre el padre
        $dataPadre = FamilyData::whereRaw('tipo = ? and id_record = ?',['padre',$id])->first();
        $dataPadre = $this->familyDataRepo->update($dataPadre, $data);
        $dataPadre->tipo = 'padre';
        $dataPadre->nombre = $data['df1'];
        $dataPadre->edad = $data['df2'];
        $dataPadre->originario = $data['df3'];
        $dataPadre->ingresos = $data['df4'];
        $dataPadre->profecion = $data['df5'];
        $dataPadre->telefono = $data['df6'];
        $dataPadre->direccion = $data['df7'];
        $dataPadre->relacion = $data['df8'];
        $dataPadre->hijos = $data['df79'];
        $dataPadre->familiares_presos = $data['df80'];
        $dataPadre->descripcion_familiares_presos = $data['df81'];
        $dataPadre->id_record = $id;
        $dataPadre->save();

        //Guardar la informacion sobre la madre
        $dataMadre = FamilyData::whereRaw('tipo = ? and id_record = ?',['madre',$id])->first();
        $dataMadre = $this->familyDataRepo->update($dataMadre, $data);
        $dataMadre->tipo        = 'madre';
        $dataMadre->nombre      = $data['df9'];
        $dataMadre->edad        = $data['df10'];
        $dataMadre->originario  = $data['df11'];
        $dataMadre->ingresos    = $data['df12'];
        $dataMadre->profecion   = $data['df13'];
        $dataMadre->telefono    = $data['df14'];
        $dataMadre->direccion   = $data['df15'];
        $dataMadre->relacion    = $data['df16'];
        $dataMadre->id_record   = $id;
        $dataMadre->save();

        //Guardamos la informacion sobre el esposo
        $dataEsposo = FamilyData::whereRaw('tipo = ? and id_record = ?',['esposo',$id])->first();
        $dataEsposo = $this->familyDataRepo->update($dataEsposo, $data);
        $dataEsposo->tipo       = 'esposo';
        $dataEsposo->nombre     = $data['df17'];
        $dataEsposo->edad       = $data['df18'];
        $dataEsposo->originario = $data['df19'];
        $dataEsposo->ingresos   = $data['df20'];
        $dataEsposo->profecion  = $data['df21'];
        $dataEsposo->telefono   = $data['df22'];
        $dataEsposo->direccion  = $data['df23'];
        $dataEsposo->id_record  = $id;
        $dataEsposo->save();

        $dataHermano = FamilyData::whereRaw('tipo = ? and id_record = ?',['hermano',$id])->get();
        $i = 24;
        $indice = 0;
        while ( $i < 74) {
            $dataHermano[$indice]->tipo = 'hermano';
            $dataHermano[$indice]->nombre = $data['df'.$i];
            $i++;
            $dataHermano[$indice]->edad = $data['df'.$i];
            $i++;
            $dataHermano[$indice]->profecion = $data['df'.$i];
            $i++;
            $dataHermano[$indice]->telefono = $data['df'.$i];
            $i++;
            $dataHermano[$indice]->observacion = $data['df'.$i];
            $i++;
            $dataHermano[$indice]->id_record = $id;
            $dataHermano[$indice]->save();
            $indice++;
        }

        //Guardamos la informacion del estudiante
        //Educacion Primaria
        $dataEducation = EducationData::whereRaw('tipo = ? and id_record = ?',['primaria',$id])->first();
        $dataEducation = $this->educationDataRepo->update($dataEducation, $data);
        $dataEducation->establecimiento = $data['de1'];
        $dataEducation->direccion       = $data['de2'];
        $dataEducation->fecha           = $data['de3'];
        $dataEducation->tipo            = 'primaria';
        $dataEducation->id_record       = $id;
        $dataEducation->save();

        //Educacion Secundatia
        $dataEducation = EducationData::whereRaw('tipo = ? and id_record = ?',['secundaria',$id])->first();
        $dataEducation = $this->educationDataRepo->update($dataEducation, $data);
        $dataEducation->establecimiento = $data['de4'];
        $dataEducation->direccion = $data['de5'];
        $dataEducation->fecha = $data['de6'];
        $dataEducation->tipo = 'secundaria';
        $dataEducation->id_record = $id;
        $dataEducation->save();

        //Educacion diversificado
        $dataEducation = EducationData::whereRaw('tipo = ? and id_record = ?',['diversificado',$id])->first();
        $dataEducation = $this->educationDataRepo->update($dataEducation, $data);
        $dataEducation->establecimiento = $data['de7'];
        $dataEducation->direccion       = $data['de8'];
        $dataEducation->fecha           = $data['de10'];
        $dataEducation->titulo          = $data['de9'];
        $dataEducation->tipo            = 'diversificado';
        $dataEducation->id_record       = $id;
        $dataEducation->save();

        //Educacion Universidad
        $dataEducation = EducationData::whereRaw('tipo = ? and id_record = ?',['universidad',$id])->first();
        $dataEducation->establecimiento = $data['de11'];
        $dataEducation->direccion       = $data['de12'];
        $dataEducation->fecha           = $data['de14'];
        $dataEducation->titulo          = $data['de13'];
        $dataEducation->observacion     = $data['de15'];
        $dataEducation->tipo            = 'universidad';
        $dataEducation->id_record       = $id;
        $dataEducation->save();

        //Informacion Laboral
        $dataLabor  = LaborData::where('id_record',$id)->get();
        $indice = 0;
        $e = 1;
        while ( $e < 231) {
            $dataLabor[$indice]->empresa = $data['dl'.$e++];
            $dataLabor[$indice]->direccion = $data['dl'.$e++];
            $dataLabor[$indice]->telefono = $data['dl'.$e++];
            $dataLabor[$indice]->puesto = $data['dl'.$e++];
            $dataLabor[$indice]->jefe_inmediato = $data['dl'.$e++];
            $dataLabor[$indice]->puesto_jefe_inmediato = $data['dl'.$e++];
            $dataLabor[$indice]->fecha_inicio = $data['dl'.$e++];
            $dataLabor[$indice]->fecha_retiro = $data['dl'.$e++];
            $dataLabor[$indice]->ultimo_salario = $data['dl'.$e++];
            $dataLabor[$indice]->motivo_despido = $data['dl'.$e++];

            $dataLabor[$indice]->departamento_que_confirma = $data['dl'.$e++];
            $dataLabor[$indice]->nombre_puesto = $data['dl'.$e++];
            $dataLabor[$indice]->fechas_en_las_que_laboro = $data['dl'.$e++];
            $dataLabor[$indice]->puesto_que_desempeño = $data['dl'.$e++];
            $dataLabor[$indice]->tiene_llamadas_de_atencion = $data['dl'.$e++];
            $dataLabor[$indice]->motivo_del_retiro = $data['dl'.$e++];
            $dataLabor[$indice]->jefe_inmediato2 = $data['dl'.$e++];
            $dataLabor[$indice]->nombre_y_puesto = $data['dl'.$e++];
            $dataLabor[$indice]->desenpeño = $data['dl'.$e++];
            $dataLabor[$indice]->fortaleza_laborales = $data['dl'.$e++];
            $dataLabor[$indice]->area_de_mejora2 = $data['dl'.$e++];
            $dataLabor[$indice]->como_fueron_sus_relaciones_interpersonales = $data['dl'.$e++];
            $dataLabor[$indice]->motivo_de_retiro2 = $data['dl'.$e++];

            $dataLabor[$indice]->id_record = $id;
            $dataLabor[$indice]->save();
            $indice++;
        }

        // Presupuesto Mensual
        $databudget = BudgetData::where('id_record',$id)->get();
        $indice = 0 ;
        $i = 1;
        while ( $i < 24 ) {
            $databudget[$indice]->ingresos    = $data['ingreso'.$i];
            $databudget[$indice]->egresos     = $data['egreso'.$i];
            $databudget[$indice]->diferencia  = $data['diferencia'.$i];
            $databudget[$indice]->id_record   = $id;
            $databudget[$indice]->save();
            $indice++;
            $i++;
        }

        // Redidencia
        $dataHome = HomeData::where('id_record',$id)->first();
        $dataHome = $this->homeDataRepo->update($dataHome, $data);
        $dataHome->hd1   = $data['hd1'];
        $dataHome->hd2   = $data['hd2'];
        $dataHome->hd3   = $data['hd3'];
        $dataHome->hd4   = $data['hd4'];
        $dataHome->hd5   = $data['hd5'];
        $dataHome->hd6   = $data['hd6'];
        $dataHome->hd7   = $data['hd7'];
        $dataHome->id_record = $id;
        $dataHome->save();

        // Salud
        $dataSalud = SaludData::where('id_record',$id)->first();
        $dataSalud = $this->saludDataRepo->update($dataSalud, $data);
        $dataSalud->sa1   = $data['sa1'];
        $dataSalud->sa2   = $data['sa2'];
        $dataSalud->sa3   = $data['sa3'];
        $dataSalud->sa4   = $data['sa4'];
        $dataSalud->sa5   = $data['sa5'];
        $dataSalud->sa6   = $data['sa6'];
        $dataSalud->sa7   = $data['sa7'];
        $dataSalud->sa8   = $data['sa8'];
        $dataSalud->id_record = $id;
        $dataSalud->save();

        // Vicios
        $dataVicios = ViciosData::where('id_record',$id)->first();
        $dataVicios = $this->viciosDataRepo->update($dataVicios,$data);
        $dataVicios->vi1   = $data['vi1'];
        $dataVicios->vi2   = $data['vi2'];
        $dataVicios->vi3   = $data['vi3'];
        $dataVicios->vi4   = $data['vi4'];
        $dataVicios->vi5   = $data['vi5'];
        $dataVicios->vi6   = $data['vi6'];
        $dataVicios->vi7   = $data['vi7'];
        $dataVicios->vi8   = $data['vi8'];
        $dataVicios->vi9   = $data['vi9'];
        $dataVicios->vi10  = $data['vi10'];
        $dataVicios->vi11  = $data['vi11'];
        $dataVicios->vi12  = $data['vi12'];
        $dataVicios->id_record = $id;
        $dataVicios->save();

        // Vecinos
        $dataVecinos = VecinosData::where('id_record',$id)->get();
        $i = 0;
        $indice = 1 ;
        while ( $indice < 28 ) {
            $dataVecinos[$i]->v1   = $data['v'.$indice++];
            $dataVecinos[$i]->v2   = $data['v'.$indice++];
            $dataVecinos[$i]->v3   = $data['v'.$indice++];
            $dataVecinos[$i]->v4   = $data['v'.$indice++];
            $dataVecinos[$i]->v5   = $data['v'.$indice++];
            $dataVecinos[$i]->v6   = $data['v'.$indice++];
            $dataVecinos[$i]->v7   = $data['v'.$indice++];
            $dataVecinos[$i]->v8   = $data['v'.$indice++];
            $dataVecinos[$i]->v9   = $data['v'.$indice++];
            $dataVecinos[$i]->id_record = $id;
            $dataVecinos[$i]->save();
            $i++;
        }

        // Generamos el reporte
        $folder = 'pdfs';
        if (!is_dir($folder))
        {
            // update directory
            $oldmask = umask(0);
            mkdir($folder, 0777);
            umask($oldmask);
        }

        $ballot_data->url = $folder . '/' . time() . '.pdf';
        $ballot_data->save();

        $pdf_factory = \App::make('dompdf');
        $pdf = $pdf_factory->loadView('pdf',compact('data'))->save($ballot_data->url);

        return [
            'message' => 'Boleta generada exitosamente',
            'success' => true,
            'id' =>  $id
        ];

    }
    public function destroy($id)
    {
        $data['name'] = \Auth::user()->name;
        $data['job'] = \Auth::user()->job;
        $ballot_data = $this->repo->findOrFail($id);
        $ballot_data = $this->repo->update($ballot_data, $data);
        $ballot_data->id_user = \Auth::id();
        $ballot_data->estado = "destroy";
        $ballot_data->save();
        return ['success'=>'true','message'=>'Registro eliminado exitosamente'];
    }
}
