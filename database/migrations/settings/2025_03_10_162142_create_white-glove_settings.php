<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('white-glove.enabled', false);
        $this->migrator->add('white-glove.icon', '');
        $this->migrator->add('white-glove.title', '');
        $this->migrator->add('white-glove.details', '');
        $this->migrator->add('white-glove.modal', '');
    }

    public function down()
    {
        $this->migrator->delete('white-glove.enabled');
        $this->migrator->delete('white-glove.icon');
        $this->migrator->delete('white-glove.title');
        $this->migrator->delete('white-glove.details');
        $this->migrator->delete('white-glove.modal');
    }
};
