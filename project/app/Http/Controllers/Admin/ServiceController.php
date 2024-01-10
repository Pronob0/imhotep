<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Helpers\MediaHelper;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::latest()->paginate(15);
        return view('admin.service.index', compact('services'));
    }

    public function create()
    {
       
        return view('admin.service.create');
    }

    public function store(Request $request)
    {
        $this->storeData($request, new Service());
        return back()->with('success', 'New Service has been created');
    }

    public function edit(Service $service)
    {
        
        return view('admin.service.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);
        $this->storeData($request, $service, $service->id);
        return back()->with('success', 'Service has been updated');
    }

    public function storeData($request, $data, $id = null)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:blogs,title,' . $id,
            'description' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|integer',
            'source' => 'nullable|string|max:255',
        ]);

        $data->title = $request->title;
        $data->slug = Str::slug($request->title);
        $data->description = $request->description;
        $data->status = $request->status;
        $data->source = $request->source;

        if(isset($request['photo'])){
            $status = MediaHelper::ExtensionValidation($request['photo']);
            if(!$status){
                return ['errors' => [0=>'file format not supported']];
            }
            if($id){
                $data->photo = MediaHelper::handleUpdateImage($request['photo'],$data->photo);
            }else{
                $data->photo = MediaHelper::handleMakeImage($request['photo']);
            } 
        }
        $data->save();
    }

    public function destroy(Service $service)
    {
        MediaHelper::handleDeleteImage($service->photo);
        $service->delete();

        return back()->with('success', 'Service has been deleted');
    }
}
