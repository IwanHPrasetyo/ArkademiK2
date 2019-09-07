<?php

function json(){
    $biodata    = [
                "name"          => "Iwan Hadi Praseyo",
                "age"           => 23,
                "addres"        => "Jl.Kemantren 1 Kota Malang",
                "hobbies"       => "Reading",
                "is_married"    => false,
                "list_school"   => [
                                                 "name"     => "Universitas Kanjuruhan Malang",
                                                 "year_in"  => "2014",
                                                 "year_out" => "2018",
                                                 "major"    => "Sistem Informasi"],
                "skill"          => [
                                                 "Beginner" => "PHP",
                                                 "Advanced" => "JAVA",
                                                 "Expert"   => null],
                "interest_in_coding" => true
              
                    ];

                return json_encode($biodata);
}

echo json();

?>