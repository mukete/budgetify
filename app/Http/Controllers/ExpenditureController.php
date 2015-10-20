<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Expenditure;

class ExpenditureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $data['expenditures'] = Expenditure::orderBy('created_at', 'desc')->paginate(20);

        return view('website.expenditure.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        $data['a'] = '';

        return view('website.expenditure.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        // validate form data all fields are required
        $this->validate($request, [
            'title' => 'required',
            'details' => 'required',
            'status' => 'required',
        ]);

        // if validation passes insert into database
        $expenditure = new Expenditure();
        $expenditure->department_id = 1;// to be gotten form logged in user details
        $expenditure->title = $request->input('title');
        $expenditure->details = $request->input('details');
        $expenditure->code = str_random(32);
        $expenditure->status = 'DRAFT';
        $expenditure->save();

        return  redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int     $id
     *
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
