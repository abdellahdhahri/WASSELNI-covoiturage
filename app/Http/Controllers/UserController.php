<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;
use App\Http\Controllers\Trajet;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = User::all();
        return $users;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User([
            'name' => $request->input('name'),
            'prenom' => $request->input('prenom'),
            'phone_number' => $request->input('phone_number'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),

            ]);
            $user->save();
            return response()->json($user, 201);
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $user = User::find($id);
        return response()->json($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $user = User::find($id);
        $user->update($request->all());
        return response()->json($user, 200);   
    }

    /**     
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $user = User::find($id);
$user->delete();
return response()->json('Catégorie supprimée !');
    }
   /* public function trajets() :HasMany
    {
        return $this->hasMany(Trajet::class);
    }*/
}
