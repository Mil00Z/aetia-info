<section id="form-section" class="container-fluid logiciels">

    <div class="container">


        <div class="col-sm-6 col-sm-offset-3 form-box">

            <div class="form-header">

                    <h1>Contactez-nous !</h1>

                     <div class="form-header-icon">
                    <i class="fa fa-envelope"></i>
                </div>

            </div>

            <div class="form-bottom contact-form">

                <form role="form" action="form-test.php" method="post">

                    <div class="form-group">
                        <label class="sr-onl" for="contact-nom">Nom</label>
                        <input type="text" name="nom"  required placeholder="Votre nom" class="contact-nom form-control" id="contact-nom">
                    </div>

                    <div class="form-group">
                        <label class="sr-onl" for="contact-entreprise">Société</label>
                        <input type="text" name="entreprise"  required placeholder="Votre société" class="contact-entreprise form-control" id="contact-entreprise">
                    </div>

                    <div class="form-group">
                        <label class="" for="contact-email">Email</label>
                        <input type="text" name="email"  required placeholder="Votre adresse mail" class="contact-email form-control" id="contact-email">
                    </div>

                    <div class="form-group">
                        <label class="sr-onl" for="contact-tel">Téléphone</label>
                        <input type="tel" name="tel"  required placeholder="Votre téléphone" class="contact-tel form-control" id="contact-tel">
                    </div>

                    <div class="form-group">
                        <label class="sr-onl" for="contact-ville">Ville</label>
                        <input type="text" name="ville"  required placeholder="Votre ville" class="contact-ville form-control" id="contact-ville">
                    </div>

                    <div class="form-group">
                        <label class="sr-onl" for="contact-zipcode">Code postal</label>
                        <input type="text" name="zipcode" required min="01500" max="98834" placeholder="Code postal" class="contact-zipcode form-control" id="contact-zipcode">
                    </div>

                    <div class="form-group">
                        <label class="sr-onl" for="contact-subject">Sujet </label>
                        <input type="text" name="sujet" required placeholder="Le sujet" class="contact-subject form-control" id="contact-sujet">
                    </div>

                    <div class="form-group">
                        <label class="sr-onl" for="contact-message">Message</label>
                        <textarea name="message" required placeholder="Votre message" class="contact-message form-control" id="contact-message" rows="5" ></textarea>
                    </div>
                    <button type="submit" class="btn link_cta">Envoyer !</button>
                </form>

            </div>

        </div>

    </div>

</section>