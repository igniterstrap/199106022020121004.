<?php
// array multi-dimensi
$array = Array (
    "0" => Array (
        "id" => "USER1",
        "Nama" => "Ronald",
        "Kantor" => "Pengadilan"
    ),
    "1" => Array (
        "id" => "USER2",
        "Nama" => "Rinaldi",
        "Kantor" => "Tata Usaha"
    ),
    "2" => Array (
        "id" => "USER3",
        "Nama" => "Wairo",
        "Kantor" => "Negara Jayapura"
    )
);

// encode array to json
$json = json_encode(array('data_rekrutmen' => $array));

// write json to file
if (file_put_contents("data_rekrutmen.json", $json)){
    echo "File JSON Data Rekrutmen = <a href='data_rekrutmen.json'>data_rekrutmen.json</a>";
} else {
    echo "Oops! Terjadi error saat membuat file JSON...";
}
?>

<br/>
<br/>

<?php
// array multi-dimensi
$array = Array (
    "0" => Array (
        "id" => "USER1",
        "Nama" => "Ronald",
        "Kantor" => "Pengadilan"
    ),
    "1" => Array (
        "id" => "USER2",
        "Nama" => "Rinaldi",
        "Kantor" => "Tata Usaha"
    ),
    "2" => Array (
        "id" => "USER3",
        "Nama" => "Wairo",
        "Kantor" => "Negara Jayapura"
    )
);

// encode array to json
$json = json_encode(array('data_attribut' => $array));

// write json to file
if (file_put_contents("data_attribut.json", $json)){
    echo "File JSON Data Attribut = <a href='data_attribut.json'>data_attribut.json</a>";
} else {
    echo "Oops! Terjadi error saat membuat file JSON...";
}
?>