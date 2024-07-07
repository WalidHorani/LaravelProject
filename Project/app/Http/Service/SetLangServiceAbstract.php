<?php
namespace App\Http\Service;

use Illuminate\Support\Facades\App ;
use Illuminate\Support\Facades\Session ;

abstract class SetLangServiceAbstract{
    /*
    |----------------------------------------------------------------------------
    |   create
    |----------------------------------------------------------------------------
    */
        protected function createLangInLocal( $payloadForCreateLangInLocalARR ){
            //payloadForCreateLangInLocalARR = $langSTR
            extract( $payloadForCreateLangInLocalARR );
            App::setLocale( $langSTR );
        }

        protected function createLangInSession( $payloadForCreateLangInSessionARR ){
            //payloadForCreateLangInSessionARR = $langSTR, $request
            extract( $payloadForCreateLangInSessionARR );
            $request->session()->put( 'lang', $langSTR );
        }
    /*
    |----------------------------------------------------------------------------
    |   read
    |----------------------------------------------------------------------------
    */
        protected function getLangFromRequest($payloadForGetLangFromRequestARR){
            //payloadForGetLangFromRequestARR = $request,
            extract($payloadForGetLangFromRequestARR);
            $langSTR = $request->route()->parameter('lang');
            return $langSTR ;
        }

        protected function getLangFromSession($payloadForGetLangFromSessionARR){
            //payloadForGetLangFromSessionARR = $request,
            extract($payloadForGetLangFromSessionARR);
            $langSTR = $request->session()->get('lang') ;
            return $langSTR ;
        }

    /*
    |----------------------------------------------------------------------------
    |   update
    |----------------------------------------------------------------------------
    */

    /*
    |----------------------------------------------------------------------------
    |   delete
    |----------------------------------------------------------------------------
    */

    /*
    |----------------------------------------------------------------------------
    |   check
    |----------------------------------------------------------------------------
    */
        protected function isLangExistsInRequest($payloadForIsLangExistsInRequestARR){
            //payloadForIsLangExistsInRequestARR = $request,
            extract($payloadForIsLangExistsInRequestARR);
            $isLangExistsInRequestBOL = $request->route()->hasParameter('lang') ;
            return $isLangExistsInRequestBOL ;
        }

        protected function isSessionHaveLang($payloadForIsSessionHaveLangARR){
            //payloadForIsSessionHaveLangARR = $request,
            extract($payloadForIsSessionHaveLangARR);
            $isLangExistsInSessiontBOL = $request->session()->has('lang') ;
            return $isLangExistsInSessiontBOL ;
        }
}

?>
