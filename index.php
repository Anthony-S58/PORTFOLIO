<!DOCTYPE html>
<html lang="Fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>MON PORTFOLIO</title>
  </head>

  <body>
    <!-- HEADER -->
    <header id="header">
      <div class="head">
        <div class="logo"><span>A</span>nthony <span>S</span>IMONNEAU</div>
        <!-- <button><a href="#about">A Propos</a></button>
        <button><a href="#projet">Mes Projets</a></button>
        <button><a href="#parcours">Mon Parcours</a></button>
        <button><a href="#contact">Contact</a></button> -->
      </div>
    </header>

    <!-- SECTION NOM ET PRENOM -->

    <section id="name">
      <div class="name container">
        <div>
          <h1>Bonjour,</h1>
          <h1>Je suis</h1>
          <h1 class="typing">Anthony SIMONNEAU</h1>
          <br />
          <h2>Développeur web et web mobile junior</h2>
          <br />
          <a href="#" type="button" class="btn">Portfolio</a>
          <div class="img">
            <a href="https://www.facebook.com" target="_blank"
              ><img
                src="IMG/facebook-circular-logo.png"
                height="50px"
                width="50px"
            /></a>
            <a href="https://www.linkedin.fr" target="_blank"
              ><img src="IMG/linkedin.png" height="50px" width="50px"
            /></a>
            <a href="https://github.com/Anthony-S58" target="_blank"
              ><img src="IMG/github.png" height="50px" width="50px"
            /></a>
            <a href="https://api.slack.com/" target="_blank"
              ><img src="IMG/slack.png" height="50px" width="50px"
            /></a>
          </div>
        </div>
      </div>
    </section>

    <!-- FIN SECTION NOM ET PRENOM -->

    <!-- A PROPOS -->

    <section id="about">
      <div class="portrait">
        <img
          src="IMG/portrait.jpg"
          alt="image portrait"
          height="450px"
          width="350px"
        />
      </div>

      <div class="texte">
        <h2>A propos</h2>

        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit,
          laboriosam mollitia impedit quam necessitatibus quo eos asperiores,
          sed officia repellendus, veniam quibusdam ea animi magnam commodi
          adipisci delectus numquam aut.
        </p>

        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis
          similique inventore assumenda neque velit nostrum consequuntur
          praesentium facilis sapiente. Consequuntur necessitatibus molestias
          deleniti eveniet ratione sint blanditiis iste cumque nam.
        </p>
      </div>
    </section>

    <!-- MES SKILLS -->

    <div class="skills">
      <img src="IMG/html_seul.png" height="90px" width="90px" />
      <img src="IMG/css_seul.png" height="90px" width="90px" />
      <img src="IMG/js_seul.png" height="90px" width="90px" />
      <img src="IMG/php_seul.png" height="90px" width="90px" />
      <img src="IMG/mysql_seul.png" height="90px" width="90px" />
      <img src="IMG/ps.png" height="90px" width="90px" />
      <img src="IMG/ai.png" height="90px" width="90px" />
      <img src="IMG/figma.png" height="90px" width="90px" />
      <img src="IMG/wordpress.png" height="90px" width="90px" />
      <img src="IMG/secnum.png" height="90px" width="90px" />
    </div>

    <!-- FIN SECTION A PROPOS ET MES SKILLS -->

    <!-- MES PROJETS -->

    <section id="projet">
      <br />
      <h2>Mes Projets</h2>
      <br /><br /><br /><br />

      <?php
      include('database.php');
      ?>

      <?php
      $reponse = $bdd->query("SELECT * FROM uploadprojet WHERE Afficher = 'oui'");
      ?>


      <?php

            while ($donnees = $reponse ->fetch()) {

        ?>

            <div class="projets">
                                
                <div class="flip-box">
                    <div class="flip-box-inner">
                        <div class="flip-box-front" style="background-image:url(IMG/<?php echo $donnees['Image']?>)"></div>         
                            <div class="flip-box-back">
                                <h3><?php echo $donnees['Nom'].'</h3><br>'?><br>
                                <p><?php echo $donnees['Description']?></p><br>
                                <a href="<?php echo $donnees['Lien']?>" target="_blank"><button>Visiter</button></a>
                            </div>
                    </div>
                </div>
            </div>
            

        <?php
        }
        ?>
      <!-- <div class="projets">
        <div class="flip-box">
          <div class="flip-box-inner">
            <div class="flip-box-front1">
            </div>
            <div class="flip-box-back">
              <h3>Reproduire une maquette</h3>
              <br />
              <p>
                Réalisation d'un site web responsive en reproduisant une
                maquette trouvée sur le web.
              </p>
              <br />
              <a
                href="https://anthonys787.promo-72.codeur.online/ACS_Projet1/"
                target="_blank"
                ><button>Visiter</button></a
              >
            </div>
          </div>
        </div>
        <div class="flip-box">
          <div class="flip-box-inner">
            <div class="flip-box-front2">
            </div>
            <div class="flip-box-back">
              <h3>Promouvoir un département</h3>
              <br />
              <p>
                Réalisation d'un site vitrine responsive afin de promouvoir une
                région ( Var ).
              </p>
              <br />
              <a
                href="https://anthonys787.promo-72.codeur.online/ACS_Projet2/"
                target="_blank"
                ><button>Visiter</button></a
              >
            </div>
          </div>
        </div>
        <div class="flip-box">
          <div class="flip-box-inner">
            <div class="flip-box-front3">
            </div>
            <div class="flip-box-back">
              <h3>Projet ampoule</h3>
              <br />
              <p>
                Réalisation d'un Dashboard responsive dans lequel on peut
                ajouter, modifier ou supprimer chaque changement d'ampoule.
              </p>
              <br />
              <a
                href="https://anthonys787.promo-72.codeur.online/ACS_Projet3/"
                target="_blank"
                ><button>Visiter</button></a
              >
            </div>
          </div>
        </div>
      </div> -->
      <br><br>
    </section>

    <!-- FIN SECTION PROJETS -->

    <!-- MON PARCOURS -->

    <br /><br />

    <section id="parcours">
      <div class="parcours">
        <h2>Mon Parcours</h2>
      </div>

      <div class="box-timeline">
        <div class="ligne"></div>

        <div class="rond r1" data-anim="1"></div>
        <div class="rond r2" data-anim="2"></div>
        <div class="rond r3" data-anim="3"></div>
        <div class="rond r4" data-anim="4"></div>
        <div class="rond r5" data-anim="5"></div>
        <div class="rond r6" data-anim="6"></div>
        <div class="rond r7" data-anim="7"></div>

        <div class="box b1" data-anim="1">
          <h2>
            2021 - Formation Developpeur web/web mobile - ONLINE FORMA PRO
          </h2>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse
            voluptas aspernatur, nostrum veritatis quasi sequi totam tempore
            obcaecati ex eveniet recusandae, ea aperiam soluta temporibus.
          </p>

          <a
            href="https://www.accesscodeschool.fr/"
            target="_blank"
            class="lien"
            >Voir le site</a
          >
        </div>

        <div class="box b2" data-anim="2">
          <h2>2019 - Conseiller développement - MGEN</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse
            voluptas aspernatur, nostrum veritatis quasi sequi totam tempore
            obcaecati ex eveniet recusandae, ea aperiam soluta temporibus.
          </p>

          <a href="https://www.mgen.fr/" target="_blank" class="lien"
            >Voir le site</a
          >
        </div>

        <div class="box b3" data-anim="3">
          <h2>2016 à 2017 - Téléconseiller CAF - ARMATIS BOURGOGNE</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse
            voluptas aspernatur, nostrum veritatis quasi sequi totam tempore
            obcaecati ex eveniet recusandae, ea aperiam soluta temporibus.
          </p>
          <a href="https://www.armatis.com/" target="_blank" class="lien"
            >Voir le site</a
          >
        </div>

        <div class="box b4" data-anim="4">
          <h2>2014 à 2015 - Gestionnaire en assurances - ASETYS</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse
            voluptas aspernatur, nostrum veritatis quasi sequi totam tempore
            obcaecati ex eveniet recusandae, ea aperiam soluta temporibus.
          </p>

          <a href="https://asetys.fr/" target="_blank" class="lien"
            >Voir le site</a
          >
        </div>

        <div class="box b5" data-anim="5">
          <h2>2010 à 2013 - Préparateur Automobile - CAREPOLIS</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse
            voluptas aspernatur, nostrum veritatis quasi sequi totam tempore
            obcaecati ex eveniet recusandae, ea aperiam soluta temporibus.
          </p>
          <a href="https://www.carepolis.com/" target="_blank" class="lien"
            >Voir le site</a
          >
        </div>

        <div class="box b6" data-anim="6">
          <h2>2009 - Téléconseiller - MTELESERVICES</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse
            voluptas aspernatur, nostrum veritatis quasi sequi totam tempore
            obcaecati ex eveniet recusandae, ea aperiam soluta temporibus.
          </p>
          <a href="#" class="lien">site fermé</a>
        </div>

        <div class="box b7" data-anim="7">
          <h2>2006 à 2010 - Hôte d'accueil - THEATRE DE DRAGUIGNAN</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse
            voluptas aspernatur, nostrum veritatis quasi sequi totam tempore
            obcaecati ex eveniet recusandae, ea aperiam soluta temporibus.
          </p>
          <a
            href="https://www.theatresendracenie.com/"
            target="_blank"
            class="lien"
            >Voir le site</a
          >
        </div>
      </div>
    </section>

    <!-- FIN SECTION MON PARCOURS -->

    <!-- CONTACT -->

    <section id="contact">
      <div class="contact">
        <br />

        <h2>Contact</h2>

        <br /><br />

        <form action="contact.php" method="POST">
          <input type="text" placeholder="veuillez entrer votre nom" name="name" required/>
          <br /><br /><br />

          <input type="email" placeholder="veuillez entrer votre mail"  name="mail" required/>
          <br /><br /><br />

          <div class="message">
            <textarea placeholder="Votre message" name="message" required></textarea>
          </div>
          <br />

          <button class="valider" type="submit" value="déclarer">
            Valider
          </button>
        </form>

        <br /><br />

        <a href="admin.php"
          ><img src="IMG/star.png" height="50px" width="50px"
        /></a>
      </div>
    </section>

    <!-- FIN SECTION CONTACT -->

    <!-- FOOTER -->

    <div class="footer">
      <p>Copyright &copy; 2021 Anthony SIMONNEAU. All Rights Reserved</p>
    </div>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.js"
      integrity="sha512-UgS0SVyy/0fZ0i48Rr7gKpnP+Jio3oC7M4XaKP3BJUB/guN6Zr4BjU0Hsle0ey2HJvPLHE5YQCXTDrx27Lhe7A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/plugins/animation.gsap.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/debug.addIndicators.js"
      integrity="sha512-mq6TSOBEH8eoYFBvyDQOQf63xgTeAk7ps+MHGLWZ6Byz0BqQzrP+3GIgYL+KvLaWgpL8XgDVbIRYQeLa3Vqu6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js"
      integrity="sha512-Q+G390ZU2qKo+e4q+kVcJknwfGjKJOdyu5mVMcR95NqL6XaF4lY4nsSvIVB3NDP54ACsS9rqhE1DVqgpApl//Q=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="main.js"></script>
  </body>

  <html></html>
</html>
