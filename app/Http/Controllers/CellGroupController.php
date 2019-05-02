<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\CellGroup as CellGroupResources;

class CellGroupController extends Controller
{

    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function getByYear(Request $request, $id, $year) {
        try {
            
            $data = \App\Member::where('parent_id', $id)
                ->byYear($year)
                ->orderByRaw(\DB::raw('YEARWEEK(date_attended) DESC'))
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
            $attendance = \App\Member::where('parent_id', $id)->withCellGroup($yearweek)->get();
            return response()->json(['ok' => true, 'data' => CellGroupResources::collection($attendance)], 201);    

        } catch(Exception $e) {
            return response()->json(['data' => $e->getMessage()], 500);
        }

        
    }

    public function store(Request $request, $id, $year, $week) {
        try {
            $input = $request->only(['member_id', 'attended', 'date_attended']);
            $yearweek = $year.$week;
            $attendance = \App\CellGroup::whereRaw('YEARWEEK(`date_attended`, 1) = "'. $yearweek .'"')
                ->where('member_id', $input['member_id'])->first();

            if ($attendance) {
                $attendance->updated_by = Auth()->user()->id;
            } else {
                $attendance = new \App\CellGroup();
                $attendance->member_id = $input['member_id'];
                $attendance->created_by = Auth()->user()->id;
            }
            
            $attendance->attended = $input['attended'];
            $success = false;
            $data = '';
            $attendance->date_attended = isset($input['date_attended']) ? date('Y-m-d H:i:s', strtotime($input['date_attended'])) : date('Y-m-d H:i:s');
            $week = date('YW', strtotime($attendance->date_attended));
            if ($attendance->save()) {
                $success = true;
                $a = \App\Member::withCellGroup($week)->whereRaw('members.id = '. $input['member_id'])->first();

                $data = new CellGroupResources($a);
            } else {
                $data = 'Oops! something went wrong.';
            }
            

            return response()->json(['ok' => $success, 'data' => $data, 'wek' => $week], 201);
        } catch(Exception $e) {
            return response()->json(['data' => $e->getMessage()], 500);
        }
    }
}
