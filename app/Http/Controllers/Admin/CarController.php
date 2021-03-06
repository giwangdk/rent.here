<?php

namespace App\Http\Controllers\Admin;

use App\Car;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\carRequest;
use App\Category;

class carController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Car::with(['category']);
            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                    <div class="btn-group">
                        <div class="dropdown">
                            <button class="btn brn-primary dropdown-toggle mr-1 mb-1
                                type="button" data-toggle="dropdown">
                                Aksi
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="' . route('car.edit', $item->id) . '">
                                    Sunting
                                    </a>
                                    <form action="' . route('car.destroy', $item->id) . '" method="post">
                                        ' . method_field('delete') . csrf_field() . '
                                        <button type="submit" class="dropdown-item text-danger">
                                        Hapus
                                        </button>
                                    </form>
                                </div>
                        </div>
                    </div>
                ';
                })
                ->editColumn('photo', function ($item) {
                    return $item->photo ? '<img src="' . Storage::url($item->photo) . '" style="max-height:30px" />'  : '';
                })
                ->rawColumns(['action', 'photo'])
                ->make();
        }
        return view('admin.pages.car.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.pages.car.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(carRequest $request)
    {
        $data = $request->all();
        $data['photo'] = $request->file('photo')->store('assets/car', 'public');
        Car::create($data);

        return redirect()->route('car.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Car::findOrFail($id);
        $categories = Category::all();

        return view('admin.pages.car.edit', compact('item', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(carRequest $request, $id)
    {
        $data = $request->all();

        $data['photo'] = $request->file('photo')->store('assets/car', 'public');

        $item = Car::findOrFail($id);

        $item->update($data);

        return redirect()->route('car.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Car::findOrFail($id);
        $item->delete();

        return redirect()->route('car.index');
    }
}
