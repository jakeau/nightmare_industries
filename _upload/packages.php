<?php
$keys = isset($_GET['key']) ? array_map('trim', explode(',', strtolower($_GET['key']))) : array();
$packages = array();

$packages[] = array(
    'name' => 'ahs189',
    'title' => 'AHS 1.8.9 PvP',
    'version' => '2020-05-23-00-17-24',
    'priority' => 100,
    'location' => 'ahs189.json',
);

$packages[] = array(
    'name' => 'RougelikeAdventures1122',
    'title' => 'Rougelike Adventures 1.12.2',
    'version' => '2020-05-23-00-16-37',
    'priority' => 0,
    'location' => 'rougelikeadventures1122.json',
);

$out = array('minimumVersion' => 1, 'packages' => $packages);
header('Content-Type: text/plain; charset=utf-8');
echo json_encode($out);
