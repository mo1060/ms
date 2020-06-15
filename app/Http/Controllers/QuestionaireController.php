<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proband;
class QuestionaireController extends Controller
{
   


    public function admin(){

        $probanden = Proband::all(); 
         
        

        return view('admin',  [
            'probanden' => $probanden, 
        ]);
    }

    public function store(Request $request){

        

        $data = request()->validate([
            'age' => 'required',
            'gender' => 'required'
        ], 
        [
            'age.required' => 'Bitte Alter angeben.',
            'gender.required' => 'Bitte gib ein Geschlecht an mit dem du dich am ehesten identifizierst.',
        
        ]);


        // Store the form input into session 
        $request->session()->put('age', $request->input('age'));
        $request->session()->put('gender', $request->input('gender'));
        $request->session()->put('consent', $request->input('consent'));


        //return redirect('/grill');
        // redirect to instruction page 
        return redirect('/instruction');
    }

    public function instruct(){
        return view('instruction');
    }


    public function quest(){

        $age = session('age');
        $gender = session('gender');
       // error_log(session('grill')); 
       // error_log($age);
       // error_log($gender);

        return view('grill', [
            'age' => $age,
            'gender' => $gender
        ]);
    }

    public function mixer(){

        $age = session('age');
        $gender = session('gender');
       // error_log(session('grill')); 
        error_log($age);
        error_log($gender);

        return view('mixer', [
            'age' => $age,
            'gender' => $gender
        ]);
    }


    public function schrank(){
        return view('schrank');
    }

    
    public function couch(){
        return view('couch');
    }

        
    public function staender(){
        return view('staender');
    }

    public function waschmaschine(){
        return view('waschmaschine');
    }

    public function bett(){
        return view('bett');
    } 

    public function pooltable(){
        return view('pooltable');
    } 

    public function lamp(){
        return view('lamp');
    } 

    public function zelt(){
        return view('zelt');
    } 

    public function wohnzimmertisch(){
        return view('wohnzimmertisch');
    } 

    public function federballset(){
        return view('federballset');
    }
    
    public function campingtisch(){
        return view('campingtisch');
    } 


    public function beamer(){
        return view('beamer');
    } 

    public function gummistiefel(){
        return view('gummistiefel');
    } 

    public function koffer(){
        return view('koffer');
    } 

    public function pcset(){
        return view('pcset'); 
    }

    
    public function stuhl(){
        return view('stuhl'); 
    }

    public function teppich(){
        return view('teppich'); 
    }

    
    public function tischtennisplatte(){
        return view('tischtennisplatte'); 
    }

    public function staubsauger(){
        return view('staubsauger'); 
    }

    public function pflanze(){
        return view('pflanze'); 
    }

    public function ende(){

        $proband = new Proband(); 



        $age = session('age');
        $gender = session('gender');
        $grill = session('grill');
        $standmixer = session('standmixer');
        $schrank = session('schrank'); 
        $staender = session('staender'); 
        $waschmaschine = session('waschmaschine');
        $bett = session('bett'); 
        $pooltable = session('pooltable'); 
        $lamp = session('lamp'); 
        $zelt = session('zelt'); 
        $wohnzimmertisch = session('wohnzimmertisch'); 
        $federballset = session('federballset'); 
        $campingtisch = session('campingtisch'); 
        $beamer = session('beamer');
        $gummistiefel = session('gummistiefel');
        $koffer = session('koffer'); 
        $pcset = session('pcset'); 
        $stuhl = session('stuhl'); 
        $teppich = session('teppich'); 
        $tischtennisplatte = session('tischtennisplatte'); 
        $staubsauger = session('staubsauger'); 
        $pflanze = session('pflanze'); 


        $proband->age = $age;
        $proband->gender = $gender;
        $proband->grill = $grill;
        $proband->standmixer = $standmixer;
        $proband->schrank = $schrank;
        $proband->staender = $staender; 
        $proband->waschmaschine = $waschmaschine;
        $proband->bett = $bett; 
        $proband->pooltable = $pooltable; 
        $proband->lampe = $lamp; 
        $proband->zelt = $zelt;
        $proband->wohnzimmertisch = $wohnzimmertisch; 
        $proband->federballset = $federballset; 
        $proband->campingtisch = $campingtisch; 
        $proband->beamer = $beamer; 
        $proband->gummistiefel = $gummistiefel; 
        $proband->koffer = $koffer; 
        $proband->pcset = $pcset; 
        $proband->stuhl = $stuhl; 
        $proband->teppich = $teppich; 
        $proband->tischtennisplatte = $tischtennisplatte; 
        $proband->staubsauger = $staubsauger; 
        $proband->pflanze = $pflanze; 

        $proband->save(); 

        return view('ende');
    }

