<?php
function Get_Result(){
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=data_F1;charset=utf8','user','123456789');
    }
    catch (Exception $error)
    {
        die('Error : ' . $error->getMessage());
    }

    $action = $db->query("
    SELECT NomPil, resultat.NoPil as 'Pil', NomTV,NomGP, Place, PtObt
    FROM resultat
        inner join pilote p
            on resultat.NoPil = p.NoPil
        inner join typevoiture tp
            on p.NoTV = tp.NoTV
        inner join grandprix gp
        on resultat.NoGP = gp.NoGP
    order by NomGP");

    $result=[];
    foreach ($action as $key) {
        $res= [
            'NomPil' => $key['NomPil'],
            'NoPil' => $key['Pil'],
            'NomTV' =>$key['NomTV'],
            'NomGP' => $key['NomGP'],
            'Place' => $key['Place'],
            'PtObt' => $key['PtObt']
        ];
        $result[]=$res;
    };
    return $result;
}