<?php
route("contents", [
    "Compute" => [
        "Filter" => [
            "Type" => "Query"
        ]
    ],
    "View" => [
        "Title" => "Your Exercises",
        "Description" => "Find your exercise",
        "Image"=>"calendar",
        "Root" => "/exercise/",
        "CollectionRoot" => "/exercises/",
        "CheckAccess" => function ($item) {
            return \_::$User->HasAccess(\_::$User->AdminAccess) || \_::$User->HasAccess(\MiMFa\Library\Convert::ToSequence(\MiMFa\Library\Convert::FromJson(getValid($item, 'Access', \_::$User->VisitAccess))));
        },
        "ErrorHandler" => fn()=>view("part", \_::$User->InHandlerPath),
    ],
    "ErrorHandler" => "Could not find related exercise"
]);
?>