<?php
// To unset the default router sat at the bottom layers
\_::$Router->On()->Reset();

/**
 * Use your routers by below formats
 * \_::$Router->On("A Part Of Path?")->Default("Route Name");
 */
\_::$Router->On("exercises")->Default("exercises");
\_::$Router->On("exercise")->Default("exercise");
\_::$Router->On("$|home")
    ->if(\_::$User->GetAccess(\_::$User->UserAccess))->Default(fn()=>view("part",["Name"=>"sign/dashboard"]))
    ->else()->Default(fn()=>view("part", ["Name"=>"sign/in"]));

// To route other requests to the DefaultRouteName
\_::$Router->On()->Default(\_::$Router->DefaultRouteName);
?>