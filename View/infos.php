<div class="panel" data-x-pos="0"  data-y-pos="-1">
    <div class="headframe">
        <div class="head-l">
            <div class="socialg">
                <div class="socialf"><a href="https://www.facebook.com/entraideetculture/" class="social"><img src="View/img/facebook.png" alt="facebook"/></a></div>

            </div>
            <span class="panel__zoom1 js-zoom">
                    <div class="cercle1">
                       <div class="logo1"><img src= "View/img/logo-without.png" alt=""/></div>
                    </div>
                </span>
        </div>
        <div style="padding:20px;" class="formulaire">
            <div class="box">
                <div class="container-1">
                    <span class="icon"><i class="fa fa-search"></i></span>
                    <input type="search" id="search" placeholder="Rechercher..." />
                </div>
            </div>
        </div>
        <div class="head_T">
            <h1>infos pratiques</h1>
            <div class="zoom_link"><span class="panel__zoom js-zoom">entraide & culture</span></div>
        </div>
        <nav class="main-nav">
            <ul>
                <li>
                           <span class="panel__nav panel__nav--up js-up">
                              <div class="smile"><img src="View/img/smile.png" alt="" width="31"/></div>
                              <div class="line">accueil</div>
                           </span>
                </li>
                <li>
                           <span class="panel__nav panel__nav--up moveDownc">
                              <div class="visit"><img src="View/img/visit.png" alt="" width="35"/></div>
                              <div class="line">presentation</div>
                           </span>
                </li>
                <li>
                           <span class="panel__nav panel__nav--up jsupc">
                              <div class="whee"><img src="View/img/wheelses.png" alt="" width="32"/></div>
                              <div class="line">ancrage local</div>
                           </span>
                </li>
                <li>
                           <span class="panel__nav panel__nav--left-top js-up js-left" onclick="texts(event, 'Entraide')">
                              <div class="hands"><img src="View/img/hands.png" alt="" width="33"/></div>
                              <div class="line">entraide</div>
                           </span>
                </li>
                <li>
                           <span class="panel__nav panel__nav--right-top js-up js-right" onclick="text(event, 'Culture')">
                              <div class="glasses"><img src="View/img/glasses.png" alt="" width="34"/></div>
                              <div class="line">culture</div>
                           </span>
                </li>
                <li>
                           <span class="panel__nav panel__nav--up jsupd">
                              <div class="arbo"><img src="View/img/arbo.png" alt="" width="33"/></div>
                              <div class="line">asbl mapping</div>
                           </span>
                </li>
                <li>
                           <span class="panel__nav panel__selected">
                              <div class="location"><img src="View/img/location.png" alt="" width="33"/></div>
                              <div class="line">infos pratiques</div>
                           </span>
                </li>
            </ul>
        </nav>
    </div>
    <!---------------conteneur infos pratiques------------------->
    <div id="conteneur">
            <div class=column_A_accueil>
                <div class="rowmap">
                    <div class="col-lg-4 col-md-4 padbot30">
                        <div id="map">
                            <iframe height="300" style="border:none; scrolling:no; marginheight:0; marginwidth:0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26448.534201747054!2d-118.24590761238238!3d34.042158170531856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos+Angeles%2C+California%2C+Stati+Uniti!5e0!3m2!1sit!2sit!4v1422286433932">
                            </iframe>
                        </div>
                    </div>
                </div>

        <div class=column_A>
            <div class="padbot30">
                <div class="clients_description">
                    <div class="blocPartenaires">
                        <div class="titlePartenaires">nos partenaires</div>
                        <div class="titrePartenaires">
                            <h3></h3>
                        </div>
                        <br>
                        <div class="textePartenaires">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>   </div>
            <div class=column_B_accueil style="overflow: auto;
                 height: 100px;">

                <div id="myDIVentraide"></div>
                <div class="mainTexte">
                    <p>ASBL FONDÉE EN 1983 APPORTE UNE AIDE ET </br> UN SOUTIEN À UN PUBLIC PRÉCARISÉ ET FRAGILISÉ.</p>
                </div>
                <div class="formeinfo1">
                    <div class="col-lg-4 col-md-4 padbot30 our_office_wrap">
                        <div id="contact-form">
                            <div id="sendmessage">Votre message a été bien envoyé. Merci!</div>
                            <form class="contactForm" action="contact/contact.php" method="post" >
                                <div class="form-group">
                                    <input id="name" type="text" name="name" placeholder="Nom" data-rule="maxlen:4" data-msg="SVP, entrer minimun 4 charactères" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <input id="email" type="email" name="email" placeholder="E-mail" data-rule="email" data-msg="Votre e-mail" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" placeholder="Message" data-rule="required" data-msg="SVP, écrire votre message"></textarea>
                                    <div class="validation"></div>
                                </div>
                                <button type="submit">Envoyer message</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="formeinfo2">
                    <section id="contacts">
                        <!-- Container contacts -->
                        <div class="adresse">
                            <div class="page_title center">
                            </div>
                            <!-- Row -->

                            <div class="col-md-4 padbot30 our_office_wrap">
                                <h6>Notre location</h6>
                                <p>Avenue Van Volxem,<br>525 à 1190 Forest</p>
                                <p>E-mail : secretariat@entraideetculture.be</p>
                                <p>Tél. : 02 539 43 60</p>
                                <p>Fax : 02 539 43 70</p>
                                <h6>Réseau social</h6>
                                <div class="social">
                                    <a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                </div>
                            </div>

                        </div>
                        <!-- //Row -->
                </div>
        <div class=column_Binfo style="
             grid-column: 1/3;
                margin-top: 45px;
                ">
            <div class="titleInfo">Nos partenaires</div>
            <div class="padbot30">
                <div class="row clients_wrap">
                    <div class="col-lg-6 col-md-6 col-sm-4 col-xs-6 padbot10">
                        <a class="client_logo" href="http://www.actiris.be/tabid/173/language/fr-BE/A-propos-d-Actiris.aspx" target="_blank"><img src="img/AC.png" alt="" /></a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-4 col-xs-6 padbot10">
                        <a class="client_logo" href="https://www.spfb.brussels/" target="_blank"><img src="View/img/CO.png" alt="" /></a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-4 col-xs-6 padbot10">
                        <a class="client_logo" href="http://www.federation-wallonie-bruxelles.be/" target="_blank"><img src="View/img/BE.png" alt="" /></a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-4 col-xs-6 padbot10">
                        <a class="client_logo" href="http://www.forest.irisnet.be/" target="_blank"><img src="View/img/FR.png" alt="" /></a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-4 col-xs-6 padbot10">
                        <a class="client_logo"href="http://www.one.be/" target="_blank"><img src="View/img/NE.png" alt="" /></a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-4 col-xs-6 padbot10">
                        <a class="client_logo" href="https://ec.europa.eu/" target="_blank"><img src="View/img/EU.png" alt="" /></a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-4 col-xs-6 padbot10">
                        <a class="client_logo" href="http://www.cpasforest.irisnet.be/" target="_blank"><img src="View/img/CP.png" alt="" /></a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-4 col-xs-6 padbot10">
                        <a class="client_logo" href="http://www.lire-et-ecrire.be/bruxelles" target="_blank"><img src="View/img/LE.png" alt="" /></a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-4 col-xs-6 padbot10">
                        <a class="client_logo" href="https://www.mi-is.be/fr" target="_blank"><img src="View/img/INT.png" alt="" /></a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-4 col-xs-6 padbot10">
                        <a class="client_logo" href="http://www.foodbank-brabant.be/" target="_blank"><img src="View/img/FD.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
                <!---------------END conteneur infos pratiques------------------->
            </div>
    </div>


