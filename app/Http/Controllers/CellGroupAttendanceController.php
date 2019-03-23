<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\CellGroupAttendance as CellGroupAttendanceResources;

class CellGroupAttendanceController extends Controller
{


    public function getLeaderAttendancesByYear(Request $request, $id, $year) {
        try {
            
            $data = \App\Member::where('leader_id', $id)
                ->withCellGroupAttendanceByYear($year)
                ->orderByRaw(\DB::raw('YEARWEEK(attendance_date) DESC'))
                ->get();

            $newData = [];
            if ($data) {
                foreach($data as $item) {
                    $newData[$item->week] = [
                        'start_date' => $item->start_date,
                        'end_date' => $item->end_date,
                    ];
                }
            }

            return response()->json(['ok' => true, 'data' => $newData], 201);    
        } catch(\Exception $e) {
            return response()->json(['data' => $e->getMessage()], 500);
        }
    }


    public function create(Request $request, $id, $year, $week) {
        try {
            // $yearweek = date('YW', strtotime("now"));
            $yearweek = $year.$week;
            $attendance = \App\Member::where('leader_id', $id)->withCellGroupAttendance($yearweek)->orderBy('first_name', 'ASC')->get();

            return response()->json(['ok' => true, 'data' => CellGroupAttendanceResources::collection($attendance)], 201);    

        } catch(Exception $e) {
            return response()->json(['data' => $e->getMessage()], 500);
        }

        
    }

    public function store(Request $request, $id, $year, $week) {
        try {
            $input = $request->only(['member_id', 'attended']);
            $yearweek = $year.$week;
            $attendance = \App\CellGroupAttendance::whereRaw('YEARWEEK(`attendance_date`, 1) = "'. $yearweek .'"')
                ->where('member_id', $input['member_id'])->first();

            if ($attendance) {
                $attendance->updated_by = Auth()->user()->id;
            } else {
                $attendance = new \App\CellGroupAttendance();
                $attendance->member_id = $input['member_id'];
                $attendance->created_by = Auth()->user()->id;
            }
            
            $attendance->attended = $input['attended'];
            $success = false;
            $data = '';
            $attendance->attendance_date = date('Y-m-d H:i:s');
            $week = date('YW', strtotime($attendance->attendance_date));
            if ($attendance->save()) {
                $success = true;
                $a = \App\Member::find($attendance->member_id)
                    ->withCellGroupAttendance($week)
                    ->first();
                $data = new CellGroupAttendanceResources($a);
            } else {
                $data = 'Oops! something went wrong.';
            }
            

            return response()->json(['ok' => $success, 'data' => $data, 'wek' => $week], 201);
        } catch(Exception $e) {
            return response()->json(['data' => $e->getMessage()], 500);
        }
    }
}
