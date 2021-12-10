<?php

namespace App\Http\Controllers;

use App\Models\OneInput;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OutputController extends Controller
{
    public function index(OneInput $oneinput)
    {
        ##### UMUM Section
        // GET Bidang
        $dataUMUM = $oneinput->where('bidang', 'UMUM')->get();

        // Chart Anggaran
        $allPaguUmum = [];
        $allRPUmum = [];

        // Chart Output
        $allTargetUmum = [];
        $allRP2Umum = [];

        // Loop data and push to an empty array above
        foreach ($dataUMUM as $data) {
            array_push($allPaguUmum, $data['pagu']);
            array_push($allRPUmum, $data['rp']);
            array_push($allTargetUmum, $data['volume_target']);
            array_push($allRP2Umum, $data['volume_target_realisasi']);
        }

        // Result Chart Anggaran
        $resultPaguUMUM = array_sum($allPaguUmum);
        $resultRPUMUM = array_sum($allRPUmum);

        // Result Chart Output
        $resultTargetUMUM = array_sum($allTargetUmum);
        $resultRP2UMUM = array_sum($allRP2Umum);

        // Result Percentage Pie Chart Anggaran
        $percentageUMUM = ($resultRPUMUM / $resultPaguUMUM) * 100;
        $resultPercentageUMUM =  number_format(floor($percentageUMUM * 100) / 100, 1, '.', '');

        // Result Percentage Pie Chart Output
        $percentageUMUM2 = ($resultRP2UMUM / $resultTargetUMUM) * 100;
        $resultPercentageUMUM2 =  number_format(floor($percentageUMUM2 * 100) / 100, 2, '.', '');

        $sisaUMUM = $resultPaguUMUM - $resultRPUMUM;
        ##### end section

        ##### PPAI Section
        // GET Bidang
        $dataPPAI = $oneinput->where('bidang', 'PPA I')->get();

        // Anggaran
        $allPaguPPAI = [];
        $allRPPPAI = [];

        // Output
        $allTargetPPAI = [];
        $allRP2PPAI = [];

        // Loop data and push to an empty array above
        foreach ($dataPPAI as $data) {
            array_push($allPaguPPAI, $data['pagu']);
            array_push($allRPPPAI, $data['rp']);
            array_push($allTargetPPAI, $data['volume_target']);
            array_push($allRP2PPAI, $data['volume_target_realisasi']);
        }

        // Result Chart Anggaran
        $resultPaguPPAI = array_sum($allPaguPPAI);
        $resultRPPPAI = array_sum($allRPPPAI);

        // Result Chart Output
        $resultTargetPPAI = array_sum($allTargetPPAI);
        $resultRP2PPAI = array_sum($allRP2PPAI);

        // Result Percentage Pie Chart Anggaran
        $percentagePPAI = ($resultRPPPAI / $resultPaguPPAI) * 100;
        $resultPercentagePPAI =  number_format(floor($percentagePPAI * 100) / 100, 1, '.', '');

        // Result Percentage Pie Chart Output
        $percentagePPAI2 = ($resultRP2PPAI / $resultTargetPPAI) * 100;
        $resultPercentagePPAI2 =  number_format(floor($percentagePPAI2 * 100) / 100, 2, '.', '');

        $sisaPPAI = $resultPaguPPAI - $resultRPPPAI;
        ##### end section


        ##### PPA II Section
        // GET Bidang
        $dataPPAII = $oneinput->where('bidang', 'PPA II')->get();

        // Anggaran
        $allPaguPPAII = [];
        $allRPPPAII = [];

        // Output
        $allTargetPPAII = [];
        $allRP2PPAII = [];

        // Loop data and push to an empty array above
        foreach ($dataPPAII as $data) {
            array_push($allPaguPPAII, $data['pagu']);
            array_push($allRPPPAII, $data['rp']);
            array_push($allTargetPPAII, $data['volume_target']);
            array_push($allRP2PPAII, $data['volume_target_realisasi']);
        }

        // Result Chart Anggaran
        $resultPaguPPAII = array_sum($allPaguPPAII);
        $resultRPPPAII = array_sum($allRPPPAII);

        // Result Chart Output
        $resultTargetPPAII = array_sum($allTargetPPAII);
        $resultRP2PPAII = array_sum($allRP2PPAII);

        // Result Percentage Pie Chart Anggaran
        $percentagePPAII = ($resultRPPPAII / $resultPaguPPAII) * 100;
        $resultPercentagePPAII =  number_format(floor($percentagePPAII * 100) / 100, 1, '.', '');

        // Result Percentage Pie Chart Output
        $percentagePPAII2 = ($resultRP2PPAII / $resultTargetPPAII) * 100;
        $resultPercentagePPAII2 =  number_format(floor($percentagePPAII2 * 100) / 100, 2, '.', '');

        $sisaPPAII = $resultPaguPPAII - $resultRPPPAII;
        ##### end section

        ##### PAPK Section
        // GET Bidang
        $dataPAPK = $oneinput->where('bidang', 'PAPK')->get();

        // Anggaran
        $allPaguPAPK = [];
        $allRPPAPK = [];

        // Output
        $allTargetPAPK = [];
        $allRP2PAPK = [];

        // Loop data and push to an empty array above
        foreach ($dataPAPK as $data) {
            array_push($allPaguPAPK, $data['pagu']);
            array_push($allRPPAPK, $data['rp']);
            array_push($allTargetPAPK, $data['volume_target']);
            array_push($allRP2PAPK, $data['volume_target_realisasi']);
        }

        // Result Chart Anggaran
        $resultPaguPAPK = array_sum($allPaguPAPK);
        $resultRPPAPK = array_sum($allRPPAPK);

        // Result Chart Output
        $resultTargetPAPK = array_sum($allTargetPAPK);
        $resultRP2PAPK = array_sum($allRP2PAPK);

        // Result Percentage Pie Chart Anggaran
        $percentagePAPK = ($resultRPPAPK / $resultPaguPAPK) * 100;
        $resultPercentagePAPK =  number_format(floor($percentagePAPK * 100) / 100, 1, '.', '');

        // Result Percentage Pie Chart Output
        $percentagePAPK2 = ($resultRP2PAPK / $resultTargetPAPK) * 100;
        $resultPercentagePAPK2 =  number_format(floor($percentagePAPK2 * 100) / 100, 2, '.', '');

        $sisaPAPK = $resultPaguPAPK - $resultRPPAPK;
        ##### end section

        ##### SKKI Section
        // GET Bidang
        $dataSKKI = $oneinput->where('bidang', 'SKKI')->get();

        // Anggaran
        $allPaguSKKI = [];
        $allRPSKKI = [];

        // Output
        $allTargetSKKI = [];
        $allRP2SKKI = [];

        // Loop data and push to an empty array above
        foreach ($dataSKKI as $data) {
            array_push($allPaguSKKI, $data['pagu']);
            array_push($allRPSKKI, $data['rp']);
            array_push($allTargetSKKI, $data['volume_target']);
            array_push($allRP2SKKI, $data['volume_target_realisasi']);
        }

        // Result Chart Anggaran
        $resultPaguSKKI = array_sum($allPaguSKKI);
        $resultRPSKKI = array_sum($allRPSKKI);

        // Result Chart Output
        $resultTargetSKKI = array_sum($allTargetSKKI);
        $resultRP2SKKI = array_sum($allRP2SKKI);

        // Result Percentage Pie Chart Anggaran
        $percentageSKKI = ($resultRPSKKI / $resultPaguSKKI) * 100;
        $resultPercentageSKKI =  number_format(floor($percentageSKKI * 100) / 100, 1, '.', '');

        // Result Percentage Pie Chart Output
        $percentageSKKI2 = ($resultRP2SKKI / $resultTargetSKKI) * 100;
        $resultPercentageSKKI2 =  number_format(floor($percentageSKKI2 * 100) / 100, 2, '.', '');

        $sisaSKKI = $resultPaguSKKI - $resultRPSKKI;
        ##### end section

        return view('output.index', [
            ##### Anggaran Chart Bar and Pie
            // UMUM
            'paguUMUM' => $resultPaguUMUM,
            'rpUMUM' => $resultRPUMUM,
            'sisaUMUM' => $sisaUMUM,
            'percentageUMUM' => $resultPercentageUMUM,

            // PPA I
            'paguPPAI' => $resultPaguPPAI,
            'rpPPAI' => $resultRPPPAI,
            'sisaPPAI' => $sisaPPAI,
            'percentagePPAI' => $resultPercentagePPAI,

            // PPA II
            'paguPPAII' => $resultPaguPPAII,
            'rpPPAII' => $resultRPPPAII,
            'sisaPPAII' => $sisaPPAII,
            'percentagePPAII' => $resultPercentagePPAII,

            // PAPK
            'paguPAPK' => $resultPaguPAPK,
            'rpPAPK' => $resultRPPAPK,
            'sisaPAPK' => $sisaPAPK,
            'percentagePAPK' => $resultPercentagePAPK,

            // SKKI
            'paguSKKI' => $resultPaguSKKI,
            'rpSKKI' => $resultRPSKKI,
            'sisaSKKI' => $sisaSKKI,
            'percentageSKKI' => $resultPercentageSKKI,

            ##### Output Chart Bar and Pie
            // UMUM
            'targetUMUM' => $resultTargetUMUM,
            'rp2UMUM' => $resultRP2UMUM,
            'percentageUMUM2' => $resultPercentageUMUM2,

            // PPA I
            'targetPPAI' => $resultTargetPPAI,
            'rp2PPAI' => $resultRP2PPAI,
            'percentagePPAI2' => $resultPercentagePPAI2,

            // PPA II
            'targetPPAII' => $resultTargetPPAII,
            'rp2PPAII' => $resultRP2PPAII,
            'percentagePPAII2' => $resultPercentagePPAII2,

            // PAPK
            'targetPAPK' => $resultTargetPAPK,
            'rp2PAPK' => $resultRP2PAPK,
            'percentagePAPK2' => $resultPercentagePAPK2,

            // SKKI
            'targetSKKI' => $resultTargetSKKI,
            'rp2SKKI' => $resultRP2SKKI,
            'percentageSKKI2' => $resultPercentageSKKI2,
        ]);
    }
}
