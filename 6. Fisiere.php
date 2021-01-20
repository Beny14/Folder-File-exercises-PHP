<?php
// ............ 1 ...........
    // Accesarea fisierului
    // Literele:
    // "w" - înseamnă că dorim să creăm un fișier
    // "r" - înseamnă că dorim să citim din fișier
    // "a" - înseamnă că dorim să scriem într-un fișier care există deja

    // fopen("proba.txt", "w");

// ............ 2 ...........
    // In acest mod inchidem un fisier
    // $fh = fopen("proba.txt", "w");

    // fclose($fh);

// ............ 3 ........... V1
    // In acest mod scriem intr-un fisier

    // $fh = fopen("proba.txt", "w");
    // fwrite($fh, "text de proba");
    // fclose($fh);

// ............ 3 ........... V2

    // $fisierul = "proba.txt";
    // $textul = "text de proba";
    // $fh = fopen($fisierul, "w");
    // fwrite($fh, $textul);
    // fclose($fh);

// ............ 3 ........... V3
/*
    $orase = array("Bucuresti", "Paris", "Londra");
    $text = "<?xml version=\"1.0\" encoding=\"utf-8\" ?>\r\n ";
    $text .= "<root>\r\n ";
        for($i = 0; $i < sizeof($orase); $i++){
            $text .= "<oras>".$orase[$i]."</oras>\r\n ";
        }
    $text .= "<root>";

    $fh = fopen("proba.xml", "w");
    fwrite($fh, $text);
    fclose($fh);
*/
// ............ 4 ........... 
// Citirea din fisiere

    // $fh = fopen("proba.txt", "r");
    // $text = fread($fh, filesize("proba.txt"));
    // fclose($fh);
    // echo $text;

// ............ 5 ........... 
// Stergerea fisierelor

    // unlink("proba.xml");

// ............ 6 ........... 
// Crearea unui director

    // mkdir("probaDir");

// ............ 7 ........... 
// Stergerea unui director

    // rmdir("probaDir");

// ............ 8 ........... 
// Citirea fisierelor din foldere

    // $dh = opendir("./");
    // $fisier = readdir($dh);
    // while (false !== $fisier){
    //     echo " " . $fisier;
    //     $fisier = readdir($dh);
    // }

// ............ 9 ........... 
// Putem de asemenea să manipulăm tcp sockets, la fel ca și în cazul fișierelor

    // $fp = fsockopen("www.google.com", 80);
    // fputs($fp, "GET /index.php HTTP/1.1\r\n ");
    // fputs($fp, "Host: www.google.com\r\n ");
    // fputs($fp, "Connection: close\r\n\r\n ");
    
    // while(!feof($fp)){
    //     echo fgets($fp);
    // }
    // fclose($fp);
?>