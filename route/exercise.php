<?php
route("content", [
    "Compute" => [
        "Filter" => [
            "Type" => "Query"
        ]
    ],
    "View" => [
        "Root" => "/exercise/",
        "CollectionRoot" => "/exercises/",
        "CheckAccess" => function ($item) {
            return \_::$User->Access(\_::$Config->AdminAccess) || \_::$User->Access(\MiMFa\Library\Convert::ToSequence(\MiMFa\Library\Convert::FromJson(getValid($item, 'Access', \_::$Config->VisitAccess))));
        }
    ],
    "ErrorHandler" => "Could not find related exercise"
]);
?>