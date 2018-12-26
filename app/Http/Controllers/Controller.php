<?php
/**
 * Controller to manage view
 * 
 * PHP version 7.2.11
 * 
 * @category Controllers
 * @package  Controllers
 * @author   Pascal Allen <pascal.allen88@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     http://cakesbytoni.com
 */
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Image;

/**
 * Controller
 * 
 * @category Controllers
 * @package  Controllers
 * @author   Pascal Allen <pascal.allen88@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     http://cakesbytoni.com
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Return home page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home()
    {
        $images = Image::where('main', 1)->get();
        return view('welcome', ['images' => $images]);
    }
}
