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
            return \_::$User->GetAccess(\_::$User->AdminAccess) || \_::$User->GetAccess(\MiMFa\Library\Convert::ToSequence(\MiMFa\Library\Convert::FromJson(getValid($item, 'Access', \_::$User->VisitAccess))));
        }
    ],
    "ErrorHandler" => "Could not find related exercise"
]);
?>