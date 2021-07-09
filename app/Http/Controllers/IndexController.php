<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanhmucTruyen;
use App\Models\Truyen;
use App\Models\Chapter;
use App\Models\Theloai;
class IndexController extends Controller
{
    public function tabs_danhmuc(Request $request){
        $data = $request->all();
        $output = '';
        $truyen = Truyen::with('danhmuctruyen','theloai')->where('danhmuc_id',$data['danhmuc_id'])->take(10)->get();
        foreach ($truyen as $key => $value) {
            $output.='

                <ul class="mucluctag_truyen">

                    <li><a href="xem-truyen/'.$value->slug_truyen.'">'.$value->tentruyen.'</a></li>
              
                </ul>

            ';
        }
        echo $output;
    }
    public function home(){
        $theloai = Theloai::orderBy('id','DESC')->get();
    	$danhmuc = DanhmucTruyen::orderBy('id','DESC')->get();
    	$truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->simplePaginate(8);

        $truyen_xemnhieu = Truyen::orderBy('id','ASC')->where('kichhoat',0)->take(4)->get();

        $slide_truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->take(11)->get();

    	return view('pages.home')->with(compact('danhmuc','truyen','theloai','slide_truyen','truyen_xemnhieu'));
    }
    public function danhmuc($slug){
        $theloai = Theloai::orderBy('id','DESC')->get();
    	$danhmuc = DanhmucTruyen::orderBy('id','DESC')->get();
        $slide_truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->take(8)->get();

    	$danhmuc_id = DanhmucTruyen::where('slug_danhmuc',$slug)->first();
    	$tendanhmuc = $danhmuc_id->tendanhmuc;
    	$truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->where('danhmuc_id',$danhmuc_id->id)->get();
    	return view('pages.danhmuc')->with(compact('danhmuc','truyen','tendanhmuc','theloai','slide_truyen'));
    }
    public function theloai($slug){
        $theloai = Theloai::orderBy('id','DESC')->get();
        $danhmuc = DanhmucTruyen::orderBy('id','DESC')->get();
        $slide_truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->take(8)->get();

        $theloai_id = Theloai::where('slug_theloai',$slug)->first();
        $tentheloai = $theloai_id->tentheloai;
        $truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->where('theloai_id',$theloai_id->id)->get();
        return view('pages.theloai')->with(compact('danhmuc','truyen','tentheloai','theloai','slide_truyen'));
    }
    public function xemtruyen($slug){
        $theloai = Theloai::orderBy('id','DESC')->get();
     	$danhmuc = DanhmucTruyen::orderBy('id','DESC')->get();
        $slide_truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->take(3)->get();
     	$truyen = Truyen::with('danhmuctruyen','theloai')->where('slug_truyen',$slug)->where('kichhoat',0)->first();
        $truyennoibat = Truyen::where('truyen_noibat',1)->take(4)->get();
        $truyenxemnhieu = Truyen::where('truyen_noibat',2)->take(4)->get();
     	
     	$chapter = Chapter::with('truyen')->orderBy('id','DESC')->where('truyen_id',$truyen->id)->get();
     	$chapter_dau = Chapter::with('truyen')->orderBy('id','ASC')->where('truyen_id',$truyen->id)->first();
        $chapter_cuoi = Chapter::with('truyen')->orderBy('id','DESC')->where('truyen_id',$truyen->id)->first();

     	$cungdanhmuc = Truyen::with('danhmuctruyen','theloai')->where('danhmuc_id',$truyen->danhmuctruyen->id)->whereNotIn('id',[$truyen->id])->get();
        $cungtheloai = Truyen::with('danhmuctruyen','theloai')->where('theloai_id',$truyen->theloai->id)->whereNotIn('id',[$truyen->id])->take(4)->get();
    	return view('pages.truyen')->with(compact('danhmuc','truyen','chapter','cungdanhmuc','chapter_dau','theloai','cungtheloai','slide_truyen','chapter_cuoi','truyennoibat','truyenxemnhieu'));
    }
    public function xemchapter($slug){
        $theloai = Theloai::orderBy('id','DESC')->get();
    	$danhmuc = DanhmucTruyen::orderBy('id','DESC')->get();
        $slide_truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->take(8)->get();

        $truyen = Chapter::where('slug_chapter',$slug)->first();
        //breadcrumb
        $truyen_breadcrumb = Truyen::with('danhmuctruyen','theloai')->where('id',$truyen->truyen_id)->where('kichhoat',0)->first();
        //end breadcrumb
      
    	
     	$chapter = Chapter::with('truyen')->where('slug_chapter',$slug)->where('truyen_id',$truyen->truyen_id)->first();
     	$allchapter = Chapter::with('truyen')->orderBy('id','ASC')->where('truyen_id',$truyen->truyen_id)->get();
     	$next_chapter = Chapter::where('truyen_id',$truyen->truyen_id)->where('id','>',$chapter->id)->min('slug_chapter');

     	$max_id = Chapter::where('truyen_id',$truyen->truyen_id)->orderBy('id','DESC')->first();
     	$min_id = Chapter::where('truyen_id',$truyen->truyen_id)->orderBy('id','ASC')->first();

     	$previous_chapter = Chapter::where('truyen_id',$truyen->truyen_id)->where('id','<',$chapter->id)->max('slug_chapter');	

    	return view('pages.chapter')->with(compact('danhmuc','chapter','allchapter','next_chapter','previous_chapter','max_id','min_id','theloai','truyen_breadcrumb','slide_truyen'));
    }
    public function timkiem(){
        
        $theloai = Theloai::orderBy('id','DESC')->get();
        $danhmuc = DanhmucTruyen::orderBy('id','DESC')->get();
        $slide_truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->take(8)->get();

        $tukhoa = $_GET['tukhoa'];
        $truyen = Truyen::with('danhmuctruyen','theloai')->where('tentruyen','LIKE','%'.$tukhoa.'%')->orWhere('tacgia','LIKE','%'.$tukhoa.'%')->get();
        return view('pages.timkiem')->with(compact('danhmuc','truyen','theloai','slide_truyen','tukhoa'));
    }
    // Tìm kiếm nâng cao đổ dropmenu xuống
    public function autocomplete_ajax(Request $request){
        $data = $request->all();

        if($data['query']){
            $truyen = Truyen::where('kichhoat',0)->where('tentruyen','LIKE','%'.$data['query'].'%')->get();
            $output = '<ul class="dropdown-menu" style="display: block;">';

            foreach ($truyen as $key => $value) {
                $output .= '<li class="li_search_ajax"><a href="#">'.$value->tentruyen.'</a></li>';
            }
            $output .= '</ul>';
            echo $output;
        }
    }
    public function tag($tag){
        // $info = Info::find(1);
        // $title = 'Tìm kiếm tags';
        // //seo
        // $meta_desc = 'Tìm kiếm tags';
        // $meta_keywords = 'Tìm kiếm tags';
        // $url_canonical = \URL::current();
        // $og_image = url('public/uploads/logo'.$info->logo);
        // $link_icon = url('public/uploads/logo'.$info->logo);

        $theloai = Theloai::orderBy('id','DESC')->get();
        $danhmuc = DanhmucTruyen::orderBy('id','DESC')->get();
        $slide_truyen = Truyen::orderBy('id','DESC')->where('kichhoat',0)->take(8)->get();

        $tags = explode("-", $tag);

        $truyen = Truyen::with('danhmuctruyen','theloai')->where(
            function ($query) use ($tags) {
                for ($i=0; $i < count($tags) ; $i++) { 
                    $query->orWhere('tukhoa','like','%' . $tags[$i] . '%');
                }
            }
        )->paginate(12);
        return view('pages.tag')->with(compact('danhmuc','theloai','truyen','slide_truyen','tag'));

    }

}
