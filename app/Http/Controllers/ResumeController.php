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
        $skills = json_encode($request->input('skills'));
        $works  = json_encode($request->input('works'));
        $edus   = json_encode($request->input('edus'));

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
            'skill'           => $skills,
            'work'            => $works,
            'edu'             => $edus,
        ]);
        $resume->save();

        return response()->json('Created!');
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

    public function getResume(){

        $resume = Resume::where('status', 'Active')->get();
        return response()->json($resume);      
    }

    public function active($id){

        $prew_id = Resume::where('status', 'Active')->value('id');
        if($prew_id != null){
            $reset = Resume::where('status', 'Active')->update([
                'status'           => 'Deactive',
                'status_color'     => 'badge-secondary',
                'btn_status'       => 'Active',
                'btn_status_color' => 'btn-danger',
                ]);
        }

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