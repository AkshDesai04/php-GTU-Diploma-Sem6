<?php
    echo date('d-m-y') . "---";
    print_r(getdate()) . "---";
    echo date_format(date_date_set(date_create(), 2020, 10, 30), "y-m-d") . "---";
    echo checkdate(2, 28, 2018);echo checkdate(2, 29, 2021) . "---";
    echo time() . "---";
    echo date("1", mktime(0, 0, 0, 8, 21, 2018)) . "---";
?>