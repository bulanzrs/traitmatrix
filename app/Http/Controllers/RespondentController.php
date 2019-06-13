<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Question;
use DB;
class RespondentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shares = Question::all();
        return view('respondent.cpp', compact('shares'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //initialise all cluster value
        $cluster1 = 0; $cluster2 = 0; $cluster3 = 0;
        $cluster4 = 0; $cluster5 = 0; $cluster6 = 0;

        //initialise the adt value
        $cluster1_a = 0; $cluster1_d = 0; $cluster1_t = 0;
        $cluster2_a = 0; $cluster2_d = 0; $cluster2_t = 0;
        $cluster3_a = 0; $cluster3_d = 0; $cluster3_t = 0;
        $cluster4_a = 0; $cluster4_d = 0; $cluster4_t = 0;
        $cluster5_a = 0; $cluster5_d = 0; $cluster5_t = 0;
        $cluster6_a = 0; $cluster6_d = 0; $cluster6_t = 0;

       //get respondent details
        $nm = $request->input('name');
        $email= $request->input('email');
        $cname = $request->input('cname');
        $positions = $request->input('positions');
        //insert in to table respondent
        DB::table('respondent')->insert(
            ['name' => $nm, 'email' => $email,'company_name'=>$cname,'positions'=>$positions]
        );

        //after insert get the id of the user
        $assesment_query = DB::table('respondent')->select('id')->where('email',$email)->first();
        if($assesment_query!=null) {
            $id = $assesment_query->id;
        }
        $selected = Input::get('optradio');
        foreach ($selected as $selected=> $option)
        {
            //check reverse quetion or not
            $check_reverse = DB::table('questions')->select('reverse')->where('id',$selected)->first();
            if($check_reverse->reverse==1) {
               if($option==1){
                   $option=6;
               }
               if($option==2){
                    $option=5;
                }
                if($option==3){
                    $option=4;
                }
                if($option==4){
                    $option=3;
                }
                if($option==5){
                    $option=2;
                }
                if($option==6){
                    $option=1;
                }
            }


            //store the value of cluster
            //------------------------------------------------
            //get the cluster of question
            $query_cluster = DB::table('questions')->select('cluster','adt')->where('id',$selected)->first();
            if($query_cluster!=null) {
                $cluster = $query_cluster->cluster;
                $adt = $query_cluster->adt;

                //for cluster
                if($cluster=='cluster1'){
                    $cluster1=$cluster1+$option;
                }
                if($cluster=='cluster2'){
                    $cluster2=$cluster2+$option;
                }
                if($cluster=='cluster3'){
                    $cluster3=$cluster3+$option;
                }
                if($cluster=='cluster4'){
                    $cluster4=$cluster4+$option;
                }
                if($cluster=='cluster5'){
                    $cluster5=$cluster5+$option;
                }

                //for adt
                //1
                if($adt=='cluster1_a'){
                    $cluster1_a=$cluster1_a+$option;
                }
                if($adt=='cluster1_d'){
                    $cluster1_d=$cluster1_d+$option;
                }
                if($adt=='cluster1_t'){
                    $cluster1_t=$cluster1_t+$option;
                }
                //2
                if($adt=='cluster2_a'){
                    $cluster2_a=$cluster2_a+$option;
                }
                if($adt=='cluster2_d'){
                    $cluster2_d=$cluster2_d+$option;
                }
                if($adt=='cluster1_t'){
                    $cluster2_t=$cluster2_t+$option;
                }
                //3
                if($adt=='cluster3_a'){
                    $cluster3_a=$cluster3_a+$option;
                }
                if($adt=='cluster3_d'){
                    $cluster3_d=$cluster3_d+$option;
                }
                if($adt=='cluster3_t'){
                    $cluster3_t=$cluster3_t+$option;
                }
                //4
                if($adt=='cluster4_a'){
                    $cluster4_a=$cluster4_a+$option;
                }
                if($adt=='cluster4_d'){
                    $cluster4_d=$cluster4_d+$option;
                }
                if($adt=='cluster4_t'){
                    $cluster4_t=$cluster4_t+$option;
                }
                //5
                if($adt=='cluster5_a'){
                    $cluster5_a=$cluster5_a+$option;
                }
                if($adt=='cluster5_d'){
                    $cluster5_d=$cluster5_d+$option;
                }
                if($adt=='cluster5_t'){
                    $cluster5_t=$cluster5_t+$option;
                }
                //6
                if($adt=='cluster6_a'){
                    $cluster6_a=$cluster6_a+$option;
                }
                if($adt=='cluster6_d'){
                    $cluster6_d=$cluster6_d+$option;
                }
                if($adt=='cluster6_t'){
                    $cluster6_t=$cluster6_t+$option;
                }
            }
            //-------------------------------------------------
            DB::table('q_answer')->insert(
                ['respondent_id' => $id, 'question_id' => $selected,'rating'=>$option]
            );
        }//end foreach

        //insert into cpp_over all
        DB::table('cpp_mark_overall')->insert(
            [
                'respondent_id' => $id,
                'assesment_id' => '1',
                'score_cluster1'=>$cluster1,
                'score_cluster2'=>$cluster2,
                'score_cluster3'=>$cluster3,
                'score_cluster4'=>$cluster4,
                'score_cluster5'=>$cluster5,
                'score_cluster6'=>$cluster6,
            ]
        );

        //insert into adt_over all
        DB::table('cpp_mark_adt')->insert(
            [
                'respondent_id' => $id,
                'assesment_id' => '1',

                'cluster1_a'=>$cluster1_a,
                'cluster1_d'=>$cluster1_d,
                'cluster1_t'=>$cluster1_t,

                'cluster2_a'=>$cluster2_a,
                'cluster2_d'=>$cluster2_d,
                'cluster2_t'=>$cluster2_t,

                'cluster3_a'=>$cluster3_a,
                'cluster3_d'=>$cluster3_d,
                'cluster3_t'=>$cluster3_t,

                'cluster4_a'=>$cluster4_a,
                'cluster4_d'=>$cluster4_d,
                'cluster4_t'=>$cluster4_t,

                'cluster5_a'=>$cluster5_a,
                'cluster5_d'=>$cluster5_d,
                'cluster5_t'=>$cluster5_t,

                'cluster6_a'=>$cluster6_a,
                'cluster6_d'=>$cluster6_d,
                'cluster6_t'=>$cluster6_t,

            ]
        );

        return view('respondent.thanks');
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
