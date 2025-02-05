<!-- Counter Start -->
<Section class="section counter-bg" style="background-color: #08b7c5;">
    <div class="counter-bg-overlay"></div>
    <div class="container">
        <div class="row align-items-center" id="counter">
            <div class="col-lg-4 col-md-6">
                <div class="mb-4 mb-lg-0">
                    <h2 class="text-white mb-4">Pencapaian</h2>
                    <p class="f-15 text-white-70 mb-4">Berikut adalah pencapaian yang telah {{ $setting->namaTahfiz }}
                        peroleh.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="counter-box text-center px-4 py-5 mb-4 mb-lg-0">
                    <div class="text-white">
                        <img src="http://template-lbw.kactusidea.com/neloz/t/HTML/images/icon/icon-1.png" alt=""
                            class="img-fluid mx-auto d-blok">
                        <h1 class="mb-2 mt-3"><span class="counter-value mt-4"
                                data-count="{{ $tSantri }}">$tSantri</span>+</h1>
                        <p class="mb-0 text-white-70">Total Santri</p>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-3 col-md-6">
                <div class="counter-box text-center px-4 py-5 mb-4 mb-lg-0">
                    <div class="text-white">
                        <img src="http://template-lbw.kactusidea.com/neloz/t/HTML/images/icon/icon-2.png" alt=""
                            class="img-fluid mx-auto d-blok">
                        <h1 class="mb-2 mt-3"><span class="counter-value mt-4" data-count="1200">0</span></h1>
                        <p class="mb-0 text-white-70">Santri Diwisuda</p>
                    </div>
                </div>
            </div> --}}
            <div class="col-lg-4 col-md-6">
                <div class="counter-box text-center px-4 py-5 mb-4 mb-lg-0">
                    <div class="text-white">
                        <img src="http://template-lbw.kactusidea.com/neloz/t/HTML/images/icon/icon-3.png" alt=""
                            class="img-fluid mx-auto d-blok">
                        <h1 class="mb-2 mt-3"><span class="counter-value mt-4"
                                data-count="{{ $tKegiatan }}">{{ $tKegiatan }}</span></h1>
                        <p class="mb-0 text-white-70">Kegiatan Terlaksana</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</Section>
<!-- Counter End -->
