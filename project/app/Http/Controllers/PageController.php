<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Projet;
use App\Models\Publication;
use App\Models\TypePublication;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return View('index');
    }

    /**
     * Display a listing of the resource.
     */
    public function dash()
    {
        return View('admin.pages.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function about()
    {
        return View('about');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function publication()
    {
        $publication = Publication::all();
        $types = TypePublication::all();
        $recents_pub = Publication::OrderBy('created_at', 'ASC')->get();
        return View('publication', compact('publication', 'types', 'recents_pub'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function typePub($id)
    {
        $find = TypePublication::find($id);
        $publication = Publication::where('type_publications_id', '=', $id)->get();
        return View('publication', compact('publication', 'find'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function single_pub($id)
    {
        $find = Publication::find($id);
        return View('single_publication', compact('find'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function single_blog($id)
    {
        $find = Post::find($id);
        return View('single_blog', compact('find'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function instance()
    {
        return View('instances');
    }

    /**
     * Display the specified resource.
     */
    public function contact()
    {
        return View('contact');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function blog()
    {
        $collection = Post::all();
        return View('blog', compact('collection'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function nos_projet()
    {
        $collection = Projet::all();
        return View('nos_projet', compact('collection'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function single_project($id)
    {
        $find = Projet::find($id);
        return View('single_project', compact('find'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function form_member()
    {
        return View('register_membre');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function form_student()
    {
        return View('register_student');
    }

    /**
     * Update the specified resource in storage.
     */
    public function store_membre(Request $request)
    {
        User::create([
            'roles_id' => $request->roles_id,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'photo' => Storage::disk('public')->put('photo', $request->photo),
            'telephone' => $request->telephone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'institution' => $request->institution,
            'profession' => $request->profession,
            'diplome' => $request->diplome,
            'linkedin' => $request->linkedin,
            'date_inscription' => $request->date_inscription,
            'active' => $request->active,
        ]);

        return redirect()->route('form_member')->with('status', 'Vos information ont été envoyer pour verification, merci de patientez !');
    }

    /**
     * Update the specified resource in storage.
     */
    public function store_student(Request $request)
    {
        User::create([
            'roles_id' => $request->roles_id,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'diplome' => $request->diplome,
            'active' => $request->active,
        ]);

        return redirect()->route('form_student')->with('status', 'Vos information ont été envoyer pour verification, merci de patientez !');
    }

    public function postBlog(Request $request)
    {
        User::create($request->all());

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     */
    function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'active' => 'actif'])) {
            if (Auth::user()){
                return redirect()->route('dashboard');
            }
             else {
                return view('index');
            }
        }
        return view('index');
    }

    function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
