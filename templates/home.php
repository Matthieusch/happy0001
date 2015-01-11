<div id="introduction">
  <div class="container-fluid">
    <div class="row">
      <div id="logo" class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
        <img src="/assets/img/logo-happy-hours.png" width="100%" alt="Happy Hours - logo" />
      </div>
    </div>
  </div>
</div>

<div id="situation" class="box">
  <div id="map-canvas"></div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h2 class="brown">Situation</h2>
      </div>
      <div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-7 bg-orange">
        <h3>
          Happy Hours est une association d’entrepreneurs qui propose un <strong>espace de coworking</strong> en plein centre-ville de <strong>Rennes</strong>
        </h3>
        <h4>Happy Hours</h4>
        <address>
          22 Quai Duguay Trouin<br />
          35000 Rennes<br >
          Métro République
        </address>
      </div>
    </div>
  </div>
</div>

<div id="space" class="purple box">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h2 class="brown">L'espace</h2>
      </div>
      <div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
        <ul id="slider">
          <li><img src="/assets/img/slider/plan.jpg" alt="Plan des locaux" /></li>
          <li><img src="/assets/img/slider/bureau-1.jpg" alt="Bureau 1" /></li>
          <li><img src="/assets/img/slider/bureau-2.jpg" alt="Bureau 2" /></li>
        </ul>
      </div>
      <div class="col-xs-12">
        <div class="container">
          <div class="row">
            <div class="item col-xs-12 col-sm-6 col-md-3">
              <div>
                <img src="/assets/img/ico-table.png" width="100%" alt="icône espace de travail" />
              </div>
              <h6>Espace de travail flexible</h6>
            </div>
            <div class="item col-xs-12 col-sm-6 col-md-3">
              <div>
                <img src="/assets/img/ico-tea.png" width="100%" alt="icône boissons à volonté" />
              </div>
              <h6>Boissons<br />à volonté</h6>
            </div>
            <div class="item col-xs-12 col-sm-6 col-md-3">
              <div>
                <img src="/assets/img/ico-ethernet.png" width="100%" alt="icône connexion haut débit" />
              </div>
              <h6>Connexion<br />haut débit</h6>
            </div>
            <div class="item col-xs-12 col-sm-6 col-md-3">
              <div>
                <img src="/assets/img/nomade.png" width="100%" alt="icône nomade" />
              </div>
              <h6>Salle de<br />réunion</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="plans" class="cream box">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h2 class="brown">Tarifs</h2>
      </div>
      <div class="item col-xs-12 col-sm-6 col-md-5 col-lg-4 col-lg-offset-1">
        <div class="item-container">
          <div class="item-top bg-lightcream"></div>
          <div class="item-content bg-lightcream text-center">
            <img src="/assets/img/nomade.png" class="align-center" width="102px" height="86px" alt="Icône nomade" />
            <h2>Nomade <sup>*</sup></h2>
            <div class="row">
              <div class="col-xs-6">
                <div class="prices bg-purple">
                  <div class="price">15 €</div>
                  <div class="price-vat">18 € TTC</div>
                </div>
                <div class="offer">
                  — 1 journée —
                </div>
                <div class="offer-plus">
                  &nbsp;
                </div>
              </div>
              <div class="col-xs-6">
                <div class="prices bg-purple">
                  <div class="price">125 €</div>
                  <div class="price-vat">150 € TTC</div>
                </div>
                <div class="offer">
                  — 10 jours —
                </div>
                <div class="offer-plus">
                  &nbsp;
                </div>
              </div>
            </div>
          </div>
        </div>
        <p class="description text-center">Le coworker s’installe de manière “plug&play”, dans un espace mis à disposition et spécialement prévu pour les travailleurs nomades.</p>
      </div>
      <div class="item col-xs-12 col-sm-6 col-md-5 col-md-offset-2 col-lg-4 col-lg-offset-2">
        <div class="item-container">
          <div class="item-top bg-cream"></div>
          <div class="item-content bg-cream text-center">
            <img id="resident" src="/assets/img/resident.png" class="align-center" width="69px" height="100px" alt="Icône permanent" />
            <h2>Résident <sup>*</sup></h2>
            <div class="prices bg-orange">
              <div class="price">200 €</div>
              <div class="price-vat">240 € TTC</div>
            </div>
            <div class="offer">
              — 1 mois —
            </div>
            <div class="offer-plus">
              8 places maximum
            </div>
          </div>
        </div>
        <p class="description text-center">Le coworker s’installe pour une période indéfinie, profite d’un bureau fixe et d’autres avantages.</p>
      </div>
      <p id="plan-price" class="text-center col-xs-12">
        <sup>*</sup> L’adhésion à l’association : 20 € (24 € TTC) par an est obligatoire pour toute personne physique ou morale.<br/>
        1 journée découverte offerte.<br />
        Les offres proposées sont valables dans la limite des places disponibles.
      </p>
    </div>
  </div>
