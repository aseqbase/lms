<?php
use \MiMFa\Library\User;
module("SignUpForm");
$module = new \MiMFa\Module\SignUpForm();
$module->GroupOptions = table("UserGroup")->DoSelectPairs("`Id`", "`Title`", "`Id`>=100");
swap($module, $data);
$module->Render();
if($module->Result)
    if (User::$InitialStatus < User::$ActiveStatus)
        \Res::Load(User::$ActiveHandlerPath."?Email=".urlencode(\_::$Back->User->TemporaryEmail));
    else {
        \_::$Back->User->Refresh();
        \Res::Load(User::$InHandlerPath);
    }
return $module->Result;
?>