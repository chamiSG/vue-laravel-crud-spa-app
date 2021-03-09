<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Resume;

class ResumeController extends Controller
{
    public function index()
    {
        $resumes = Resume::orderBy('id', 'DESC')->get()->all();
        return array_reverse($resumes);      
    }

    public function store(Request $request)
    {
        $resume = new Resume([
            'firstname'       => $request->input('firstname'),
            'lastname'        => $request->input('lastname'),
            'age'             => $request->input('age'),
            'email'           => $request->input('email'),
            'phone'           => $request->input('phone'),
            'address'         => $request->input('address'),
            'dev_type'        => $request->input('devType'),
            'dev_description' => $request->input('devDescription'),
            'avatar'          => "default",
            'skill_name'      => $request->input('skillName'),
            'skill_year'      => $request->input('skillYear'),
            'p_title'         => $request->input('pTitle'),
            'p_client'        => $request->input('pClient'),
            'p_timeline'      => $request->input('pTimeline'),
            'p_description'   => $request->input('pDescription'),
            'e_title'         => $request->input('eTitle'),
            'e_client'        => $request->input('eClient'),
            'e_timeline'      => $request->input('eTimeline'),
            'e_description'   => $request->input('eDescription'),
            
        ]);
        $resume->save();

        return response()->json('Resume created!');
    }

    public function show($id)
    {
        $resume = Resume::find($id);
        return response()->json($resume);
    }

    public function update($id, Request $request)
    {
        $resume = Resume::find($id);
        $resume->update($request->all());

        return response()->json('Resume updated!');
    }

    public function destroy($id)
    {
        $resume = Resume::find($id);
        $resume->delete();

        return response()->json('Resume deleted!');
    }

    public function active($id){
        
        $prew_id = Resume::where('status', 'Active')->value('id');
        $reset = Resume::where('status', 'Active')->update([
                        'status'           => 'Deactive',
                        'status_color'     => 'badge-secondary',
                        'btn_status'       => 'Active',
                        'btn_status_color' => 'btn-danger',
                        ]);

        $resume = Resume::find($id);
        $resume->status = 'Active';
        $resume->status_color = 'badge-danger';
        $resume->btn_status = 'Deactive';
        $resume->btn_status_color = 'btn-secondary';
        $resume->save();

        return response()->json([
            'status'           => 'Active',
            'status_color'     => 'badge-danger',
            'btn_status'       => 'Deactive',
            'btn_status_color' => 'btn-secondary',
            'prew_id'          => $prew_id
            ]);
    }
}