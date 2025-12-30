<?php
$menus = [
    array("Name" => "EXERCISES", "Path" => "/exercises", "Image" => "calendar"),
    "Course"=>array(
        "Name" => "COURSES",
        "Path" => \_::$Address->CategoryRoot."Course",
        "Image" => "book",
        "Items" => []
    ),
    array(
        "Name" => "CONTACTS",
        "Path" => "/contact",
        "Image" => "envelope",
        "Items" => array(
            array("Name" => "FORUMS", "Path" => "/forums", "Image" => "comments"),
            array("Name" => "CONTACTS", "Path" => "/contact", "Image" => "address-book"),
            array("Name" => "ABOUT", "Path" => "/about", "Image" => "info")
        )
    )
];
$courses = [];
foreach(array_slice(compute("category/all", ["Direction"=>"Course"]), 1) as $item)
    $courses[] = ["Name"=>$item["Title"], "Path"=>\_::$Address->CategoryRoot."Course/".$item["Name"]];
$menus["Course"]["Items"] = $courses;

\_::$Front->MainMenus = [...\_::$Front->MainMenus,...$menus];
\_::$Front->SideMenus = [...\_::$Front->SideMenus,...$menus];
\_::$Front->Shortcuts = [
    array("Name" => "MENU", "Path" => "viewSideMenu()", "Image" => "bars"),
    array("Name" => "COURSES", "Path" => \_::$Address->CategoryRoot."Course", "Image" => "book"),
    array("Name" => "HOME", "Path" => \_::$Front->HomePath, "Image" => "home"),
    array("Name" => "EXERCISES", "Path" => "/exercises", "Image" => "calendar"),
    array("Name" => "CONTACTS", "Path" => "/contact", "Image" => "envelope")
];

// To unset the default router sat at the bottom layers
\_::$Router->On()->Reset();

/**
 * Use your routers by below formats
 * \_::$Router->On("A Part Of Path?")->Default("Route Name");
 */
\_::$Router->On("exercises")->Default("exercises");
\_::$Router->On("exercise")->Default("exercise");
\_::$Router->On("$|home")
    ->if(\_::$User->HasAccess(\_::$User->UserAccess))->Default(fn()=>view("part",["Name"=>"sign/dashboard"]))
    ->else()->Default(fn()=>view("part", ["Name"=>"sign/in"]));