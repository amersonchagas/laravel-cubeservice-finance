<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Spatie\Multitenancy\Commands\Concerns\TenantAware;
use Spatie\Multitenancy\Concerns\UsesMultitenancyConfig;
use Spatie\Multitenancy\Models\Concerns\UsesTenantModel;
use App\Models\Tenant;

class TenantsArtisanCommand extends Command
{
    use UsesTenantModel;
    use UsesMultitenancyConfig;
    use TenantAware;

    protected $signature = 'tenants:artisan {artisanCommand} {--tenant=*}';

    public function handle()
    {
        if (! $artisanCommand = $this->argument('artisanCommand')) {
            $artisanCommand = $this->ask('Which artisan command do you want to run for all tenants?');
        }

        $artisanCommand = addslashes($artisanCommand);

        $tenant = Tenant::current();


        if(isset($tenant->service) and $tenant->service == env('SERVICE')) {
            $this->line('');
            $this->info("Running command for tenant `{$tenant->name}` (id: {$tenant->getKey()})...");
            $this->line("---------------------------------------------------------");
            Artisan::call($artisanCommand, [], $this->output);
        }

    }
}
