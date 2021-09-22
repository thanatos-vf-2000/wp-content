<?php // custom WordPress database error page wpchannel.com
 header('HTTP/1.1 503 Service Temporarily Unavailable');
 header('Status: 503 Service Temporarily Unavailable');
 header('Retry-After: 3600'); // 1 hour = 3600 seconds
 mail("vanhoucke.franck@free.Fr", "Database Bug", "Le site rencontre des soucis techniques (MySQL).", "From: WordPress");

?>
<!DOCTYPE HTML>
<html dir="ltr" lang="fr-FR">
 <head>
 <title>503 Service Temporarily Unavailable</title>
 <style type="text/css">
 h1, p {
 font-family: Helvetica, sans-serif;
 font-size: 24px;
 color: #333;
 }
 p {
 font-size: 14px;
 }
 </style>
 </head>
 <body>
 <h1>C'est quoi ce bug ???</h1>
 <p>Bon ok, j'ai bidouillé ma base de données et j'ai planté le site... pas de soucis, le problème n'est que temporaire ! Ou alors, mon hébergeur rencontre quelques bugs... allez savoir pourquoi !</p>
 </body>
</html>