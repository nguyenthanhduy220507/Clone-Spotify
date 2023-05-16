<?php

function getUrl()
{
    return 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
}
