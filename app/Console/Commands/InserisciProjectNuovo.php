<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\AggiungiProject;

class InserisciProjectNuovo extends Command {
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'portfolio:aggiungi-project';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando per aggiungere nuovi progetti al portfolio';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle() {
        $project = new AggiungiProject();

        $title = $project->title = $this->ask ("Aggiungi titolo progetto");
        $label = $project->label = $this->ask ("Aggiungi etichetta progetto");
        $img = $project->img = $this->ask ("Aggiungi immagine progetto");
        $filter = $project->filter = $this->ask ("Aggiungi filtro progetto");
        $url = $project->url = $this->ask ("Aggiungi URL progetto");
        $galleryTitle = $project->galleryTitle = $this->ask ("Aggiungi titolo per la galleria del progetto");

        if($this->confirm($title."\n".$label."\n".$img."\n".$filter."\n".$url."\n".$galleryTitle."\nConfermi?")) {
            $project->save();
            $this->info("Progetto aggiunto al DB");
        } else {
            $this->error("Regisrazione annullata");
        }
        return 0;
    }
}
