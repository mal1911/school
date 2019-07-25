<?php
return [
  'id' => 'school',
  'basePath' => realpath(__DIR__ . '/../'),
  'components' => [
    'request' => [
      'baseUrl'=> '',
    ],

    'urlManager' => [
      'enablePrettyUrl' => true,
      'showScriptName' => false,
      'rules' => [],
    ]
  ]
];
?>