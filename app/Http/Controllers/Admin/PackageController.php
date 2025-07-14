<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Theme;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packages = Package::with('themes')->latest()->get();
        return view('pages.packages.index', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $themes = Theme::all();
        return view('pages.packages.create', compact('themes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'price'    => 'required|numeric',
            'features' => 'required',
            'themes'   => 'nullable|array',
        ]);

        $features = preg_split('/\r\n|\r|\n/', $request->features); // pecah per baris

        $package = Package::create([
            'name'     => $request->name,
            'price'    => $request->price,
            'features' => array_filter($features),
        ]);

        if ($request->has('themes')) {
            $package->themes()->sync($request->themes);
        }

        return redirect()->route('packages.index')->with('success', 'Paket berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $package = Package::with('themes')->findOrFail($id);
        $themes  = Theme::all();
        return view('pages.packages.edit', compact('package', 'themes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'     => 'required',
            'price'    => 'required|numeric',
            'features' => 'required|array',
            'themes'   => 'nullable|array',
        ]);

        $package = Package::findOrFail($id);

        $package->update([
            'name'     => $request->name,
            'price'    => $request->price,
            'features' => array_filter($request->features),
        ]);

        $package->themes()->sync($request->themes ?? []);

        return redirect()->route('packages.index')->with('success', 'Paket berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $package = Package::findOrFail($id);
        $package->themes()->detach();
        $package->delete();

        return redirect()->route('packages.index')->with('success', 'Paket berhasil dihapus.');
    }
}