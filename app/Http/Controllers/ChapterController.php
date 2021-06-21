<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Truyen;
use App\Models\Chapter;


class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $truyen = Truyen::orderBy('id','DESC')->get();
        return view('admincp.chapter.create')->with(compact('truyen'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'tieude' => 'required|unique:chapter|max:255',
                'slug_chapter' => 'required|unique:chapter|max:255',

                'noidung' => 'required',
                'tomtat' => 'required',
                'kichhoat' => 'required',
                'truyen_id' => 'required',
            ],
            [
                'tieude.unique' => 'Slug đã có vui lòng điền tên khác',
                'slug_chapter.unique' => 'Tên truyện đã có vui lòng điền tên khác',
                'slug_chapter.required' => 'Slug chapter trống',
                'tieude.required' => 'Tên slug_chapter trống',
                'tomtat.required' => 'Tóm tắt chapter trống',
                'noidung.required' => 'Nội dung trống',
                'truyen_id.required' => 'Truyện id trống',
            ]
        );
        $chapter = new Chapter();
        $chapter->tieude = $data['tieude'];
        $chapter->slug_chapter = $data['slug_chapter'];
        $chapter->noidung = $data['noidung'];
        $chapter->tomtat = $data['tomtat'];
        $chapter->kichhoat = $data['kichhoat'];
        $chapter->truyen_id = $data['truyen_id'];

        $chapter->save();
        return redirect()->back()->with('status','Thêm chapter thành công');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
