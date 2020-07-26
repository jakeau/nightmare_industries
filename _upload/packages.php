<?php
$keys = isset($_GET['key']) ? array_map('trim', explode(',', strtolower($_GET['key']))) : array();
$packages = array();

$packages[] = array(
    'name' => 'ahs189',
    'title' => 'AHS 1.8.9 PvP',
    'version' => '2020-07-27-08-04-59',
    'priority' => 100,
    'location' => 'ahs189.json',
);

$packages[] = array(
    'name' => 'nightmare_industries',
    'title' => 'Nightmare Industries',
    'version' => '2020-07-27-08-05-50',
    'priority' => 90,
    'location' => 'nightmare_industries.json',
);

$packages[] = array(
    'name' => 'labymod',
    'title' => 'LMod 1.8.9',
    'version' => '2020-07-27-08-04-53',
    'priority' => 0,
    'location' => 'labymod.json',
);

$out = array('minimumVersion' => 1, 'packages' => $packages);
header('Content-Type: text/plain; charset=utf-8');
echo json_encode($out);
