<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Detail;
use App\Model\Car;
use App\Model\Hotel;
use App\Model\Client;
use App\Model\Picture;
use Mail;

class AdminController extends Controller
{
    public function activePost(Request $request){
        $id = $request->id;
        $news = Detail::find($id);
        if($news->active == 0){
            $news->active = 1;
            $return = '<button onClick="activePost('.$news->id.')" class="pd-setting">Active</button>';
        }else{
            $news->active = 0;
            $return = '<button onClick="activePost('. $news->id .')" class="ds-setting">Disabled</button>';
        }
        $news->save();
        return $return;
    }
    public function activeClient(Request $request){
        $id = $request->id;
        $news = Client::with('cost')->with('train')->where('id',$id)->first();
        $news->active = 1;
        $email = $news->email;
        Mail::send('success',array(
            'name' => $news->fullname,
            'day' => $news->day,
            'ticket' => $news->ticket,
            'id' => $news->id,
        ),function($message) use ($email){
            $message->to($email,'Phòng vé Sa Kỳ')->subject('Thanh toán thành công');
        });
        $news->update();

        return '<button class="pd-setting">Đã gửi vé</button>';
    }
    public function activeHotel(Request $request){
        $id = $request->id;
        $news = Hotel::find($id);
        if($news->active == 0){
            $news->active = 1;
            $return = '<button onClick="activeHotel('.$news->id.')" class="pd-setting">Active</button>';
        }else{
            $news->active = 0;
            $return = '<button onClick="activeHotel('. $news->id .')" class="ds-setting">Disabled</button>';
        }
        $news->save();
        return $return;
    }
    public function activeCar(Request $request){
        $id = $request->id;
        $news = Car::find($id);
        if($news->active == 0){
            $news->active = 1;
            $return = '<button onClick="activeCar('.$news->id.')" class="pd-setting">Active</button>';
        }else{
            $news->active = 0;
            $return = '<button onClick="activeCar('. $news->id .')" class="ds-setting">Disabled</button>';
        }
        $news->save();
        return $return;
    }
    public function picture(Request $request){
        $id = $request->id;
        $picture = Picture::find($id);
        $app_path = str_replace("\\", '/', public_path());
        $file_path = $app_path.'/upload/'.$picture->name;
        if (file_exists($file_path)){
            unlink($file_path);
        }
        $picture->delete();
        return '';
    }
}
