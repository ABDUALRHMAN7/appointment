<?php 
namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function create()
    {
        return view('appointments.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $Request = $request->validate([
            'date' => 'required|date', 
            
        ]);

      
        return $request ;
    }
}
