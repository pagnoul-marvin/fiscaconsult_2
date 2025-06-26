<section id="mission" class="mission transition" x-data="{ visible: false }"
         x-intersect.once="visible = true"
         :class="{ 'visible': visible }">
    <div class="mission_header">
        <div class="mission_header_text">
            <h2 class="primary_title mission_header_text_title">Notre mission</h2>
            <p class="mission_header_text_paragraph">Vous simplifier la vie, avec clart&eacute; et expertise.</p>
        </div>
        <div class="img_container">
            <img loading="lazy" src="{{asset('assets/images/optimized/office_2.jpeg')}}" alt="Photo d'Olivier dans son bureau" width="" height="" class="mission_header_img img_container_img">
        </div>
    </div>

    <ul class="mission_list">
        <li class="mission_list_item">Expertise confirm&eacute;e</li>
        <li class="mission_list_item">Accompagnement personnalis&eacute;</li>
        <li class="mission_list_item">Z&eacute;ro jargon. Z&eacute;ro flou</li>
    </ul>

    <div class="mission_content">
        <div class="mission_content_first_texts_containers">
            <div class="mission_content_first_texts_containers_first">
                <p class="mission_content_first_texts_containers_first_text">Chez <span
                        class="bold" itemprop="name">FISCA CONSULT</span>, nous savons
                    qu&apos;entreprendre demande d&eacute;j&agrave; toute votre &eacute;nergie. C&apos;est pourquoi nous mettons <span class="bold">notre expertise
                    fiscale et sociale au service de votre tranquillit&eacute;.</span></p>
                <p class="mission_content_first_texts_containers_first_text"><span
                        class="bold">Notre mission&nbsp;?</span> Vous accompagner de façon
                    <span class="bold">proactive, humaine et rigoureuse,</span> pour que vous puissiez avancer
                    sereinement, sans mauvaise
                    surprise.</p>
            </div>

            <div class="mission_content_first_texts_containers_second">
                <p class="mission_content_first_texts_containers_second_text">Gr&agrave;ce &agrave; notre <span class="bold">approche structur&eacute;e et &agrave; un
                    suivi constant&nbsp;:</span></p>
                <ul class="mission_content_first_texts_containers_second_list">
                    <li class="mission_content_first_texts_containers_second_list_item">Le <span class="bold">montant de vos imp&ocirc;ts sont
                        connus &agrave; l&apos;avance</span>, bien avant que l&apos;avertissement extrait de r&ocirc;le ne tombe.
                    </li>
                    <li class="mission_content_first_texts_containers_second_list_item">Les <span class="bold">r&eacute;gularisations sociales
                        sont anticip&eacute;es jusqu&apos;&agrave; deux ans</span>, pour une gestion parfaitement ma&icirc;tris&eacute;e.
                    </li>
                </ul>
            </div>
        </div>

        <p class="mission_content_last_text">Notre force, c&apos;est de <span class="bold">conjuguer l&apos;expertise d&apos;un cabinet exp&eacute;riment&eacute; &agrave;
            l&apos;accompagnement bienveillant d&apos;un partenaire de confiance.</span> Chez nous, <span class="bold">as de jargon inutile ni de flou
            administratif</span>&nbsp;:&nbsp;tout est clair, pr&eacute;vu, et expliqu&eacute;. <span class="bold">Vous savez o&ugrave; vous allez… et surtout, vous n&apos;y allez pas seul.</span>
        </p>
    </div>

    <div class="mission_link">
        <a href="#contact" title="Rencontrez-nous" class="primary_btn">Rencontrez-nous</a>
    </div>

</section>
