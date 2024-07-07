<?php
namespace App\Http\Service;
use App\Http\Service\SetLangServiceAbstract;

use Illuminate\Support\Facades\App ;
use Illuminate\Support\Facades\Session ;

class SetLangService extends SetLangServiceAbstract{

    public function setLangForApp( $payloadForSetLangForAppARR ){
        //payloadForSetLangForAppARR = $request
        extract( $payloadForSetLangForAppARR ) ;

        $payloadForIsLangExistsARR = [ 'request'=> $request ] ;
        $isLangExistsInRequestBOL = $this->isLangExistsInRequest( $payloadForIsLangExistsARR ) ;
        $isSessionHaveLangBOL = $this->isSessionHaveLang( $payloadForIsLangExistsARR ) ;

        if( $isLangExistsInRequestBOL ){

            $langSTR = $this->getLangFromRequest( $payloadForIsLangExistsARR );

            $payloadForCreateLangARR = [ 'langSTR'=> $langSTR ] ;
            $this->createLangInLocal( $payloadForCreateLangARR );
            $payloadForCreateLangARR = [ 'request'=>$request,'langSTR'=> $langSTR ] ;
            $this->createLangInSession( $payloadForCreateLangARR );

        }else if( $isSessionHaveLangBOL ){

            $langSTR = $this->getLangFromSession( $payloadForIsLangExistsARR );

            $payloadForCreateLangARR = [ 'langSTR'=> $langSTR ] ;
            $this->createLangInLocal( $payloadForCreateLangARR );
            $payloadForCreateLangARR = [ 'request'=>$request,'langSTR'=> $langSTR ] ;
            $this->createLangInSession( $payloadForCreateLangARR );

        }else{

            $payloadForCreateLangARR = [ 'langSTR'=> 'en' ] ;
            $this->createLangInLocal( $payloadForCreateLangARR );
            $payloadForCreateLangARR = [ 'request'=>$request,'langSTR'=> 'en' ] ;
            $this->createLangInSession( $payloadForCreateLangARR );
        }
    }

}
?>
