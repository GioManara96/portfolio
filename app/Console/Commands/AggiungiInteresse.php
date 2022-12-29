<?php

namespace App\Console\Commands;

use App\Models\Interesse;
use Illuminate\Console\Command;

class AggiungiInteresse extends Command {
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'portfolio:inserisci-interesse';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando epr inserire un nuovo ineresse personale';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle() {
        $interesse = new Interesse();

        $interesse->name = $this->ask("Inserire nome dell'interesse");
        $interesse->icon = $this->ask("Inserire icona dell'interesse");
        $interesse->iconColor = $this->ask("Inserire colore icona dell'interesse");
        $interesse->position = $this->ask("Inserire posizione dell'interesse");

        if($this->confirm("Confermi\n# NOME: $interesse->name\n# ICONA: $interesse->icon\n# COLORE ICONA: $interesse->iconColor\n# POSIZIONE: $interesse->position\n")) {
            $interesse->save();
            $this->info("Nuovo interesse registrato");
        } else {
            $this->error("Registrazinoe cancellata");
        }

        return Command::SUCCESS;
    }
}
