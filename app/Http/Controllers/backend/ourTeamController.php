<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\OurTeam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ourTeamController extends Controller
{
    //
    public function creatteam()
    {
        if (Auth::user()) {
            if (Auth::user()->role == 1) {
                return view('backend.admin.team.creat');
            }
        }
    }
    public function storeteam(Request $request)
    {
        if (Auth::user()) {
            if (Auth::user()->role == 1) {
                $team = new OurTeam();
                $team->name = $request->name;
                $team->Desc = $request->Desc;
                $team->Qualification = $request->Qualification;
                if ($request->image) {
                    $imagename = rand() . 'Team-member' . '.' . $request->image->extension();
                    $request->image->move('backend/image/ourteam/', $imagename);
                    $team->image = $imagename;
                }
                $team->save();
                return redirect()->back();
            }
        }
    }
    public function listteame()
    {
        if (Auth::user()) {
            if (Auth::user()->role == 1) {
                $teamlist = OurTeam::get();
                return view('backend.admin.team.list', compact('teamlist'));
            }
        }
    }
    public function deleteteam($id)
    {
        if (Auth::user()) {
            if (Auth::user()->role == 1) {
                $teamDelete = OurTeam::find($id);
                if ($teamDelete->image && file_exists('backend/image/ourteam/' . $teamDelete->image)) {
                    unlink('backend/image/ourteam/' . $teamDelete->image);
                }
                $teamDelete->delete();
                return redirect()->back();
            }
        }
    }
    public function editteam($id)
    {
        if (Auth::user()) {
            if (Auth::user()->role == 1) {
                $teamedit = OurTeam::find($id);
                return view('backend.admin.team.edit', compact('teamedit'));
            }
        }
    }
    public function updateteam(Request $request, $id)
    {
        if (Auth::user()) {
            if (Auth::user()->role == 1) {
                $teamUpdate = OurTeam::find($id);
                $teamUpdate->name = $request->name;
                $teamUpdate->Qualification = $request->Qualification;
                $teamUpdate->Desc = $request->Desc;
                if (isset($request->image)) {
                    if ($teamUpdate->image && file_exists('backend/image/ourteam/' . $teamUpdate->image)) {
                        unlink('backend/image/ourteam/' . $teamUpdate->image);
                    }


                    $imagename = rand() . 'team-member' . '.' . $request->image->extension();
                    $request->image->move('backend/image/ourteam/', $imagename);
                    $teamUpdate->image = $imagename;
                }
            }
            $teamUpdate->save();
            return redirect('/admin/team/list');
        }
    }
}
