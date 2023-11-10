<?php

namespace App\Http\Controllers;

use App\Models\Assessment;
use App\Models\Sassessment;
use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    public function postAssess()
    {
        // dd(request()->only('children'));

        request()->validate([
            'fname' => 'required',
            'lname' => 'required|',
            'mname' => 'required|',
            'service' => 'required|',
            // 'sponsorship' => 'required|',
            // 'ms1' => 'required|',
            // 'dc' => 'required|',
            // 'nodc' => 'required|',
            // 'ms2' => 'required|',
            'phone' => 'required|',
            'dob' => 'required',
            'cob' => 'required',
            'sex' => 'required|',
            'cor' => 'required',
            'email' => 'required',
            'street' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'phone' => 'required',
            'doi' => 'required',
            'doe' => 'required',
            'status' => 'required',
            'passport' => 'required',
            'ooc' => 'required',
            'ytc' => 'required',
            'children' => 'required',
            'noc' => 'required',
            'children2' => 'required',
            'noc2' => 'required',
        ], [
            'fname.required' => 'First Name field is required.',
            'lname.required' => 'Last Name field is required.',
            'mname.required' => 'Middle Name field is required.',
            'dob.required' => 'Enter your date of birth',
            'cob.required' => 'Enter your country of birth',
            'cor.required' => 'Enter your country of residence',
            'email.required' => 'Your Email is required',

            'dc.required' => 'This field is required',
            'nodc.required' => 'This field is required',

            'doi.required' => 'Enter your date of issue',
            'doe.required' => 'Enter your date of expiration',
            'ooc.required' => 'Occupation of Spouse or Common Law partner field is required',
            'ytc.required' => 'Will your apouse/partner be accompanying you to Canada ',
            // 'children.required' => 'this field is required',
            // 'noc.required' => 'this field is required',
            'children2.required' => 'Will any or all of your children be accompanying you to Canada?',
            'noc2.required' => 'Enter the number of children',

        ]);



        $assessemnt1 = new Assessment();
        $assessemnt1->first_name = request('fname');
        $assessemnt1->last_name = request('lname');
        $assessemnt1->middle_name = request('mname');
        $assessemnt1->service = request('service');
        $assessemnt1->dob = request('dob');
        $assessemnt1->cob = request('cob');
        $assessemnt1->cor = request('cor');
        $assessemnt1->sex = request('sex');
        $assessemnt1->email = request('email');
        $assessemnt1->street = request('street');
        $assessemnt1->city = request('city');
        $assessemnt1->state = request('state');
        $assessemnt1->country = request('country');
        $assessemnt1->phone = request('phone');
        $assessemnt1->doi = request('doi');
        $assessemnt1->doe = request('doe');
        $assessemnt1->status = request('status');
        $assessemnt1->passport = request('passport');
        $assessemnt1->ooc = request('ooc');
        $assessemnt1->ytc = request('ytc');
        $assessemnt1->children = request('children');
        $assessemnt1->noc = request('noc');
        $assessemnt1->children2 = request('children2');
        $assessemnt1->noc2 = request('noc2');
        $assessemnt1->sponsorship = request('sponsorship');
        // $assessemnt1->ms1 = request('ms1');
        // $assessemnt1->dc = request('dc');
        // $assessemnt1->nodc = request('nodc');
        $assessemnt1->ms2 = request('ms2');

        $assessemnt1->save();
        $email = Assessment::where('email', request('email'))->first();
        // return redirect()->route('assess2', ['email'=> $email] );
        return  view('asses2')->with('email', $email->id);
    }

    public function postAssess2($id)
    {
      
        // dd(request()->only('children'));
        $user = Assessment::where('id',$id)->first();
      
        request()->validate([
            // 'study' => 'required',
            // 'tuition' => 'required|',
            // 'budget' => 'required|',
            // 'fpr' => 'required|',
            // 'frelationship' => 'required|',
            // 'test' => 'required',
            // 'dot' => 'required',
            // 'reading' => 'required|',
            // 'writing' => 'required',
            // 'speaking' => 'required',
            // 'listening' => 'required',
            // 'from1' => 'required',
            // 'to1' => 'required',
            // 'nos1' => 'required',
            // 'scity' => 'required',
            // 'cert' => 'required',
            // 'from2' => 'required',
            // 'to2' => 'required',
            // 'nos2' => 'required',
            // 'scity2' => 'required',
            // 'cert2' => 'required',
            // 'from3' => 'required',
            // 'to3' => 'required',
            // 'nos3' => 'required',
            // 'scity3' => 'required',
            // 'cert3' => 'required',
        ], []);



        $assessemnt1 = new Sassessment();
        $assessemnt1->user_id = $user->id;
        $assessemnt1->study = request('study');
        $assessemnt1->tuition = request('tuition');
        $assessemnt1->budget = request('budget');
        $assessemnt1->fpr = request('fpr');
        $assessemnt1->frelationship = request('frelationship');
        $assessemnt1->test = request('test');
        $assessemnt1->dot = request('dot');
        $assessemnt1->reading = request('reading');
        $assessemnt1->writing = request('writing');
        $assessemnt1->speaking = request('speaking');
        $assessemnt1->listening = request('listening');
        $assessemnt1->from1 = request('from1');
        $assessemnt1->to1 = request('to1');
        $assessemnt1->nos1 = request('nos1');
        $assessemnt1->scity = request('scity');
        $assessemnt1->cert = request('cert');
        $assessemnt1->from2 = request('from2');
        $assessemnt1->to2 = request('to2');
        $assessemnt1->nos2 = request('nos2');
        $assessemnt1->scity2 = request('scity2');
        $assessemnt1->cert2 = request('cert2');
        $assessemnt1->from3 = request('from3');
        $assessemnt1->to3 = request('to3');
        $assessemnt1->nos3 = request('nos3');
        $assessemnt1->scity3 = request('scity3');
        $assessemnt1->cert3 = request('cert3');
        $assessemnt1->from4 = request('from4');
        $assessemnt1->to4 = request('to4');
        $assessemnt1->nos4 = request('nos4');
        $assessemnt1->cert4 = request('cert4');
        $assessemnt1->from5 = request('from5');
        $assessemnt1->to5 = request('to5');
        $assessemnt1->scity5 = request('scity5');
        $assessemnt1->cert5 = request('cert5');
        $assessemnt1->fromemp1 = request('fromemp1');
        $assessemnt1->toemp1 = request('toemp1');
        $assessemnt1->jt1 = request('jt1');
        $assessemnt1->jscity1 = request('jscity1');
        $assessemnt1->ft1 = request('ft1');
        $assessemnt1->fromemp2 = request('fromemp2');
        $assessemnt1->toemp2 = request('toemp2');
        $assessemnt1->jt2 = request('jt2');
        $assessemnt1->jscity2 = request('jscity2');
        $assessemnt1->ft2 = request('ft2');
        $assessemnt1->fromemp3 = request('fromemp3');
        $assessemnt1->toemp3 = request('toemp3');
        $assessemnt1->jt3 = request('jt3');
        $assessemnt1->jscity3=request('jscity3');
        $assessemnt1->ft3 = request('ft3');
        $assessemnt1->fromemp4 = request('fromemp4');
        $assessemnt1->toemp4 = request('toemp4');
        $assessemnt1->jt4 = request('jt4');
        $assessemnt1->jscity4=request('jscity4');
        $assessemnt1->ft4 = request('ft4');
        $assessemnt1->fromemp5 = request('fromemp5');
        $assessemnt1->toemp5 = request('toemp5');
        $assessemnt1->jt5 = request('jt5');
        $assessemnt1->jscity5=request('jscity5');
        $assessemnt1->ft5 = request('ft5');
        $assessemnt1->fromtravel1 = request('fromtravel1');
        $assessemnt1->totravel1 = request('totravel1');
        $assessemnt1->pov1 = request('pov1');
        $assessemnt1->tcity1 = request('tcity1');
        $assessemnt1->fromtravel2 = request('fromtravel2');
        $assessemnt1->totravel2 = request('totravel2');
        $assessemnt1->tcity2 = request('tcity2');
        $assessemnt1->pov2 = request('pov2');
        $assessemnt1->fromtravel3 = request('fromtravel3');
        $assessemnt1->totravel3 = request('totravel3');
        $assessemnt1->tcity3 = request('tcity3');
        $assessemnt1->pov3 = request('pov3');
        $assessemnt1->fromtravel4 = request('fromtravel4');
        $assessemnt1->totravel4 = request('totravel4');
        $assessemnt1->tcity4 = request('tcity4');
        $assessemnt1->pov4 = request('pov4');
        $assessemnt1->fromtravel5 = request('fromtravel5');
        $assessemnt1->totravel5 = request('totravel5');
        $assessemnt1->tcity5 = request('tcity5');
        $assessemnt1->pov5 = request('pov5');
        
        $assessemnt1->save();
        return  view('asses')->with('success', 'Information Saved');
    }
}
