<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

class MigrateFreshCustom extends Command
{
    protected $signature = 'migrate:fresh-custom';

    protected $description = 'Drop all tables and re-run all migrations excluding specified tables';

    public function handle()
    {
        $tablesToExclude = [
            'new_admin_table1',
            'new_admin_table2',
            'sessions', // Exclude the sessions table
            // Add more table names as needed
        ];

        $this->call('migrate:fresh', ['--drop-views' => true]); // Use 'migrate:fresh' instead of 'migrate:reset'

        foreach ($tablesToExclude as $table) {
            $this->excludeTable($table);
        }

        $this->call('db:seed');

        $this->info('Migration fresh complete.');
    }

    protected function excludeTable($table)
    {
        $this->line("Excluding table: $table");

        $database = $this->laravel->make('db');
        $schemaBuilder = $database->connection()->getSchemaBuilder();

        if ($schemaBuilder->hasTable($table)) {
            $schemaBuilder->drop($table);
        }
    }
}
