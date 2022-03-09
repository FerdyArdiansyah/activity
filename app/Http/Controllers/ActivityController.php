<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image;
use App\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index() {
        $activitys = \App\Activity::all();
        return view('activity.index', compact('activitys'));
    }

    public function create() {
        return view('activity.create');
    }

    public function edit($id)
    {
        $kegiatan = Activity::findOrFail($id);
        return view('activity.edit', compact('kegiatan'));
    }

    public function store() 
    {
        $moment = Activity::create($this->validateRequest());

        $this->storeImage($moment);

        // flash()->success('Data Kegiatan Berhasil Di Tambahkan');
        return redirect(route('activity'));
    }

    
    private function validateRequest() 
    {
        return tap(request()->validate([
            'nama_activity' => 'required',
            'idr' => 'required',
            'status' => 'required',
            'desc' => 'required',
            'jumlah_peserta' => 'required',
            'tgl_mulai' => 'required',
            'tgl_selesai' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png|max:5000',
        ]), function(){
            if(request()->hasFile('image')){
                request()->validate([
                    'image' => 'required|mimes:jpeg,jpg,png|max:5000',
                ]);
            }
        });
    }

    private function storeImage($moment) {
        if(request()->has('image')){
            $moment->update([
                'image' => request()->image->store('uploads', 'public'),
            ]);

            $image = Image::make(public_path('storage/' . $moment->image))->fit(300, 300, null, 'top-left');
            $image->save();
        }
    }

    public function destroy(Request $request, $id)
    {
        $activity = Activity::findOrFail($id);

        $activity->delete($request->all());

        if (\File::exists(public_path('storage/' . $activity->image))) {
            \File::exists(public_path('storage/' . $activity->image));
        }
        return redirect()->back();
    }   

    public function update(Request $request, Activity $activity) 
    {
        $activity->update($request->all());

        $this->storeImage($activity);

        return redirect()->back();
    }
}
