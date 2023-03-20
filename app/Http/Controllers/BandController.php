<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BandController extends Controller
{

    public function getAll()
    {

        $bands = $this->getBands();

        return response()->json($bands);
    }

    public function getById($id)
    {


        $band = null;

        foreach ($this->getBands() as $_band) {
            if ($_band['id'] == $id)
                $band = $_band;
        }
        return $band ? response()->json($band) : abort(code: 404);
    }

    public function getBandsByGender($gender)
    {

        $bands = [];

        foreach ($this->getBands() as $_band) {
            if ($_band['gender'] == $gender)
                $band = $_band;
        }
        return $band ? response()->json($band) : abort(code: 404);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'id'=>'numberid',
            'name' => 'required|min:3'
        ]);

        return response()->json($request->all());
    }

    protected function getBands()
    {
        return [
            [
                'id' => '1',
                'name' => 'System of a Down',
                'gender' => 'trash_metal'
            ],
            [
                'id' => '2',
                'name' => 'Pink Floyd',
                'gender' => 'progressive'
            ],
            [
                'id' => '3',
                'name' => 'Iron Maiden',
                'gender' => 'progressive'
            ],
            [
                'id' => '4',
                'name' => 'Bullet For My Valentine',
                'gender' => 'progressive'
            ],
            [
                'id' => '5',
                'name' => 'Dream Theather',
                'gender' => 'progressive'
            ],
            [
                'id' => '6',
                'name' => 'Artic Monkeys',
                'gender' => 'progressive'
            ],
            [
                'id' => '7',
                'name' => 'AC/DC',
                'gender' => 'progressive'
            ],
            [
                'id' => '8',
                'name' => 'Aerosmith',
                'gender' => 'progressive'
            ],
            [
                'id' => '9',
                'name' => 'Dio',
                'gender' => 'progressive'
            ],
            [
                'id' => '10',
                'name' => 'BLACK SABBATH',
                'gender' => 'progressive'
            ]
        ];
    }
}
