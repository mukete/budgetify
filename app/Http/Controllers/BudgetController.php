<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Budget;
use App\Category;

class BudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $data['items'] = Budget::orderBy('created_at', 'desc')->paginate(20);

        return view('website.budget.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        $data['categories'] = Category::all();

        return view('website.budget.create')->with($data);
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
        //
        $this->validate($request, [
            'item' => 'required',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
            'category' => 'required',
        ]);

        $budget = new Budget();
        $budget->department_id = 1;// to be gotten form logged in user details
        $budget->item = $request->input('item');
        $budget->quantity = $request->input('quantity');
        $budget->price = $request->input('price');
        $budget->category_id = $request->input('category');
        $budget->status = 'DRAFT';
        $budget->start_year = 2015; // to be gotten from system
        $budget->end_year = 2016; // to be gotten from system
        $budget->save();

        return redirect()->to('budget');
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
