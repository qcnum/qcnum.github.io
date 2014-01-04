<?php include('parts/header.php'); ?>
  <header>
        <!-- Logo -->
        <h1><span class="visuallyhidden">Québec Numérique</span></h1>
        <!-- Main navigation -->
        <nav>
            <ul>
                <li class="home active"><a href="#quebec-numerique"><span class="visuallyhidden">Section </span>01</a><span class="visuallyhidden"> : Québec Numérique </span></li>
                <li class="about"><a href="#a-propos"><span class="visuallyhidden">Section </span>02</a><span class="visuallyhidden"> : À propos </span></li>
                <li class="events"><a href="#evenements"><span class="visuallyhidden">Section </span>03</a><span class="visuallyhidden"> : Volet événements </span></li>
                <li class="our-events"><a href="#nos-evenements"><span class="visuallyhidden">Section </span>04</a><span class="visuallyhidden"> : Nos événements </span></li>
                <li class="place"><a href="#le-lieu"><span class="visuallyhidden">Section </span>05</a><span class="visuallyhidden"> : Le lieu </span></li>
                <li class="who-are-we"><a href="#qui-sommes-nous"><span class="visuallyhidden">Section </span>06</a><span class="visuallyhidden"> : Qui somme-nous ? </span></li>
                <li class="contact"><a href="#nous-contacter"><span class="visuallyhidden">Section </span>07</a><span class="visuallyhidden"> : Nous contacter </span></li>
            </ul>
        </nav>
    </header>

    <section class="home" id="quebec-numerique">
        <div class="contents-wrap">
            <div class="contents">
                <div class="home-wrap">
                    <img src="/images//qcnumerique-logo-large.png" alt="" class="retina">
                    <p class="goto-section"><a href="#a-propos"><span class="visuallyhidden">Aller à la section </span><span class="number">02</span><span class="visuallyhidden"> : </span>À propos<span class="arrow"></span></a></p>
                </div>
            </div>
        </div>
    </section>

    <?php include('parts/about.php'); ?>
    <?php include('parts/events.php'); ?>
    <?php include('parts/our-events.php'); ?>
    <?php include('parts/place.php'); ?>
    <?php include('parts/who-are-we.php'); ?>
    <?php include('parts/contact.php'); ?>

<?php include('parts/footer.php'); ?>