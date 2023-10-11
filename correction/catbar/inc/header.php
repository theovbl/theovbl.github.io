<nav>
    <span><box-icon type='solid' name='cat' animation='tada-hover'></box-icon> Chat Peau De paille</span>
    <ul>
        <li><a href="support.php">Support</a></li>
        <?php if ($_GET['page'] !== "login") : ?>
        <li><a href="login.php"> <?php echo !empty($_SESSION) ? 'Se Déconnecter' : "S'identifier"?></a></li>
        <?php endif; ?>

        <?php if (!empty($_SESSION)) : ?> 
            <?php if ($_SESSION['role'] >= 3) : ?>
                <li><a href="paneladmin.php">Panneau Admin</a></li>
            <?php else :?>
                <li><a href="profil.php">Profile</a></li>
            <?php endif; ?>
        <?php endif; ?>
       
    </ul>
</nav>
<!-- 
    traduction
if (pas vide) {
    if (toi plus grand que ou égal à 3) {
        admin
    } else {
        profile
    }
} ou  ouverture php if (!empty($_SESSION) && $_SESSION['role'] >= 3) : fermeture php // Si empty n'est pas vide dans session et je recupère ce qu'il y a dans role qui est supérieur ou égal à 3 alors il pourra suivre le lien ( : sert à convertir en html) 
<li><a href="paneladmin.php">Panneau Admin</a></li> 
et ouverture php endif; fermeture php
-->

