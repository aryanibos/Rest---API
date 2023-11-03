<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public $animals = [
        ['id' => 1, 'name' => 'Ayam'],
        ['id' => 2, 'name' => 'Ikan'],
        ['id' => 3, 'name' => 'Kucing'],
        ['id' => 4, 'name' => 'Kambing'],
        ['id' => 5, 'name' => 'Sapi'],
    ];

    public function index()
    {
        foreach ($this->animals as $animal) {
            echo $animal['id'] . '. ' . $animal['name'] . ', ';
        }
    }

    public function store(Request $request)
    {
        $this->animals[] = $request;
        $this->index();
    }

    public function update(Request $request, $id)
    {
        $this->animals[$id] = $request;
        $this->index();
    }

    public function destroy($id)
    {
        unset($this->animals[$id]);
        $this->index();
    }
}
