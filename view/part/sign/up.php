<?php
module("SignUpForm");
$module = new \MiMFa\Module\SignUpForm();
$module->Title = "Sign Up";
$module->Image = "user";
$module->GroupOptions = table("UserGroup")->SelectPairs("`Id`", "`Title`", "`Id`>=100");
swap($module, $data);
$module->Render();
?>