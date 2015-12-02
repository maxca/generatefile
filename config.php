<?php
$prefix = 'Truemoveh';
$name = $argv[1];
$path_file = [
    'controller' => 'app\\Http\\Controllers\\Api\\{prefix}\\',
    'request' => 'app\\Http\\Requests\\',
    'model' => 'app\\Models\\{prefix}\\',
    'repository' => 'app\\Repositories\\Storage\\{prefix}\\{name}\\',
    'criterias' => 'app\\Repositories\\Criterias\\{prefix}\\{name}\\',
    'interfaces' => 'app\\Repositories\\Interfaces\\{prefix}\\{name}\\',
    'presenters' => 'app\\Repositories\\Presenters\\{prefix}\\{name}\\',
    'transformer' => 'app\\Repositories\\Presenters\\{prefix}\\{name}\\',

];

$providers = "
	 \App::bind(
            '{interfaces}',
            '{storage}'
        );
";

$skip = [
    'providers' => 'app\\Providers\\RepositoryServiceProvider.php',
    'route' => 'app\\Http\\routes.php',
];
