<!-- ## Snack 1

Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema:

Olimpia Milano - Cantù | 55-60 -->



<?php

$partite = [
    
                        ["squadraDiCasa" => "Olimpia Milano",

                        "squadraOspite"=> "Cantù",

                        "puntiSquadraDiCasa"=> "55",

                        "puntiSquadraOspite"=> "60"
                        ],   

                       ["squadraDiCasa"=> "Sirio",

                            "squadraOspite"=> "Bellagio",
    
                            "puntiSquadraDiCasa"=> "45",
    
                            "puntiSquadraOspite"=> "53"
                        ],

                        ["squadraDiCasa"=> "virtus",

                        "squadraOspite"=> "real",
        
                            "puntiSquadraDiCasa"=> "45",
        
                            "puntiSquadraOspite"=> "53"
                        ],
    

                    ];
?>
    <ul>
        <?php foreach ( $partite as $partita) { ?>

            <li>
                <p>
                    <?php echo $partita['squadraDiCasa'] . ' - ' . $partita['squadraOspite']. ' : ' . $partita['puntiSquadraDiCasa'] . ' - ' . $partita['puntiSquadraOspite'];?>
                </p>

            </li>

            <?php } ?>
    </ul>
