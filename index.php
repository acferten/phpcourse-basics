<?php
echo '=== !1,  ' . var_dump(!1);
echo '=== !0,  ' . var_dump(!0);
echo '=== !true,  ' . var_dump(!true);
echo '=== 2 && 3,  ' . var_dump(2 && 3);
echo '=== 5 && 0,  ' . var_dump(5 && 0);
echo '=== 3 || 0,  ' . var_dump(3 || 0);
echo '=== 5 / 1,  ' . var_dump(5 / 1);
echo '=== 1 / 5,  ' . var_dump(1 / 5);
echo "=== 5 + '5string',  " . var_dump(5 + '5string');
echo "=== '5'==5,  " . var_dump('5' == 5);
echo "=== '05' == 5,  " . var_dump('05' == 5);
echo "=== '05' == '5',  " . var_dump('05' == '5');
