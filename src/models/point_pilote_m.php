<?php
function Get_Point(){
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=data_F1;charset=utf8','user','123456789');
    }
    catch (Exception $error)
    {
        die('Error : ' . $error->getMessage());
    }

    $select= $db->query("
        select NomPil,sum(PtObt) AS Points
        from resultat
            inner join pilote p
                on resultat.NoPil = p.NoPil
        group by resultat.NoPil
        order by Points desc;");
    
    $point = [];
    while ($row = $select->fetch()) {
        $element = [
            'NomPil' => $row['NomPil'],
            'Points' => $row["Points"],
        ];
        
        $point[]= $element;
    };

    return $point;
}
?>