<section id="team" class="team transition" x-data="{ visible: false }"
         x-intersect.once="visible = true"
         :class="{ 'visible': visible }">
    <h2 class="primary_title team_title">Notre &eacute;quipe</h2>

    <div class="team_mate">
        <div class="img_container">
            <img loading="lazy" class="team_mate_img img_container_img" src="{{asset('assets/images/optimized/nathalie.webp')}}" alt="Photo de Nathalie"
                 width="500" height="889">
        </div>
        <div class="team_mate_container" itemscope itemtype="https://schema.org/Person">
            <h3 class="team_mate_container_name bold" itemprop="name">Nathalie Brugmans</h3>
            <p class="team_mate_container_job" itemprop="jobTitle">Expert-Comptable fiscaliste</p>
            <p class="team_mate_container_itaa"><abbr title="Institute for Tax Advisors and Accountants" lang="en"
                                                      class="abbr">ITAA</abbr> 10.142.358</p>
            <a class="team_mate_container_link link" href="tel:+32478440913" title="Téléphoner" itemprop="telephone">+32
                (0) 478 44 09 13</a>
            <a class="team_mate_container_link link" href="mailto:nathalie.brugmans@fiscaconsult.com"
               title="Envoyer un email" itemprop="email">nathalie.brugmans@fiscaconsult.com</a>
        </div>
    </div>

    <div class="team_mate">
        <div class="img_container">
            <img loading="lazy" class="team_mate_img img_container_img" src="{{asset('assets/images/optimized/olivier.webp')}}" alt="Photo d'Olivier"
                 width="500" height="889">
        </div>
        <div class="team_mate_container" itemscope itemtype="https://schema.org/Person">
            <h3 class="team_mate_container_name bold" itemprop="name">Olivier Pagnoul</h3>
            <p class="team_mate_container_job" itemprop="jobTitle">Expert-Comptable fiscaliste</p>
            <p class="team_mate_container_itaa"><abbr title="Institute for Tax Advisors and Accountants" lang="en"
                                                      class="abbr">ITAA</abbr> 10.960.491</p>
            <a class="team_mate_container_link link" href="tel:+32476262639" title="Téléphoner" itemprop="telephone">+32
                (0) 476. 26.26.39</a>
            <a class="team_mate_container_link link"
               href="mailto:olivier.pagnoul@fiscaconsult.com" title="Envoyer un email" itemprop="email">olivier.pagnoul@fiscaconsult.com</a>
        </div>
    </div>
</section>
