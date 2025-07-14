<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Theme;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $themes = Theme::latest()->get();
        return view('pages.themes.index', compact('themes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.themes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'slug'        => 'nullable|string|unique:themes,slug',
            'thumbnail'   => 'nullable|image|max:2048',
            'price'       => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        $data         = $request->only('name', 'slug', 'price', 'description');
        $data['slug'] = $data['slug'] ?? Str::slug($data['name']);

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('themes', 'public');
        }

        Theme::create($data);

        return redirect()->route('themes.index')->with('success', 'Tema berhasil ditambahkan.');
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
    public function edit(Theme $theme)
    {
        return view('pages.themes.edit', compact('theme'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Theme $theme)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'slug'        => 'nullable|string|unique:themes,slug,' . $theme->id,
            'thumbnail'   => 'nullable|image|max:2048',
            'price'       => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        $data         = $request->only('name', 'slug', 'price', 'description');
        $data['slug'] = $data['slug'] ?? Str::slug($data['name']);

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('themes', 'public');
        }

        $theme->update($data);

        return redirect()->route('themes.index')->with('success', 'Tema berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Theme $theme)
    {
        $theme->delete();
        return redirect()->route('themes.index')->with('success', 'Tema berhasil dihapus.');
    }
}