    public function getData(Request $request){

        /*
        error_log(request('buy'));
        error_log(request('two_day_delivery'));
        error_log(request('one_week_delivery'));
        error_log(request('two_week_delivery'));
        error_log(request('one_month_delivery'));
        error_log(request('product'));
        error_log(request('usefulness')); 
        */

        

        $data = request()->validate([
            'two_days_wait' => 'required',
            'one_week_wait' => 'required',
            'two_week_wait' => 'required',
            'one_month_wait' => 'required',
            'usefulness' => 'required'
        ], 
        
        [
            'two_days_wait.required' => 'Bitte gib an, ob du warten würdest.',
            'one_week_wait.required' => 'Bitte gib an, ob du warten würdest.',
            'two_week_wait.required' => 'Bitte gib an, ob du warten würdest.',
            'one_month_wait.required' => 'Bitte gib an, ob du warten würdest.',

            'usefulness.required' => 'Bitte gib an, wie nützlich du dieses Produkt findest.',
        
        ]);

        
        
        $arr = array(

        'product' => request('product'), 
        'two_days' => request('two_day_delivery'), 
        'one_week' => request('one_week_delivery'), 
        'two_weeks' => request('two_week_delivery'), 
        'one_month_delivery' => request('one_month_delivery'), 
        'usefulness' => request('usefulness'),
        'would_wait_two_days' => request('two_days_wait'),
        'would_wait_one_week' => request('one_week_wait'),
        'would_wait_two_weeks' => request('two_week_wait'),
        'would_wait_one_month' => request('one_month_wait'),

        );
        $productJSON =  json_encode($arr);
        $request->session()->put(json_decode( $productJSON, true )['product'], $productJSON );

        $product = json_decode( $productJSON, true )['product'];
        error_log($productJSON);
        switch ($product) {
            case "grill":
                return redirect('/mixer');
                break;
            case "standmixer":
                return redirect('/schrank');
                break;
            case "schrank":
                return redirect('/couch');
            case "couch":
                return redirect('/staender');
            case "staender":
                return redirect('/waschmaschine'); 
            case "waschmaschine":
                return redirect('/bett'); 
            case "bett":
                return redirect('/pooltable'); 
            case "pooltable":
                return redirect('/lamp'); 
            case "lamp":
                return redirect('/zelt'); 
            case "zelt":
                return redirect('/wohnzimmertisch'); 
            case "wohnzimmertisch":
                return redirect('/federballset'); 
            case "federballset":
                return redirect('/campingtisch'); 
            case  "campingtisch":
                return redirect('/beamer'); 
            case "beamer":
                return redirect('/gummistiefel'); 
            case "gummistiefel":
                return redirect('/koffer'); 
            case "koffer":
                return redirect('/pcset'); 
            case "pcset":
                return redirect('/stuhl'); 
            case "stuhl":
                return redirect('/teppich'); 
            case "teppich":
                return redirect('/tischtennisplatte'); 
            case "tischtennisplatte":
                return redirect('/staubsauger'); 
            case "staubsauger":
                return redirect('/pflanze'); 
            default:
                return redirect('/ende');
        
            }

        return redirect('/fragen');

    }

}
