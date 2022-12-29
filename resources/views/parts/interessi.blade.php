<!-- ======= Interests ======= -->
<div class="interests container">

    <div class="section-title">
        <h2>Interessi</h2>
    </div>

    <div class="row g-3">
        <?php
        $interessi = DB::table('interesses')
            ->orderBy('name', 'asc')
            ->get();
        ?>
        @foreach ($interessi as $interesse)
            <div class="col-lg-3 col-md-4">
                <div class="icon-box">
                    <i class="{{ $interesse->icon }}" style="color: {{ $interesse->iconColor }};"></i>
                    <h3>{{ $interesse->name }}</h3>
                </div>
            </div>
        @endforeach
    </div>

</div><!-- End Interests -->
