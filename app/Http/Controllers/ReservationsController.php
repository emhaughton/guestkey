<?php

namespace App\Http\Controllers;

use App\Models\Reservations;
use DataTables;

class ReservationsController extends Controller
{
    public function index()
    {
        //TODO: crear servicio
        if(\request()->ajax()){
            $data = Reservations::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('reservations.index');
    }
}
