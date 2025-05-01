<?php
route("contents", [
    "Logic" => [
        "Filter" => [
            "Type" => "Query"
        ]
    ],
    "View" => [
        "Title" => "Your Exercises",
        "Description" => "Find your exercise",
        "Image"=>"calendar",
        "RootRoute" => "/exercise/",
        "CollectionRoute" => "/exercises/",
        "CheckAccess" => function ($item) {
            return \_::$Back->User->Access(\_::$Config->AdminAccess) || \_::$Back->User->Access(\MiMFa\Library\Convert::ToSequence(\MiMFa\Library\Convert::FromJson(getValid($item, 'Access', \_::$Config->VisitAccess))));
        },
        "ErrorHandler" => fn()=>view("part", \MiMFa\Library\User::$InHandlerPath),
    ],
    "ErrorHandler" => "Could not find related exercise"
]);
?>