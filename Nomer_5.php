<?php 


//mencari huruf vokal a,i,u,e,o dengan menggunakan regex

function huruf_hidup($kalimat) {

return preg_match_all('/[aiueo]/i',$kalimat);

}
echo huruf_hidup("Saya Programer");

?>