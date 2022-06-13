<?php
                                                        //FOR

for ($i = 0; $i <= 1000; $i += 5) {
    
    if ($i > 200 && $i < 800) continue; // if em linha não precisa de chaves

    if ($i === 900) break;

    echo $i . "<br>";

} 


?>