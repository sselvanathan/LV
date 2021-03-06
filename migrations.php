<?php

return [
    'name' => 'LV',
    'migrations_namespace' => 'Database\Core\Migration',
    'table_name' => 'doctrine_migration_versions',
    'column_name' => 'version',
    'column_length' => 14,
    'executed_at_column_name' => 'executed_at',
    'migrations_directory' => '/src/Database/Core/src/Migration',
    'all_or_nothing' => true,
    'check_database_platform' => true,
];
