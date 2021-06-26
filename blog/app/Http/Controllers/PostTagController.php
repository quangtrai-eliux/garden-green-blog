<?php

namespace App\Http\Controllers;

use App\Models\PostTag;
use App\Models\Tag;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Repositories\PostTag\PostTagRepositoryInterface;

class PostTagController extends Controller
{
    /**
     * @var PostTagRepositoryInterface|\App\Repositories\Repository
     */
    protected $posttagRepo;

    public function __construct(PostTagRepositoryInterface $posttagRepo)
    {
        $this-> posttagRepo = $posttagRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posttags = $this->posttagRepo->getAll();
        return view('posttags.index', ['posttags' => $posttags]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posttags.create');
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
        $posttag = $this->posttagRepo->create($data);
        return redirect()->route('posttags.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostTag  $posttag
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posttag = $this->posttagRepo->find($id);
        return view('posttags.show', ['posttag' => $posttag]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostTag  $posttag
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posttag = $this->posttagRepo->find($id);
        return view('posttags.edit', array('posttag' => $posttag));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PostTag  $posttag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        //... Validation here
        $posttag = $this->posttagRepo->update($id, $data);
        return redirect()->route('posttags.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostTag  $posttag
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->posttagRepo->delete($id);
        return redirect()->route('posttags.index');
    }
}