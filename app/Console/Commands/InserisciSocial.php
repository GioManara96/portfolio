<?php

namespace App\Console\Commands;

use App\Models\AggiungiSocial;
use Illuminate\Console\Command;

class InserisciSocial extends Command {
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'portfolio:inserisci-social';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando per inseire un nuovo link a un social';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle() {
        $social = new AggiungiSocial();

        $social->name = $this->ask("Inserire etichetta del social");
        $social->url = $this->ask("Inserire URL del social");
        $social->class = $this->ask("Inserire classe/icona del social");
        $social->position = $this->ask("Inserire posizione del social");

        if($this->confirm("Confermi\n# NOME: $social->name\n# URL: $social->url\n# CLASSE: $social->class\n# POSIZIONE: $social->position\n")) {
            $social->save();
            $this->info("Nuovo social registrato");
        } else {
            $this->error("Registrazinoe cancellata");
        }

        return Command::SUCCESS;
    }
}
