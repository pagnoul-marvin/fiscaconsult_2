<footer class="footer transition" x-data="{ visible: false }"
        x-intersect.once="visible = true"
        :class="{ 'visible': visible }">
    <div class="footer_nav">
        <nav class="footer_nav_container">
            <h2 class="primary_title bold">Navigation principale</h2>

            <ul class="footer_nav_container_list">
                <li class="footer_nav_container_list_item"><a href="#team" title="Aller vers la section notre &eacute;quipe"
                                                    class="footer_nav_container_list_item_link link">Notre &eacute;quipe</a></li>
                <li class="footer_nav_container_list_item"><a href="#office" title="Aller vers la section notre cabinet"
                                                    class="footer_nav_container_list_item_link link">Notre cabinet</a></li>
                <li class="footer_nav_container_list_item"><a href="#mission" title="Aller vers la section notre mission"
                                                    class="footer_nav_container_list_item_link link">Notre mission</a></li>
                <li class="footer_nav_container_list_item"><a href="#expertise" title="Aller vers la section notre expertise"
                                                    class="footer_nav_container_list_item_link link">Notre expertise</a></li>
            </ul>

        </nav>

        <nav class="footer_nav_container">
            <h2 class="primary_title bold">Nos coordonn&eacute;es</h2>

            <ul class="footer_nav_container_list">
                <li class="footer_nav_container_list_item"><a class="footer_nav_container_list_item_link link" href="mailto:olivier.pagnoul@fiscaconsult.com" title="Envoyer un mail" itemprop="email">olivier.pagnoul@fiscaconsult.com</a></li>
                <li class="footer_nav_container_list_item"><a class="footer_nav_container_list_item_link link" href="tel:+32476262639" title="T&eacute;l&eacute;phoner" itemprop="telephone">+32 (0) 476.26.26.39</a></li>
                <li class="footer_nav_container_list_item" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                    <a class="footer_nav_container_list_item_link link" href="https://www.google.com/maps/place/Cle+Buisness+Center/@50.701033,5.417813,17z/data=!3m1!4b1!4m6!3m5!1s0x47c0fdee23828aff:0xb1975efc73ea6166!8m2!3d50.701033!4d5.4203879!16s%2Fg%2F11tff59m38?entry=ttu&g_ep=EgoyMDI1MDYyMi4wIKXMDSoASAFQAw%3D%3D" title="Voir sur Google Maps" hreflang="fr"><span itemprop="streetAddress">Grand&apos;Route 18A</span> (Centre d&apos;Affaires CLEBC), <span itemprop="postalCode">4367</span> <span itemprop="addressLocality">Crisn&eacute;e</span></a></li>
            </ul>

        </nav>

        <div class="footer_nav_logo">
            <img loading="lazy" class="logo" src="{{asset('assets/images/optimized/ITAA_logo.webp')}}" alt="Logo ITAA" width="300"
                 height="238">

            <x-app-logo/>
        </div>

    </div>

    <ul class="footer_list">
        <li class="footer_list_item"><a
                href="https://fiscaconsult.sharepoint.com/sites/ShareDrive/Gedeelde%20documenten/Forms/AllItems.aspx?id=%2Fsites%2FShareDrive%2FGedeelde%20documenten%2FITAA%20%2D%20LAB%20et%20org%2FFisca%20Consult%2FFisca%20Consult%20%2D%2020241013%20%2D%20D%C3%A9claration%20de%20protection%20de%20la%20vie%20priv%C3%A9e%2Epdf&parent=%2Fsites%2FShareDrive%2FGedeelde%20documenten%2FITAA%20%2D%20LAB%20et%20org%2FFisca%20Consult&p=true&ga=1"
                hreflang="fr" title="Voir les mentions l&eacute;gales" class="link"><abbr
                    title="R&egrave;glement G&eacute;n&eacute;ral sur la Protection des Donn&eacute;es" class="bold">RGPD</abbr></a>
        </li>
        <li class="footer_list_item">Cr&eacute;&eacute; par <a class="link" href="https://portfolio.marvinpagnoul.be"
                                                       title="Voir le portfolio de Marvin Pagnoul" hreflang="fr">Marvin
                Pagnoul</a> et <a class="link" href="https://www.homtimiste.com/" hreflang="fr"
                                  title="Voir le portfolio de Maxime Pagnoul">Maxime Pagnoul</a></li>
        <li class="footer_list_item" itemprop="name">&copy; FISCA CONSULT, 2025</li>
        <li class="footer_list_item"><small><abbr title="Banque-Carrefour des Entreprises" lang="fr" class="abbr">BCE</abbr>&nbsp;:&nbsp;BE0811.531.494&nbsp;|&nbsp;<abbr
                    title="Institute for Tax Advisors and Accountants" lang="en" class="abbr">ITAA</abbr> 50.433.936</small></li>
    </ul>

</footer>
