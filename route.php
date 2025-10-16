<?php
// To unset the default router sat at the bottom layers
\_::$Aseq->On()->Reset();

/**
 * Use your routers by below formats
 * \_::$Aseq->On("A Part Of Path?")->Default("Route Name");
 */
\_::$Aseq->On("exercises")->Default("exercises");
\_::$Aseq->On("exercise")->Default("exercise");
\_::$Aseq->On("$|home")
    ->if(auth(\_::$Config->UserAccess))->Default(fn()=>view("part",["Name"=>"sign/dashboard"]))
    ->else()->Default(fn()=>view("part", ["Name"=>"sign/in"]));

// To route other requests to the DefaultRouteName
\_::$Aseq->On()->Default(\_::$Config->DefaultRouteName);
?>