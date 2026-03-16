<?php
session_start();
session_destroy();
header("Location: testindex.html");
exit;