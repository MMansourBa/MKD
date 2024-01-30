<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Modele;
use Illuminate\Support\Facades\Auth;
 
class ModeleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modele = Modele::orderBy('created_at', 'DESC')->get();
  
        return view('modeles.index', compact('modele'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('modeles.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     Modele::create($request->all());
 
    //     return redirect()->route('modeles')->with('success', 'Modele ajouté avec succès');
    // }
    public function store(Request $request){

        $file = $request->file('image');

         
        // if ($file) {
        //     $fileName = 'product_' . time() . '.' . $file->extension();
        //     $file->move(public_path('admin_assets/img'), $fileName);
        // } else {
        //     // Gérer le cas où aucun fichier n'a été téléchargé
        //     return back()->with('error', 'No image file uploaded.');
        // }
        
            if ($file) {
                $fileName = $file->getClientOriginalName();
                $file->move(public_path('admin_assets/img'), $fileName);
            } else {
                // Gérer le cas où aucun fichier n'a été téléchargé
                return back()->with('error', 'No image file uploaded.');
            }

 
        Modele::create([
            'name' => $request->name,
            'image' => $fileName,
            'description' => $request->description,
            'user_id' => Auth::user()->id,
        ]);
 
        return back()->with('success', 'Congratulations, your product has been successfully created. Wait until your product is sold');
    }
  
    /**
     * Display the specified resource.
     */
    
    public function show(string $id)
    {
        $modele = Modele::findOrFail($id);
        return view('modeles.show', compact('modele'));
    }

  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $modele = Modele::findOrFail($id);
  
        return view('modeles.edit', compact('modele'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $modele = Modele::findOrFail($id);
  
        $modele->update($request->all());
  
        return redirect()->route('modeles')->with('success', 'Modele modifié avec succès');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $modele = Modele::findOrFail($id);
  
        $modele->delete();
  
        return redirect()->route('modeles')->with('success', 'Modele supprimé avec succès');
    }
}