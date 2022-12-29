<?php

namespace App\Console\Commands;
use App\Models\MenuItem;
use Illuminate\Console\Command;

class InserisciMenuItem extends Command {
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'portfolio:inserisci-menu-item';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando per inserire una nuova voce al menu';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle() {
        $item = new MenuItem();

        $item->label = $this->ask("Inserire etichetta dell'item");
        $item->url = $this->ask("Inserire URL dell'item");
        $item->position = $this->ask("Inserire posizione dell'item");

        if($this->confirm("Confermi\n# LABEL: $item->label\n# URL: $item->url\n# POSIZIONE: $item->position\n")) {
            $item->save();
            $this->info("Nuovo menu item registrato");
        } else {
            $this->error("Registrazinoe cancellata");
        }

        return Command::SUCCESS;
    }
}
