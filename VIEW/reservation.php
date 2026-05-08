

<section class="sectionForm">
    <article>
        <form method="post" action="../CONTROLLER/traitementReservation.php" enctype="multipart/form-data">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" placeholder="Ex : Marie-Antoinette">
            <?php echo isset($errors["nom"]) ? $errors["nom"] : ""; ?>

            <label for="mail">Email :</label>
            <input type="text" id="mail" name="mail" placeholder="Ex : Marie15@outlook.be">
            <?php echo isset($errors["mail"]) ? $errors["mail"] : ""; ?>

            <label for="nombrePersonnes">Nombre de Personnes (max 20) :</label>
            <input type="number" id="nombrePersonnes" name="nombrePersonnes">
            <?php echo isset($errors["nombrePersonnes"]) ? $errors["nombrePersonnes"] : ""; ?>

            <label for="dateReservation">Date :</label>
            <input type="date" id="dateReservation" name="dateReservation">
            <?php echo isset($errors["dateReservation"]) ? $errors["dateReservation"] : ""; ?>


            <label for="messageReservation">Message (optionnel) :</label>
            <textarea id="messageReservation" name="messageReservation" placeholder="Pour vos demandes"></textarea>

            <input type="submit" value="Valider">

        </form>
    </article>
</section>