</div>

<div id="coworkers" class="brownplus box">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h2 class="cream">Coworkers</h2>
      </div>
      <?php
        foreach ($coworkers as $key => $coworker) {
          print '<figure class="col-xs-12 col-sm-6 col-md-3">';
            print '<img class="align-center" src="/assets/img/coworkers/' . $coworker['portrait'] . '" width="160" height="160" alt="' . $coworker['name'] . '" />';
            print '<figcaption class="text-center">';
              print '<h5>' . $coworker['name'] . '</h5>';
              print '<p>' . $coworker['function'] . '</p>';
              print '<a href="http://' . $coworker['website'] . '" title="' . $coworker['name'] . ' - ' . $coworker['function'] . '">' . $coworker['website'] . '</a>';
            print '</figcaption>';
          print '</figure>';
        }
      ?>
    </div>
    <div class="row">
      <figure id="whoknows" class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
            <img class="align-center" src="/assets/img/coworkers/whoknows.jpg" width="160" height="160" alt="Qui sait ?" />
            <figcaption class="text-center">
              <h5>REJOIGNEZ-NOUS !</h5>
              <a href="mailto:happyhours.asso@gmail.com" title="Allez viens, on est bien bien bien !">happyhours.asso@gmail.com</a>
            </figcaption>';
          </figure>';
    </div>
  </div>
</div>

<div id="about" class="orange box">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h2 class="brown">À propos</h2>
      </div>
      <div class="col-xs-12 col-md-6 col-lg-5">
        <figure>
          <img class="align-center" src="/assets/img/clock-rabbit.png" width="269" height="342" alt="Lapin blanc !">
        </figure>
        <h3 class="text-center">
          <strong>Happy Hours</strong> est une association loi 1901 ayant pour objet principal de gérer et de développer un espace de “coworking ”, espace de travail partagé et <strong>créateur d’un lien social favorisant l’échange</strong> et l’ouverture entre ses membres.
        </h3>
      </div>
      <div class="col-xs-12 col-md-6 col-lg-6 col-lg-offset-1">
        <p>
          Si le nom de l’association est évocateur, il s’agit pour nous de rendre le temps de travail agréable à travers une ambiance sociabilisante et des locaux confortables, plaisants et accessibles.
        </p>
        <p>
          Notre but est de créer un espace qui donne envie de revenir le lendemain, tout simplement.
        </p>
        <p>
          Les fonds récoltés par l’association au travers de ses membres est automatiquement réinvesti pour la communauté. Ces recettes serviront à l’amélioration des lieux de par de la décoration, du mobilier supplémentaire si nécessaire, ainsi que des travaux d’aménagement et le maintien de la propreté et du bon état de ses locaux.
        </p>
        <p>
          L’association a été créée en septembre 2014.
        </p>
        <p>
          Le bureau est aujourd’hui constitué de : Gwénolé Jaffrédou (Président), Alexis Creuzot (Co-Président), Matthieu Schneider (Trésorier) et Jérémy Paul (Secrétaire).
        </p>
      </div>
    </div>
  </div>
</div>

<?php include('templates/part_contact.php'); ?>
