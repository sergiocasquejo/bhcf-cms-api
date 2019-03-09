<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CellGroupAttendanceController extends Controller
{
    public function create(Request $request, $id) {
        try {
            $date = date('Y-m-d H:i:s', strtotime("now"));
            // $leader = \App\Member::findOrFail($id);
            $membersAttendances =  \App\Member::leftJoin('cell_group_attedances', function($join) {
                $join->on('members.id', '=', 'cell_group_attedances.member_id');
            })
            ->where('leader_id', '=', $id)
            ->whereRaw('YEARWEEK(`attendance_date`, 1) = YEARWEEK("'. $date .'", 1)')
            ->select([
                'members.id',
                'members.first_name',
                'members.last_name',
                'members.nick_name',
                'attended',
                'attendance_date',
                \DB::raw('YEARWEEK("'. $date .'", 1) as week')
            ]);

            return response()->json(['ok' => true, 'data' => $membersAttendances->get()], 201);    

        } catch(Exception $e) {
            return response()->json(['data' => $e->getMessage()], 500);
        }

        
    }
}
