<li class="nav-title">Wali Kelas</li>
<li class="{{ Request::is('intel*') ? 'active open' : '' }}">
    <a href="#" title="Tools" data-filter-tags="tools">
        <i class="fal fa-cogs"></i>
        <span class="nav-link-text" data-i18n="nav.tools">Tools</span>
    </a>
    <ul>
        <li class="{{ Request::is('tools_opsi_aplikasi*') ? 'active' : '' }}">
            <a href="/tools_opsi_aplikasi" title="Opsi Aplikasi" data-filter-tags="tools opsi aplikasi">
                <span class="nav-link-text" data-i18n="nav.tools_opsi_aplikasi">Opsi Aplikasi</span>
            </a>
        </li>
        <li class="{{ Request::is('tools_impor_data_master*') ? 'active' : '' }}">
            <a href="/tools_impor_data_master" title="Impor Data Master" data-filter-tags="tools impor data master">
                <span class="nav-link-text" data-i18n="nav.tools_impor_data_master">Impor Data Master</span>
            </a>
        </li>
        <li class="{{ Request::is('tools_ekspor_data_master*') ? 'active' : '' }}">
            <a href="/tools_ekspor_data_master" title="Ekspor Data Master" data-filter-tags="tools ekspor data master">
                <span class="nav-link-text" data-i18n="nav.tools_ekspor_data_master">Introduction</span>
            </a>
        </li>
        <li class="{{ Request::is('tools_backup_database*') ? 'active' : '' }}">
            <a href="/tools_backup_database" title="Backup Database" data-filter-tags="tools backup database">
                <span class="nav-link-text" data-i18n="nav.tools_backup_database">Backup Database</span>
            </a>
        </li>
        <li class="{{ Request::is('tools_data_login*') ? 'active' : '' }}">
            <a href="/tools_data_login" title="Data Login" data-filter-tags="tools data login">
                <span class="nav-link-text" data-i18n="nav.tools_data_login">Data Login</span>
            </a>
        </li>
    </ul>
</li>
