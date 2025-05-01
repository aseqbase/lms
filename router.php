<?php
// To unset the default router sat at the bottom layers
\_::$Back->Router->Route->Reset();

/**
 * Use your routers by below formats
 * \_::$Back->Router->Route("A Part Of Path?")->Default("Route Name");
 */
\_::$Back->Router->Route("exercises")->Default("exercises");
\_::$Back->Router->Route("exercise")->Default("exercise");
\_::$Back->Router->Route("$|home")
    ->if(auth(\_::$Config->UserAccess))->Default(fn()=>view("part",["Name"=>"sign/dashboard"]))
    ->else->Default(fn()=>view("part", ["Name"=>"sign/in"]));

// To route other requests to the DefaultRouteName
\_::$Back->Router->Route->Default(\_::$Config->DefaultRouteName);
?>