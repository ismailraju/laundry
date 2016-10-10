<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\myclass\queryclass;
use App\myclass\wrapfuncclass;



class Query extends Controller {


   public function r(){

      $qu = new queryclass();
      $wrap1 = new wrapfuncclass();
      $texinfo=$qu->texinfo();
      return $wrap1->optionwrap($texinfo,"TaxCode");
      
   }

}