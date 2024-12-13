<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
class ResumeBuilderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resumes  = Resume::query()
        ->where('user_id', request()->user()->id)
        ->orderBy('created_at', 'desc')->paginate(5);

        return view('dashboard', ['resumes' => $resumes]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('auth.generateCv');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([

            'name'         => ['required', 'string'],
            'lastname'     => ['required', 'string'],
            'email'        => ['required', 'string'],
            'phone'        => ['required', 'string'],
            'project'      => ['required', 'string'],
            'award'        => ['required', 'string'],
            'summary'      => ['required', 'string'],
            'references'   => ['required', 'string'],
            'img'          => ['required'],
            'certificate'  => ['required'],
            'experience'   => ['required', 'string'],
            'reward'       => ['required', 'string'],
            'template_name'       => ['required', 'string'],
            
            
                ]);

                $data['user_id']   =   $request->user()->id;
                
                $resumeid  = Resume::create($data);
                return to_route('cv.template3', $resumeid)
            ->with('message', 'CV has been created ');;




        }
    /**
     * Display the specified resource.
     */
    public function show($resumeid) {
         
        $resume  = Resume::find($resumeid);

        if ($resume->template_name == 'template1') {

            return to_route('cv.template3', $resumeid)
            ->with('message', 'CV has been created ');;

        }else if ($resume->template_name == 'template2') {

            return to_route('cv.template2', $resumeid)
            ->with('message', 'CV has been created ');;

        }else if ($resume->template_name == 'template3') {

            return to_route('cv.template1', $resumeid)
            ->with('message', 'CV has been created ');

        }else{

            return to_route('cv.create')->with('please select template');
        }
        

}



    /**
     * Show the form for editing the specified resource.
     */
    public function edit($resumeid)
    {
        $resume  = Resume::find($resumeid);
         
        return view('auth.edit', ['resume' =>  $resume]);
   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resume $resume)
    {
        $data = $request->validate([

            'name'         => ['required', 'string'],
            'lastname'     => ['required', 'string'],
            'email'        => ['required', 'string'],
            'phone'        => ['required', 'string'],
            'project'      => ['required', 'string'],
            'award'        => ['required', 'string'],
            'summary'      => ['required', 'string'],
            'references'   => ['required', 'string'],
            'img'          => ['required'],
            'certificate'  => ['required'],
            'experience'   => ['required', 'string'],
            'reward'       => ['required', 'string'],
            'template_name'       => ['required', 'string'],
            
            
                ]);

                                
                
                
                /*$resume->name         = $request->name;
                $resume->lastname     = $request->lastname;
                $resume->email        = $request->email;
                $resume->phone        = $request->phone;
                $resume->project      = $request->project;
                $resume->award        = $request->award;
                $resume->summary      = $request->summary;
                $resume->references   = $request->references;
                $resume->img          = $request->img;
                $resume->certificate  = $request->certificate;
                $resume->experience   = $request->experience;
                $resume->reward       = $request->reward;
                $resume->template_name= $request->template_name;
                
               */
                $resume  = $resume->update($data);  
        
                return to_route('cv.index', $resume)
                ->with('message', 'CV has been updated');
                    
            }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($resumeid)
    {
        $resume  = Resume::find($resumeid);
         
        $resume->delete();

        return to_route('cv.index', $resume)
        ->with('message', 'CV has been deleted ');
        
    }

    
    public function template3($resume){
             
      
        $resume   =  Resume::find($resume);
       
       
    
        return view('auth.template3', ['resume' => $resume]);
    
        
    }


    public function template2($resume){
             
        $resume   =  Resume::find($resume);
       
        return view('auth.template2', ['resume' => $resume]);
    
        
    }

    public function template1($resume){
        
        $resume   =  Resume::find($resume);
       
        return view('auth.templates', ['resume' => $resume]);
    
        
    }

     
    function print($resumeid){  
        
        $resume   = Resume::find($resumeid);
        $pdf  = Pdf::loadView('auth.template2', compact('resume'));
        return $pdf->download('template2.pdf');
        
    }
    
        
}
