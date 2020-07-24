<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UrlRequest;
use App\Models\Url;
use App\Libs\simple_html_dom;

class UrlController extends Controller
{
    public function submit(UrlRequest $req){
//        $favicon = "";
//        $title = "";
//        $description = "";
//        $keywords = "";



        $url_data = new Url();
        $url_data->url = $req->input('url');

        $url = $url_data->url;
        $html = new simple_html_dom();
        $html->load_file( $url );

        $title = $html->find('title');
        if($title != NULL) {
            $title = array_shift($title)->innertext;
        }else $title = "Не найден";


        $description = $html->find("meta[name='description']");
        if($description != NULL) {
            $description = array_shift($description)->content;
        }else $description = "Не найден";


        $keywords = $html->find("meta[name='keywords']");
        if($keywords != NULL) {
            $keywords = array_shift($keywords)->content;
        }else $keywords = "Не найден";

        $favicon = $html->find("link[rel*=icon]");
        if($favicon != NULL) {
            $favicon = array_shift($favicon)->href;
            $favicon = $url . $favicon;
        }else $favicon = "Не найден";



        $url_data->favicon = $favicon;
        $url_data->header = $title;
        $url_data->description = $description;
        $url_data->keywords = $keywords;

        $url_data->save();

        return redirect()->route('url-data' )->with('success', "URL успешно добавлен в базу");

    }

    public function allData(){

        $url_data = new Url;
        return view('url-data', ['data' => $url_data->orderBy('created_at', 'desc')->get()]);

    }

    public function showOneUrl($id){
        $url_data = new Url;
        return view('one-url', ['data' => $url_data->find($id)]);
    }

    public function deleteUrl($id){
        Url::find($id)->delete();
        return redirect()->route('url-data' )->with('success', "URL успешно удален из базы");

    }

    public function showLastUrl(){

        $url_data = new Url;
        return view('url-data', ['data' => $url_data->orderBy('id', 'desc')->first()->get()]);

    }


}
