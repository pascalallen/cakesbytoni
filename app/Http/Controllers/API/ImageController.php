<?php
/**
 * Manages images
 * 
 * PHP version 7.2.11
 * 
 * @category Controllers
 * @package  Controllers
 * @author   Pascal Allen <pascal.allen88@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     http://cakesbytoni.com
 */
namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Image;

class ImageController extends Controller
{

    public function index(Request $request): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        $pageSize = $request->get('pageSize', 20);
        
        return Image::distinct()
            ->paginate($pageSize);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request POST from form
     * 
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $imgurId Imgur id from url
     * 
     * @return \Illuminate\Http\Response
     */
    public function show($imgurId)
    {
        $image = Image::where('imgur_id', $imgurId)->first();
        return response()->json($image, Response::HTTP_OK);
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
     * @param int $imgurId Imgur id from url
     * 
     * @return \Illuminate\Http\Response
     */
    public function destroy($imgurId)
    {
        $image = Image::where('imgur_id', $imgurId)->first();

        if (!$image) {
            return response()->json([], Response::HTTP_NOT_FOUND);
        }

        $result = $image->delete();

        return response()->json($result, Response::HTTP_OK);
    }
}
