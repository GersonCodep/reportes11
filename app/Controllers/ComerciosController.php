<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\comercios;
class ComerciosController extends Controller{
    public function index()
    {
        return view('comercios');
    }
}