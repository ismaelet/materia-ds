<?php

//fetch projects
$projects = DB::select('* FROM projects WHERE status=1 ORDER BY year DESC, ID DESC');
