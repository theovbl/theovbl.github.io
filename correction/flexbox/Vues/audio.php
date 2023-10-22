<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../flexbox/css.css">
    <title>Audio</title>
</head>


<body>
<nav>
<span>Flexbox</span>
        <ul>
            <li><a href="audio.php">Audio</a></li>
            <li><a href="video.php">Vidéo</a></li>
            <li><a href="image.php">Image</a></li>
        </ul>
</nav>    
<br><br><br><br><br>
<div class="audio">
<p>La Balise &lt;audio&gt;: Le son sur une page html</p><br>
<p>C'est avec l'attribut src que l'on indique le chemin vers le fichier voulu.</p><br>
<p> &lt;audio controls&gt; </p>
<p>&lt;source src="monAudio.mp3" type="audio/mpeg"&gt;</p>
<p>&lt;source src="monAudio.ogg" type="audio/ogg"&gt;</p>

&lt;p&gt;Votre navigateur ne prend pas en charge l'audio HTML.
Voici un un &lt;a href='myAudio.mp4'>lien vers le fichier <br>
audio &lt;/a&gt; pour le télécharger &lt;p&gt;<br><br>&lt;/audio&gt;
</div>

<audio controls class="audio">
  <source src="http://51.210.14.228/music/music2.mp3" type="audio/mpeg">
</audio>

</body>
</html>