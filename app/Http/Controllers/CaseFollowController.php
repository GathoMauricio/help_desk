<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CaseFollow;
use App\Models\Caze;

class CaseFollowController extends Controller
{
    public function index($id)
    {
        $follows = CaseFollow::where('case_id', $id)->get();
        $json = [];
        foreach($follows as $follow)
        {
            $json[] = [
                'author' => $follow->author['name']." ".$follow->author['middle_name']." ".$follow->author['last_name'],
                'body' => $follow->body,
                'created_at' => formatDate($follow->created_at)
            ];
        }
        return $json;
    }
    public function store(Request $request)
    {
        $follow = CaseFollow::create($request->all());
        $follows = CaseFollow::where('case_id', $request->case_id)->get();
        $json = [];
        foreach($follows as $follow)
        {
            $json[] = [
                'author' => $follow->author['name']." ".$follow->author['middle_name']." ".$follow->author['last_name'],
                'body' => $follow->body,
                'created_at' => formatDate($follow->created_at)
            ];
        }
        $case = Caze::findOrFail($request->case_id);
        /*
        
        if($case->contact['id'] == \Auth::user()->id){
            //support
            sendPusher($case->support['id'],'message','Se ha agregado seguimiento al caso '.$case->num_case.' : '.$follow->body);
            sendPusher($case->support['id'],'updateFollowBox',"X",['case_id' => $case->id]);
            sendFcm($case->support['fcm_token'],"Nuevo seguimiento", 'Se ha agregado seguimiento al caso '.$case->num_case.' : '.$follow->body,['case_id' => $case->id]);
        }
        if($case->support['id'] == \Auth::user()->id){
            //contacto
            sendPusher($case->contact['id'],'message','Se ha agregado seguimiento al caso '.$case->num_case.' : '.$follow->body);
            sendPusher($case->contact['id'],'updateFollowBox',"X",['case_id' => $case->id]);
            sendFcm($case->contact['fcm_token'],"Nuevo seguimiento", 'Se ha agregado seguimiento al caso '.$case->num_case.' : '.$follow->body,['case_id' => $case->id]);
        }
        */
        #Recarga el chat 
        if(\Auth::user()->id == $case->contact['id'])
        {
            sendPusher(
                $case->support['id'],
                'nuevo_seguimiento',
                "Nuevo seguimiento para recargar el movil",
                ['case_id' => $case->id]);
            sendPusher($case->support['id'],'message','Se ha agregado seguimiento al caso '.$case->num_case.' : '.$follow->body,['case_id' => $case->id]);
            sendFcm($case->support['fcm_token'],"Seguimiento", 'Caso: '.$case->num_case.' : '.$follow->body,['case_id' => $case->id]);
        }else{
            sendPusher(
                $case->contact['id'],
                'nuevo_seguimiento',
                "Nuevo seguimiento para recargar el movil",
                ['case_id' => $case->id]);
            sendPusher($case->contact['id'],'message','Se ha agregado seguimiento al caso '.$case->num_case.' : '.$follow->body,['case_id' => $case->id]);
            sendFcm($case->contact['fcm_token'],"Seguimiento", 'Caso: '.$case->num_case.' : '.$follow->body,['case_id' => $case->id]);
        }
        
        return $json;
    }

    public function verSeguimientos(Request $request)
    {
        $follows = CaseFollow::where('case_id', $request->case_id)->get();
        $json = [];
        foreach($follows as $follow)
        {
            $json[] = [
                'image' => getUrl().'/storage/user_images/'.$follow->author['image'],
                'author' => $follow->author['name']." ".$follow->author['middle_name']." ".$follow->author['last_name'],
                'body' => $follow->body,
                'created_at' => formatDate($follow->created_at)
            ];
        }
        return $json;
    }

    public function guardarSeguimiento(Request $request)
    {
        $follow = CaseFollow::create([
            'case_id' => $request->case_id,
            'body' => $request->body,
        ]);
        $follows = CaseFollow::where('case_id', $request->case_id)->get();
        $json = [];
        foreach($follows as $follow)
        {
            $json[] = [
                'image' => getUrl().'/storage/user_images/'.$follow->author['image'],
                'author' => $follow->author['name']." ".$follow->author['middle_name']." ".$follow->author['last_name'],
                'body' => $follow->body,
                'created_at' => formatDate($follow->created_at)
            ];
        }

        $case = Caze::findOrFail($request->case_id);
        #Recarga el chat 
        if(\Auth::user()->id == $case->contact['id'])
        {
            sendPusher(
                $case->support['id'],
                'nuevo_seguimiento',
                "Nuevo seguimiento para recargar el movil",
                ['case_id' => $case->id]);
            sendPusher($case->support['id'],'message','Se ha agregado seguimiento al caso '.$case->num_case.' : '.$follow->body,['case_id' => $case->id]);
            sendFcm($case->support['fcm_token'],"Seguimiento", 'Caso: '.$case->num_case.' : '.$follow->body,['case_id' => $case->id]);
        }else{
            sendPusher(
                $case->contact['id'],
                'nuevo_seguimiento',
                "Nuevo seguimiento para recargar el movil",
                ['case_id' => $case->id]);
            sendPusher($case->contact['id'],'message','Se ha agregado seguimiento al caso '.$case->num_case.' : '.$follow->body,['case_id' => $case->id]);
            sendFcm($case->contact['fcm_token'],"Seguimiento", 'Caso: '.$case->num_case.' : '.$follow->body,['case_id' => $case->id]);
        }
        #Recargar 
        return $json;
    }
    public function recargarSeguimientos(Request $request)
    {
        $follows = CaseFollow::where('case_id', $request->case_id)->get();
        $json = [];
        foreach($follows as $follow)
        {
            $json[] = [
                'image' => getUrl().'/storage/user_images/'.$follow->author['image'],
                'author' => $follow->author['name']." ".$follow->author['middle_name']." ".$follow->author['last_name'],
                'body' => $follow->body,
                'created_at' => formatDate($follow->created_at)
            ];
        }
        return $json;
    }
}
