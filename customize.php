<?php
$menus = [
    array("Name" => "EXERCISES", "Path" => "/exercises", "Image" => "calendar"),
    "Course"=>array(
        "Name" => "COURSES",
        "Path" => \_::$Base->CategoryRoot."Course",
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
    $courses[] = ["Name"=>$item["Title"], "Path"=>\_::$Base->CategoryRoot."Course/".$item["Name"]];
$menus["Course"]["Items"] = $courses;

\_::$Info->MainMenus = [...\_::$Info->MainMenus,...$menus];
\_::$Info->SideMenus = [...\_::$Info->SideMenus,...$menus];
\_::$Info->Shortcuts = [
    array("Name" => "MENU", "Path" => "viewSideMenu()", "Image" => "bars"),
    array("Name" => "COURSES", "Path" => \_::$Base->CategoryRoot."Course", "Image" => "book"),
    array("Name" => "HOME", "Path" => \_::$Info->HomePath, "Image" => "home"),
    array("Name" => "EXERCISES", "Path" => "/exercises", "Image" => "calendar"),
    array("Name" => "CONTACTS", "Path" => "/contact", "Image" => "envelope")
];

?>