<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class serviceController extends Controller
{
    //
    public function creatService()
    {
        if (Auth::user()) {
            if (Auth::user()->role == 1) {
                return view('backend.admin.services.creat');
            }
        }
    }

    public function storeService(Request $request)
    {
        if (Auth::user()) {
            if (Auth::user()->role == 1) {
                $service = new Service();
                $service->serviceName = $request->serviceName;
                $service->serviceAbout = $request->serviceAbout;
                if ($request->image) {
                    $imagename = rand() . 'Services' . '.' . $request->image->extension();
                    $request->image->move('backend/image/service/', $imagename);
                    $service->image = $imagename;
                }
                $service->save();
                return redirect()->back();
            }
        }
    }
    public function listService()
    {
        if (Auth::user()) {
            if (Auth::user()->role == 1) {
                $services = Service::get();
                return view('backend.admin.services.list', compact('services'));
            }
        }
    }
    public function deleteService($id)
    {
        if (Auth::user()) {
            if (Auth::user()->role == 1) {
                $serviceDelete = Service::find($id);
                if ($serviceDelete->image && file_exists('backend/image/service/' . $serviceDelete->image)) {
                    unlink('backend/image/service/' . $serviceDelete->image);
                }
                $serviceDelete->delete();
                return redirect()->back();
            }
        }
    }
    public function editService($id)
    {
        if (Auth::user()) {
            if (Auth::user()->role == 1) {
                $serviceedit = Service::find($id);
                return view('backend.admin.services.edit', compact('serviceedit'));
            }
        }
    }
    public function updateService(Request $request, $id)
    {
        if (Auth::user()) {
            if (Auth::user()->role == 1) {
                $servicetUpdate = Service::find($id);
                $servicetUpdate->serviceName = $request->serviceName;
                $servicetUpdate->serviceAbout = $request->serviceAbout;
                if (isset($request->image)) {
                    if ($servicetUpdate->image && file_exists('backend/image/service/' . $servicetUpdate->image)) {
                        unlink('backend/image/service/' . $servicetUpdate->image);
                    }

                    $imagename = rand() . 'service' . '.' . $request->image->extension();
                    $request->image->move('backend/image/service/', $imagename);
                    $servicetUpdate->image = $imagename;
                }
            }
            $servicetUpdate->save();
            return redirect('/admin/service/list');
        }
    }
}
