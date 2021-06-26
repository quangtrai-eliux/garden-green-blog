<?php

namespace App\Http\Controllers;

use App\Models\PostType;
use Illuminate\Http\Request;
use App\Repositories\PostType\PostTypeRepositoryInterface;

class PostTypeController extends Controller
{
    /**
     * @var PostTypeRepositoryInterface|\App\Repositories\Repository
     */
    protected $posttypeRepo;

    public function __construct(PostTypeRepositoryInterface $posttypeRepo)
    {
        $this-> posttypeRepo = $posttypeRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posttypes = $this->posttypeRepo->getAll();
        return view('posttypes.index', ['posttypes' => $posttypes]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posttypes.create');
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
        $posttype = $this->posttypeRepo->create($data);
        return redirect()->route('posttypes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostType  $posttype
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posttype = $this->posttypeRepo->find($id);
        return view('posttypes.show', ['posttype' => $posttype]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostType  $posttype
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posttype = $this->posttypeRepo->find($id);
        return view('posttypes.edit', array('posttype' => $posttype));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PostType  $posttype
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        //... Validation here
        $posttype = $this->posttypeRepo->update($id, $data);
        return redirect()->route('posttypes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostType  $posttype
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->posttypeRepo->delete($id);
        return redirect()->route('posttypes.index');
    }
}