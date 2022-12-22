<?php require('../components/header.php') ?>

<div class="body">
    <img src="../assets/oralCare.svg" alt="" class="body__img">
    <section class="body__section">
        <h1>No dudes en contactarme</h1>
        <p>*Este es un website de muestra, sin embargo no dudes en llenar el formulario para contactarte conmigo,
            el mensaje llegará a mi correo real*</p>

        <form class="body__section_form" action="https://formsubmit.co/pecrash12@gmail.com" method="POST">
            <input type="text" class="body__section_form-box" name="name" required>
            <label for="" class="body__section_form-label">
                <span>Tu Nombre</span>
            </label>

            <input type="text" class="body__section_form-box" name="phone" required>
            <label for="" class="body__section_form-label">
                <span>Número de Teléfono</span>
            </label>

            <input type="text" class="body__section_form-box" name="email" required>
            <label for="" class="body__section_form-label">
                <span>Correo</span>
            </label>

            <textarea class="body__section_form-box message" name="subject" required></textarea>
            <label for="" class="body__section_form-label message">
                <span>Mensaje</span>
            </label>

            <div class="body__section_form-submit">
                <input type="submit" class="body__section_form-submit-btn">
            </div>

            <input type="hidden" name="_next" value="http://localhost:8080/layout/formulario.php">
            <input type="hidden" name="_captcha" value="false">
            <input type="hidden" name="_template" value="box">
        </form>
    </section>
</div>

<?php require('../components/footer.php') ?>