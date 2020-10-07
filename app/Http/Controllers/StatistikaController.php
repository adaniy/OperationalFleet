<?php

namespace App\Http\Controllers;

use App\automjeti;
use App\karburanti;
use App\puna;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Http\Controllers\ApiController;

class StatistikaController extends ApiController
{

    public function index()
    {
        $punas = DB::table('puna')->orderBy('created_at', 'desc')->take(5)->where('progresi','!=','100')->get();

        return view('statistika.index',compact('punas'));
    }


    public function shumaGjithesej()
    {
        $karburantets = DB::table('karburanti')->where('deleted_at', null)->get();
        $shumaKarburant=0;
        foreach($karburantets as $k){
            $shumaKarburant += $k->shuma;
        }

        $pjeses = DB::table('pjese')->where('deleted_at', null)->get();
        $shumaPjese=0;
        foreach($pjeses as $k){
            $shumaPjese += $k->shuma;
        }

        $servises = DB::table('servisi')->where('deleted_at', null)->get();
        $shumaServise=0;
        foreach($servises as $k){
            $shumaServise += $k->shuma;
        }


        return response()->json(['shumaKarburant'=>$shumaKarburant ,'shumaPjese'=>$shumaPjese ,'shumaServise' => $shumaServise]);

    }

    public function shpenzimeJavore()
    {
        Carbon::setWeekStartsAt(Carbon::SUNDAY);
        Carbon::setWeekEndsAt(Carbon::SATURDAY);

        $karburantets = DB::table('karburanti')->where('deleted_at', null)->whereBetween('created_at', [Carbon::now()->startOfWeek(),Carbon::now()->endOfWeek()])->get();
        $shumaKarburant=0;
        foreach($karburantets as $k){
            $shumaKarburant += $k->shuma;
        }

        $pjeses = DB::table('pjese')->where('deleted_at', null)->whereBetween('created_at', [Carbon::now()->startOfWeek(),Carbon::now()->endOfWeek()])->get();
        $shumaPjese=0;
        foreach($pjeses as $k){
            $shumaPjese += $k->shuma;
        }

        $servises = DB::table('servisi')->where('deleted_at', null)->whereBetween('created_at', [Carbon::now()->startOfWeek(),Carbon::now()->endOfWeek()])->get();
        $shumaServise=0;
        foreach($servises as $k){
            $shumaServise += $k->shuma;
        }

        $ans = $shumaKarburant + $shumaPjese + $shumaServise;

        return compact('ans');
    }

    public function shpenzimeMujore()
    {

        $thisMonth = Carbon::now()->month;

        $karburantets = DB::table('karburanti')->where('deleted_at', null)->whereMonth('created_at', $thisMonth)->get();
        $shumaKarburant=0;
        foreach($karburantets as $k){
            $shumaKarburant += $k->shuma;
        }

        $pjeses = DB::table('pjese')->where('deleted_at', null)->whereMonth('created_at', $thisMonth)->get();
        $shumaPjese=0;
        foreach($pjeses as $k){
            $shumaPjese += $k->shuma;
        }

        $servises = DB::table('servisi')->where('deleted_at', null)->whereMonth('created_at', $thisMonth)->get();
        $shumaServise=0;
        foreach($servises as $k){
            $shumaServise += $k->shuma;
        }

        $ans = $shumaKarburant + $shumaPjese + $shumaServise;

        return compact('ans');
    }

    public function numriPuneve()
    {
        $punets = DB::table('puna')->where('deleted_at', null)->where('progresi','!=','100')->get();

        $ans = count($punets);

        return compact('ans');
    }

    public function punetJavore()
    {
        Carbon::setWeekStartsAt(Carbon::SUNDAY);
        Carbon::setWeekEndsAt(Carbon::SATURDAY);

        $ans = DB::table('puna')->where('deleted_at', null)->whereBetween('created_at', [Carbon::now()->startOfWeek(),Carbon::now()->endOfWeek()])->avg('progresi');

        $ans = number_format((float)$ans, 2, '.', '');

        return compact('ans');



    }

}
