<?php
/**
 * Created by PhpStorm.
 * User: afif
 * Date: 17/02/2020
 * Time: 8:31
 */

namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function store(Request $request)
    {

        $news = new News();
        $news->title = $request->title;
        $news->description = $request->description;

        $news->save();

        $data = [
            'status' => 'success',
            'code' => 200,
            'data' => $news
        ];

        return response()->json($data);

    }

}