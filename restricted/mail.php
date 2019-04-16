<?php
        $arreglo[0] =  array(
            "remitente" => "elmejordobleA@gmail.com",
            "asunto" => "Trageta",
            "cuerpo" => "Disculpen se me a perdido la targeta de credito, quisiera que que la descontinuen y me den una nueva",
        );
        $arreglo[2] = array(
            "remitente" => "sinvida123@hotmail.com",
            "asunto" => "intereses",
            "cuerpo" => "tengo una duda con los intereses cobrados no se por que en unos meses me sale mas intereses cobrados de lo habitual",
        );
        $arreglo[3] = array(
            "remitente" => "elmejordobleA@yahoo.com",
            "asunto" => "Duda de targeta",
            "cuerpo" => "La pregunta que tenia que se me olvido hacerles cuando los visite es, ¿que si puedo comprar en cualquier lugar en todos tengo descuento ?",
        );
        $arreglo[4] = array(
            "remitente" => "tripleh@amzon.com",
            "asunto" => "Codigo de targeta",
            "cuerpo" => "Disculpen el codigo de mi targeta no funciona me da error en el cajero al momento de retirar dinero",
        );
        $arreglo[5] = array(
            "remitente" => "jonCEna@vitual.com",
            "asunto" => "Prestamos",
            "cuerpo" => "Hola muy buenas quisiera saber cuanto es lo maximo de dinero que ustedes pueden prestar a una persona normal y corrienite como yo"
        );
        $arreglo[6] = array(
            "remitente" => "LeoMessi@gmail.com",
            "asunto" => "Iversiones",
            "cuerpo" => "Al momento de invertir con ustedes ya me vuelvo de un solo inversionista o tengo que pasar por otros metodos",
        );
        $arreglo[7] = array(
            "remitente" => "JordiAlba@tumbler.com",
            "asunto" => "Inversiones",
            "cuerpo" => "Hace unos meses inverti con ustedes pero lo que no se y no estoy seguro es que si quiero retirar el dinero invertido ṕuedo hacerlo cuando quiera",
        );
        $arreglo[8] = array(
            "remitente" => "Paldo@liciado.com",
            "asunto" => "Ahorros",
            "cuerpo" => "Yo desde que trabajo estoy ahorrando un ustedes y no me quedo de el ahorro lo unico que no se y quisiera saber es cuanto es lo maximo a ahorrar",
        );
        $arreglo[9] = array(
            "remitente" => "jaxas@champions.com",
            "asunto" => "Targeta de credito",
            "cuerpo" => "No puedo retirar dinero por que el cajero no me reconoce la tarjeta no se si es el cajero o es la targeta tendria que ir a sus instalaciones",
        );
        $arreglo[10] = array(
            "remitente" => "residente@silencio.com",
            "asunto" => "Intereses",
            "cuerpo" => "tengo una duda es que tengo una ahorro en su banco pero no se si con cada que le vaya aumentando al ahorro va aumentando el interes",
        );
        
        $datos = json_decode($string, true);

        
?>
    <div class="tabla">
        <table id="table_id" class="table table-striped table-bordered table-responsive" cellspacing="0">
            <thead>
                <tr>
                    <th>Remitente</th>
                    <th>Asunto</th>
                    <th>Mensaje</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    foreach($arreglo as $value){
                        echo "<tr>";
                        echo "<td>".$value['remitente']."</td>";
                        $id = $value['id'];
                        echo "<td>".$value['asunto']."</td>";
                        echo "<td>".$value['cuerpo']."</td>";
                        echo "</tr>";
                    }

                ?>
            </tbody>
        </table>
    </div>
</body>
<script>
    $(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>