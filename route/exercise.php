<?php
use \MiMFa\Library\Router;
function findContent($direction){
    $path = explode("/", urldecode($direction));
    $name = last($path);
    if (count($path) > 1)
        $path = implode("/", array_slice($path, 0, count($path) - 1));
    else
        $path = null;

    return logic("content/get", [
        "Name" => $name,
        "Filter" => [
            "Cat" => $path,
            "Type" => "Query"
        ]
    ]);
}
(new Router())
    ->Route("exercises")->Get(function () {
        view("contents", [
            "Title" => "Exercises",
            "RootRoute" => "/exercise/",
            "CheckAccess" => function($item){
                return \_::$Back->User->Access(\_::$Config->AdminAccess) || \_::$Back->User->Access(\MiMFa\Library\Convert::ToSequence(\MiMFa\Library\Convert::FromJson(getValid($item, 'Access' , \_::$Config->VisitAccess))));
            },
            "Description" => "Find your exercise",
            "Items" => logic("content/all", ["Filter" => ["Type" => "Query"]])
        ]);
    })
    ->Route->Get(function ($router) {
        $doc = findContent($router->Direction);
        if (isEmpty($doc))
            view("contents", [
                "Title" => preg_replace("/\..*$/", "", \Req::$Page),
                "RootRoute" => "/exercise/",
                "CheckAccess" => function($item){
                    return \_::$Back->User->Access(\_::$Config->AdminAccess)  || \_::$Back->User->Access(\MiMFa\Library\Convert::ToSequence(\MiMFa\Library\Convert::FromJson(getValid($item, 'Access' , \_::$Config->VisitAccess))));
                },
                "Description" => "Find your exercise",
                "Items" => logic("content/all", [
                    "Filter" => [
                        "Type" => "Query",
                        "Cat" => $router->Direction
                    ]
                ])
            ]);
        else
            view("content", $doc);
    })
    ->Default(function ($router) {
        $doc = findContent($router->Direction);
        if (isEmpty($doc))
            \Res::Render(__("Could not find related document"));
        elseif (logic("comment/handle", $doc))
            \Res::Reload();
    })
    ->Handle();
?>