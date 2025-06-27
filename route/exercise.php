<?php
route("content", [
    "Compute" => [
        "Filter" => [
            "Type" => "Query"
        ]
    ],
    "View" => [
        "RootRoute" => "/exercise/",
        "CollectionRoute" => "/exercises/",
        "CheckAccess" => function ($item) {
            return \_::$Back->User->Access(\_::$Config->AdminAccess) || \_::$Back->User->Access(\MiMFa\Library\Convert::ToSequence(\MiMFa\Library\Convert::FromJson(getValid($item, 'Access', \_::$Config->VisitAccess))));
        }
    ],
    "ErrorHandler" => "Could not find related exercise"
]);
?>