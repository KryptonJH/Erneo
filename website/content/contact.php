<div class="contact-bg">
    <!-- <div class="container d-flex flex-column align-items-center">

        <h2>Contactez-nous</h2>
        <div class="contact-form-ctn d-flex justify-content-center p-5 w-50">
            <form class="contact-form w-100">

                <label class="lbl-contact mt-2 mb-2">Nom <span class="contact-star">*</span></label>
                <input class="input-name mt-2 mb-2" type="text" name="name" required>

                <label class="lbl-contact mt-2 mb-2">Adresse e-mail <span class="contact-star">*</span></label>
                <input class="input-email mt-2 mb-2" type="text" name="email" required>

                <label class="lbl-contact mt-2 mb-2">Objet <span class="contact-star">*</span></label>
                <input class="input-subject mt-2 mb-2" type="text" name="subject" required>

                <label class="lbl-contact mt-2 mb-2">Message <span class="contact-star">*</span></label>
                <textarea class="txtArea-message mt-2 mb-2"></textarea>

                <button class="contact-submit">Envoyer</button>

                <div class="contact-required d-flex justify-content-end">
                    <p><span class="contact-star">*</span> Champ requis</p>
                </div>
            </form>
        </div>
    </div>
</div> -->

    <div class="container d-flex justify-content-center">
        <div class="d-flex flex-column w-100 align-items-center">
            <h2>Contactez-nous</h2>
            <div class="contact-form-ctn p-5 d-flex justify-content-center w-50">
                <form action="<?= PATH_CONTENT ?>/contact.php" method="POST" class="form w-75">
                    <div class="form-group">
                        <label for="name" class="form-label">Votre nom</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Votre nom" tabindex="1" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Votre email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Votre adresse email" tabindex="2" required>
                    </div>
                    <div class="form-group">
                        <label for="subject" class="form-label">Objet</label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Objet" tabindex="3" required>
                    </div>
                    <div class="form-group">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Message" tabindex="4" required></textarea>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="contact-map w-100 mt-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2888.6635559442534!2d3.9092850510648316!3d43.613546362909496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b6a583fe267931%3A0xe80cfed499eb26e3!2sERNEO!5e0!3m2!1sfr!2sfr!4v1618389600004!5m2!1sfr!2sfr" class="w-100" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>