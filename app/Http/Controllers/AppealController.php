<?php

namespace App\Http\Controllers;

use App\Enums\StatusAppealEnum;
use App\Models\Appeal;
use Illuminate\Http\Request;
use Illuminate\View\View;


class AppealController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $appeals = Appeal::query()->paginate(14);
        return \view('index',compact('appeals'));
    }
    public function usersAppeals( Request $request):View
    {
        $appeals = Appeal::query()
            ->orderBy('created_at','desc')
            ->orderByRaw("CASE WHEN status = '".StatusAppealEnum::PENDING->value."' THEN 0 ELSE 1 END")
            ->get();
        return \view('admin.usersAppeals',compact('appeals'));
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
    public function show(Appeal $appeal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appeal $appeal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Appeal $appeal)
    {
        $appeal->update([
            'status'=>$request->status
        ]);
        return redirect()->route('admin.usersAppeals');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appeal $appeal)
    {
        //
    }
}
