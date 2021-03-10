<?php
require_once dirname(__FILE__).'/config.php';

//rzekierowanie przeglądarki klienta (redirect)
//header("Location: "._APP_URL."/app/calc_view.php");

//przekazanie żądania do następnego dokumentu ("forward")
include _ROOT_PATH.'/app/calcw_view.php';