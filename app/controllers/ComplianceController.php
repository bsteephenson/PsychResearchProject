<?php
class ComplianceController extends BaseController{


    /*
        First show the initial pages form
        Check if post from that form is correct
        If success send to details page with another form
        Check if post from that form is correct
        If success send to success page
    */
    public function getIndex(){
        return View::make('compliance.initial');
    }


    public function getDetails(){
        $key = Session::get('key');
        $person = Participant::where('key','=',$key)->first();
        if($person->compliance == true){
            return Redirect::action('ComplianceController@getSuccess');
        }
        else{
            return View::make('compliance.details', array('numberOfSteps' => 3, 'stepNumber' => 2));
        }
    }
    public function postDetails(){
        $key = Input::get('key');
        $other_information = Input::get('other_information');
        $count = Participant::where('key', '=', $key)->count();
        if($count == 1){
            $person = Participant::where('key', '=', $key)->first();
            $person->compliance = TRUE;
            $person->other_information = $other_information;
            $person->save();
            return Redirect::action('ComplianceController@getSuccess');
        }
        else{
            return Redirect::action('ComplianceController@getDetails');
        }
    }

    public function getSuccess(){
        return View::make('compliance.success', array('numberOfSteps' => 3, 'stepNumber' => 3));
    }

}
?>
