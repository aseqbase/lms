<?php

use MiMFa\Library\Convert;

module("Forum");
$module = new \MiMFa\Module\Forum();
$name = $module->Name;
$module->CheckAccess = fn($item)=>\_::$Back->User->Access(\_::$Config->AdminAccess) || \_::$Back->User->Access(Convert::ToSequence(Convert::FromJson(getValid($item, 'Access' , \_::$Config->VisitAccess))));
$module->Item = $data;
$module->CommentForm->SubjectLabel = null;
$module->RootRoute = "/exercise/";
set($module, $data);
$module->Name = $name;// To do not change the name of module
$module->Render();
?>