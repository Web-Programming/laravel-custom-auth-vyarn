<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;
use App\Http\Controller\API\BaseController as BaseController;

class ProdiController extends Controller
{
    public function index() {
        // mengambil data dari tabel prodis dan menyimpannya pada variabel
        $prodis = Prodi::all();
        $success['data'] = $prodis;
        return $this->sendResponse($success, 'Data prodi.');
    }
}
