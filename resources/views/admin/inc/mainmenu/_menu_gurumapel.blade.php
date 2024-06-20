<li class="nav-title">Guru Mata Pelajaran</li>
<li class="{{ Request::is('gurumapel*') ? 'active open' : '' }}">
    <a href="#" title="Proses KBM" data-filter-tags="gurumapel proses kbm">
        <i class="fal fa-graduation-cap"></i>
        <span class="nav-link-text" data-i18n="nav.tools">Proses KBM</span>
    </a>
    <ul>
        <li class="{{ Request::is('gurumapel_data_kbm*') ? 'active' : '' }}">
            <a href="/gurumapel_data_kbm" title="Data KBM" data-filter-tags="gurumapel data kbm">
                <span class="nav-link-text" data-i18n="nav.gurumapel_data_kbm">Data KBM</span>
            </a>
        </li>
        <li class="{{ Request::is('gurumapel_capaian_kompetensi*') ? 'active' : '' }}">
            <a href="/gurumapel_capaian_kompetensi" title="Capaian Kompetensi"
                data-filter-tags="gurumapel capaian kompetensi">
                <span class="nav-link-text" data-i18n="nav.gurumapel_capaian_kompetensi">Capaian Kompetensi</span>
            </a>
        </li>
        <li class="{{ Request::is('gurumapel_proses_penilaian*') ? 'active' : '' }}">
            <a href="/gurumapel_proses_penilaian" title="Proses Penilaian"
                data-filter-tags="gurumapel proses penilaian">
                <span class="nav-link-text" data-i18n="nav.gurumapel_proses_penilaian">Proses Penilaian</span>
            </a>
        </li>
        <li class="{{ Request::is('gurumapel_absensi*') ? 'active' : '' }}">
            <a href="/gurumapel_absensi" title="Absensi" data-filter-tags="gurumapel absensi">
                <span class="nav-link-text" data-i18n="nav.gurumapel_absensi">Absensi</span>
            </a>
        </li>
    </ul>
</li>
