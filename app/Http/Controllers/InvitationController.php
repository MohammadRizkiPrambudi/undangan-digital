<?php
namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Invitation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Order $order)
    {
        if ($order->user_id !== Auth::id()) {
            abort(403);
        }

        $invitation = $order->invitation ?? new Invitation(['order_id' => $order->id]);

        return view('invitations.edit', compact('order', 'invitation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $request->validate([
            'slug' => 'required|unique:invitations,slug,' . optional($order->invitation)->id,
            'invitation_data' => 'required|array',
        ]);

        $invitation = Invitation::updateOrCreate(
            ['order_id' => $order->id],
            [
                'slug' => $request->slug,
                'invitation_data' => $request->invitation_data,
            ]
        );

        return redirect()->back()->with('success', 'Undangan berhasil disimpan.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}