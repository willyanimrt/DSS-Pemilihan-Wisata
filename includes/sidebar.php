<div id="layoutSidenav_nav">
    <?php $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/")+1); ?>
                
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>

                <a class="nav-link <?= $page == 'index.php' ? 'active':'' ?>" href="index.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard 
                </a>
                
                <div class="sb-sidenav-menu-heading">Interface</div>

                <a class="nav-link collapsed <?= $page == 'category-add.php' || $page == 'category-view.php' || $page == 'category-edit.php' ? 'active':'' ?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Tambah Data
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse <?= $page == 'formalternatif.php' || $page == 'formkriteria.php' || $page == 'formbobot.php' || $page == 'formskala.php' || $page == 'formmatrix.php' ? 'show':'' ?>" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link <?= $page == 'formalternatif.php' ? 'active':'' ?>" href="formalternatif.php">Alternatif</a>
                        <a class="nav-link <?= $page == 'formkriteria.php' ? 'active':'' ?>" href="formkriteria.php">Kriteria</a>
                        <a class="nav-link <?= $page == 'formbobot.php' ? 'active':'' ?>" href="formbobot.php">Bobot</a>
                        <a class="nav-link <?= $page == 'formskala.php' ? 'active':'' ?>" href="formskala.php">Skala</a>
                        <a class="nav-link <?= $page == 'formmatrix.php.php' ? 'active':'' ?>" href="formmatrix.php">Matrix</a>
                    </nav>
                </div>

                <a class="nav-link collapsed <?= $page == 'post-add.php' || $page == 'post-view.php' || $page == 'post-edit.php' ? 'active':'' ?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePosts" aria-expanded="false" aria-controls="collapsePosts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Tampil Data
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse <?= $page == 'tdalternatif.php' || $page == 'tdkriteria.php' || $page == 'tdbobot.php' || $page == 'tdskala.php' || $page == 'tdmatrix.php' ? 'show':'' ?>" id="collapsePosts" aria-labelledby="Posts" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link <?= $page == 'tdalternatif.php' || $page == 'editalternatif.php' ? 'active':'' ?>" href="tdalternatif.php">Alternatif</a>
                        <a class="nav-link <?= $page == 'tdkriteria.php' || $page == 'editkriteria.php' ? 'active':'' ?>" href="tdkriteria.php">Kriteria</a>
                        <a class="nav-link <?= $page == 'tdbobot.php' || $page == 'editbobot.php' ? 'active':'' ?>" href="tdbobot.php">Bobot</a>
                        <a class="nav-link <?= $page == 'tdskala.php' || $page == 'editskala.php' ? 'active':'' ?>" href="tdskala.php">Skala</a>
                        <a class="nav-link <?= $page == 'tdmatrix.php' || $page == 'editmatrix.php' ? 'active':'' ?>" href="tdmatrix.php">Matrix</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Metode
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                            Topsis
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse <?= $page == 'topsis-pembagi.php' || $page == 'topsis-normalisasi.php' || $page == 'topsis-terbobot.php' || $page == 'topsis-maxmin.php' || $page == 'topsis-sipsin.php' || $page == 'topsis-nilaiv.php' ? 'show':'' ?>" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="topsis-pembagi.php">Pembagi</a>
                                <a class="nav-link" href="topsis-normalisasi.php">Normalisasi</a>
                                <a class="nav-link" href="topsis-terbobot.php">Terbobot</a>
                                <a class="nav-link" href="topsis-maxmin.php">MaxMin</a>
                                <a class="nav-link" href="topsis-sipsin.php">SipSin</a>
                                <a class="nav-link" href="topsis-nilaiv.php">Nilai V</a>
                            </nav>
                        </div>
                    </nav>
                </div>
                <!-- <div class="sb-sidenav-menu-heading">Addons</div>
                
                <a class="nav-link" href="tables.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Tables
                </a> -->
            </div>
        </div>
        <!-- <div class="sb-sidenav-footer">
            <div class="small"></div>
            <?php if(isset($_SESSION['auth_user'])) : ?>
                <?= $_SESSION['auth_user']['user_name']; ?>
            <?php endif; ?>
        </div> -->
    </nav>
</div>
