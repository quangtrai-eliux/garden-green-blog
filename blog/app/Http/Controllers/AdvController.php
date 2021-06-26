<?php

namespace App\Http\Controllers;

use App\Models\Adv;
use Illuminate\Http\Request;
use App\Repositories\Adv\AdvRepositoryInterface;

class AdvController extends Controller
{
    /**
     * @var AdvRepositoryInterface|\App\Repositories\Repository
     */
    protected $advRepo;

    public function __construct(AdvRepositoryInterface $advRepo)
    {
        $this-> advRepo = $advRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advs = $this->advRepo->getAll();
        return view('advs.index', ['advs' => $advs]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('advs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $adv = $this->advRepo->create($data);
        return redirect()->route('advs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adv  $adv
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $adv = $this->advRepo->find($id);
        if(empty($adv)){
            return redirect()->route('advs.index');
        }
        return view('advs.show', ['adv' => $adv]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adv  $adv
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $adv = $this->advRepo->find($id);
        return view('advs.edit', array('adv' => $adv));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adv  $adv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        //... Validation here
        $adv = $this->advRepo->update($id, $data);
        return redirect()->route('advs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adv  $adv
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->advRepo->delete($id);
        return redirect()->route('advs.index');
    }
}
