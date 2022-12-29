<section id="portfolio" class="portfolio">
    <div class="container">

        <div class="section-title">
            <h2>Portfolio</h2>
            <p>My Works</p>
        </div>

        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-js">JS</li>
                    <li data-filter=".filter-php">PHP</li>
                    <li data-filter=".filter-web">Web</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container">
            <?php
                $projects = DB::table("aggiungi_projects")
                    ->orderBy("title", "asc")
                    ->get();
            ?>
            @foreach($projects as $project)
            <div class="col-lg-4 col-md-6 portfolio-item {{ $project->filter }}">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/{{ $project->img }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>{{ strtoupper($project->title) }}</h4>
                        <p>{{ ucfirst($project->label) }}</p>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/{{ $project->img }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox" title="{{ $project->galleryTitle }}"><i class="bx bx-plus"></i></a>
                            <a href="{{ $project->url }}" data-gallery="portfolioDetailsGallery"
                                data-glightbox="type: external" class="portfolio-details-lightbox"
                                title="Portfolio Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
    </div>
</section>