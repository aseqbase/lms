<?php
// To unset the default router sat at the bottom layers
\_::$Back->Router->On()->Reset();

/**
 * Use your routers by below formats
 * \_::$Back->Router->On("A Part Of Path?")->Default("Route Name");
 */
\_::$Back->Router->On("exercises")->Default("exercises");
\_::$Back->Router->On("exercise")->Default("exercise");
\_::$Back->Router->On("$|home")
    ->if(auth(\_::$Config->UserAccess))->Default(fn()=>view("part",["Name"=>"sign/dashboard"]))
    ->else()->Default(fn()=>view("part", ["Name"=>"sign/in"]));

// To route other requests to the DefaultRouteName
\_::$Back->Router->On()->Default(\_::$Config->DefaultRouteName);
?>