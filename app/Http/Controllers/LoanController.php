<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;

class LoanController extends Controller
{

    public function index() {
        $loans = Loan::all()->toArray();
        return array_reverse($loans);
    }

    public function store(Request $request) {
        $loan = new Loan(['name' => $request->input('name'), 'detail' => $request->input('detail') ]);
        $loan->save();
        return response()->json('Loan created!');
    }

    public function show($id) {
        $loan = Loan::find($id);
        return response()->json($loan);
    }

    public function update($id, Request $request) {
        $loan = Loan::find($id);
        $loan->update($request->all());
        return response()->json('Loan updated!');
    }

    public function destroy($id) {
        $loan = Loan::find($id);
        $loan->delete();
        return response()->json('Loan deleted!');
    }

}
