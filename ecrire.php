function ecrire($fichier,$texte)
{
$fp = fopen ($fichier, "r+");  
$buffer = fgets ($fp, 11);  
$buffer = $texte;
fseek ($fp, 0);  
fputs ($fp, $buffer);  
fclose ($fp);
return 0;  
}

