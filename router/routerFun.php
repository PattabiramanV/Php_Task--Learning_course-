<?php

function routerFun($fileUri,$routes){

    $fileUri=parse_url($fileUri);
//    print_r( $fileUri);
   if(array_key_exists($fileUri['path'],$routes)){
       $showPage=$routes[$fileUri['path']];
       $showPage();
   }
  else{
      echo "page not found";
  }
}