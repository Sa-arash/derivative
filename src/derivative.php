<?php
parse_str(implode('&', array_slice($argv, 1)), $_GET);
print_r( $_GET);