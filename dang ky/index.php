<?php
function loadRegistrations()
{
    $datajson = file_get_contents("data.json");
    $changeDatajson = json_encode($datajson);
    return $changeDatajson;
}
//tao mang chua du lieu nguoi dung dang ky

