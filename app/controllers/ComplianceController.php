<?php
class ComplianceController extends BaseController{
    /*
        First show the initial pages form
        Check if post from that form is correct
        If success send to details page with another form
        Check if post from that form is correct
        If success send to success page
    */
    public function getInitial(){
        return View::make('compliance.initial');
    }
    public function postInitial(){
        $key = Input::get('key');
        $count = Participant::where('key', '=', $key)->count();
        if($count == 1){
            return Redirect::action('ComplianceController@getDetails');
        }
        else{
            //something...
        }
    }

    public function getDetails(){
        return View::make('compliance.details');
    }
    public function postDetails(){
        $key = Input::get('key');
        $count = Participant::where('key', '=', $key)->count();
        if($count == 1){
            $person = Participant::where('key', '=', $key)->first();
            $person->compliance = TRUE;
            $person->save();
            return Redirect::action('ComplianceController@getSuccess');
        }
        else{
            //something...
        }
    }

    public function getSuccess(){
        return View::make('compliance.success');
    }
}
?>
