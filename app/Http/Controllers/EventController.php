<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function indexEvent(){
        $event = Event::all();
        return response()->json($event);
    }
    public function createEvent(EventRequest $request){
        try {
            $data = $request->all();
            $event = Event::create($data);
            $event->save();
            return response()->json($event);
        } catch (\Throwable $th) {
            return response()->json(['status' => 'erro', 'message' => 'Error in the server'], 500);
        }
    }
    public function showEvent($id){
        $event = Event::findOrFail($id);
        return response()->json($event);
    }
    public function updateEvent(EventRequest $request, $id){
        try {
            $data = $request->all();
            $event = Event::findOrFail($id);
            $event->update($data);
            $event->save();
            return response()->json($event);
        } catch (\Throwable $th) {
            return response()->json(['status' => 'erro', 'message' => 'Error in the server'], 500);
        }
    }
    public function deleteEvent($id){
        try {
            $event = Event::findOrFail($id)->delete();
            return response()->json($event);
        } catch (\Throwable $th) {
            return response()->json(['status' => 'erro', 'message' => 'Error in the server'], 500);
        }
    }
}
