<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discuses;
use App\Models\Educations;
use App\Models\Experiences;
use App\Models\Portofolios;

class AdminController extends Controller
{
    public function viewEducation()
    {
        $education = Educations::all();

        return view('page.app', compact('education'));
    }

    public function viewAddEducation()
    {
        return view('page.addEducation');
    }

    public function addEducation(Request $request)
    {
        $education = new Educations;

        $education->title = $request->title;
        $education->description = $request->description;

        $education->save();

        return redirect('/')->with('message', 'Education Added Succesfully');
    }

    public function delEducation($id)
    {
        $education = Educations::find($id);
        $education->delete();

        return redirect()->back()->with('message', 'education Deleted Succesfully');
    }

    public function viewAddExperience()
    {
        return view('page.addExperience');
    }

    public function addExperience(Request $request)
    {
        $experience = new Experiences;

        $experience->title = $request->title;
        $experience->subtitle = $request->subtitle;
        $experience->description = $request->description;

        $experience->save();

        return redirect('/')->with('message', 'Experience Added Succesfully');
    }

    public function delExperience($id)
    {
        $experience = Experiences::find($id);
        $experience->delete();

        return redirect()->back()->with('message', 'experience Deleted Succesfully');
    }

    public function viewAddPortofolio()
    {
        return view('page.addPortofolio');
    }

    public function addPortofolio(Request $request)
    {
        $portofolio = new portofolios;

        $portofolio->title = $request->title;
        $portofolio->subtitle = $request->subtitle;
        $portofolio->description = $request->description;;

        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('portofolio', $imagename);

        $portofolio->image = $imagename;

        $portofolio->save();

        return redirect('/')->with('message', 'portofolio Added Succesfully');
    }

    public function delPortofolio($id)
    {
        $portofolio = Portofolios::find($id);
        $portofolio->delete();

        return redirect()->back()->with('message', 'Portofolio Deleted Succesfully');
    }

    public function addDiscus(Request $request)
    {
        $discus = new Discuses;

        $discus->name = $request->name;
        $discus->comment = $request->comment;

        $discus->save();

        return redirect('/')->with('message', 'Discus Added Succesfully');
    }

    public function delDiscus($id)
    {
        $discus = Discuses::find($id);
        $discus->delete();

        return redirect()->back()->with('message', 'Discuses Deleted Succesfully');
    }
}
