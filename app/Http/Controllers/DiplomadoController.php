<?php

namespace App\Http\Controllers;

use App\Models\Diplomado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class DiplomadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sql = "select * from diplomados";
        $diplomados = DB::select($sql);

        return view('diplomados', ['diplomados' => $diplomados]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Diplomado $diplomado)
    {
        // Guardar los datos del diploma en un array json
        $diplomadoJson = json_encode([$diplomado,]);
        // Guardar el archivo .json en la capreta del compilador
        $jsonPath = base_path('pdf\templates\diplomados.json');
        file_put_contents($jsonPath, $diplomadoJson);

        $inputFile = base_path('pdf\templates\diplomados.typ');
        // Ruta donde se guardará el ejecutable
        $outputFile = 'diplomados/diplomado.pdf';
        $outputPath = storage_path($outputFile);

        // Ruta del compilador
        $compilerPath = base_path('pdf\compiler\typst.exe');

        // Crear el proceso para compilar el código
        $process = new Process([$compilerPath,'compile', $inputFile ,$outputPath]);
        $process->run();

        // Manejar errores durante la ejecución del proceso
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        // Retornar el ejecutable
        return response()->download($outputPath);
            //->deleteFileAfterSend(true);
    }
    public function resolucion(Diplomado $diplomado)
    {
        // Guardar los datos del diploma en un array json
        $diplomadoJson = json_encode([$diplomado,]);
        // Guardar el archivo .json en la capreta del compilador
        $jsonPath = base_path('pdf\templates\diplomados.json');
        file_put_contents($jsonPath, $diplomadoJson);

        $inputFile = base_path('pdf\templates\diplomados_resolucion.typ');
        // Ruta donde se guardará el ejecutable
        $outputFile = 'diplomados/resolucion_diplomado.pdf';
        $outputPath = storage_path($outputFile);

        // Ruta del compilador
        $compilerPath = base_path('pdf\compiler\typst.exe');

        // Crear el proceso para compilar el código
        $process = new Process([$compilerPath,'compile', $inputFile ,$outputPath]);
        $process->run();

        // Manejar errores durante la ejecución del proceso
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        // Retornar el ejecutable
        return response()->download($outputPath);
            //->deleteFileAfterSend(true);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Diplomado $diplomado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Diplomado $diplomado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Diplomado $diplomado)
    {
        //
    }
}
