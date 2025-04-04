<?php
\_::$Info->MainMenus = \_::$Info->SideMenus = array(
    array("Name" => "HOME", "Path" => "/", "Image" => "home"),
    array("Name" => "EXERCISE", "Path" => "/exercise", "Image" => "calendar"),
    array(
        "Name" => "COURSE",
        "Path" => \_::$Address->CategoryRoute."Course",
        "Image" => "book",
        "Items" =>
            array(
                array("Name" => "Windows Forms App Development", "Path" => \_::$Address->CategoryRoute."Course/Windows Forms App Development"),
                array("Name" => "SQL Tutorial", "Path" => \_::$Address->CategoryRoute."Course/SQL Tutorial"),
                array("Name" => "Intensive Web Development", "Path" => \_::$Address->CategoryRoute."Course/Intensive Web Development"),
                array("Name" => "Other Tutorials", "Path" => \_::$Address->CategoryRoute."Media/Doc")
            )
    ),
    array(
        "Name" => "CONTACT",
        "Path" => "/contact",
        "Image" => "address-book",
        "Items" => array(
            array("Name" => "FORUM", "Path" => "/forum", "Image" => "comments"),
            array("Name" => "CONTACTS", "Path" => "/contact", "Image" => "address-book"),
            array("Name" => "ABOUT", "Path" => "/about", "Image" => "info")
        )
    )
);

\_::$Info->Surtcuts = array(
    array("Name" => "MENU", "Path" => "viewSideMenu()", "Image" => "bars"),
    array("Name" => "COURSE", "Path" => \_::$Address->CategoryRoute."Course", "Image" => "book"),
    array("Name" => "HOME", "Path" => "/", "Image" => "home"),
    array("Name" => "EXERCISE", "Path" => "/exercise", "Image" => "calendar"),
    array("Name" => "CONTACT", "Path" => "/contact", "Image" => "address-book")
);
?>