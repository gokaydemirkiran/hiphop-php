--TEST--
Bug #17988 (strtotime handling of postgresql timestamps)
--FILE--
<?php
///putenv("TZ=GMT");
echo gmdate('Y-m-d H:i:s', strtotime("2002-06-25 14:18:48.543728"))."\n";
echo gmdate('Y-m-d H:i:s', strtotime("2002-06-25 14:18:48.543728 GMT"))."\n";
echo gmdate('Y-m-d H:i:s', strtotime("2002-06-25 14:18:48.543728 MET"))."\n";
echo gmdate('Y-m-d H:i:s', strtotime("2002-06-25 14:18:48.543728 MEST"))."\n";
echo gmdate('Y-m-d H:i:s', strtotime("2002-06-25 14:18:48.543728 EDT"))."\n";
echo gmdate('Y-m-d H:i:s', strtotime("2002-06-25 14:18:48.543728-00"))."\n";
echo gmdate('Y-m-d H:i:s', strtotime("2002-06-25 14:18:48.543728+00"))."\n";
echo gmdate('Y-m-d H:i:s', strtotime("2002-06-25 14:18:48.543728-04"))."\n";
echo gmdate('Y-m-d H:i:s', strtotime("2002-06-25 14:18:48.543728+04"))."\n";
echo gmdate('Y-m-d H:i:s', strtotime("2002-06-25 14:18:48.543728-0300"))."\n";
echo gmdate('Y-m-d H:i:s', strtotime("2002-06-25 14:18:48.543728+0300"))."\n";
echo gmdate('Y-m-d H:i:s', strtotime("2002-06-25 14:18:48.543728-0330"))."\n";
echo gmdate('Y-m-d H:i:s', strtotime("2002-06-25 14:18:48.543728+0330"))."\n";
?>
--EXPECT--
2002-06-25 14:18:48
2002-06-25 14:18:48
2002-06-25 13:18:48
2002-06-25 12:18:48
2002-06-25 18:18:48
2002-06-25 14:18:48
2002-06-25 14:18:48
2002-06-25 18:18:48
2002-06-25 10:18:48
2002-06-25 17:18:48
2002-06-25 11:18:48
2002-06-25 17:48:48
2002-06-25 10:48:48
