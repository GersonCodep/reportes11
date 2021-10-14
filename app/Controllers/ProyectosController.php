<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\proyectos;
class ProyectosController extends Controller{
    public function index()
    {
        echo view('menu/menu');
        echo view('Proyectos');
        echo view('menu/foter');
        
    }
}