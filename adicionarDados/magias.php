<?php

    include 'db.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       

        for ($i = 0; $i < 80; $i++) {
            $magia[$i] = $_POST["magia$i"];
        }
        
     $sql =   "INSERT INTO truques (linha_1, linha_2, linha_3, linha_4, linha_5, linha_6, linha_7, linha_8)
        VALUES ('$magia[0]', '$magia[1]', '$magia[2]', '$magia[3]', '$magia[4]', '$magia[5]', '$magia[6]', '$magia[7]');

        INSERT INTO pri_circulo (pri_linha_1, pri_linha_2, pri_linha_3, pri_linha_4, pri_linha_5, pri_linha_6, pri_linha_7, pri_linha_8)
        VALUES ('$magia[8]', '$magia[9]', '$magia[10]', '$magia[11]', '$magia[12]', '$magia[13]', '$magia[14]', '$magia[15]');

        INSERT INTO seg_circulo (seg_linha_1, seg_linha_2, seg_linha_3, seg_linha_4, seg_linha_5, seg_linha_6, seg_linha_7, seg_linha_8)
        VALUES ('$magia[16]', '$magia[17]', '$magia[18]', '$magia[19]', '$magia[20]', '$magia[21]', '$magia[22]', '$magia[23]');

        INSERT INTO ter_circulo (ter_linha_1, ter_linha_2, ter_linha_3, ter_linha_4, ter_linha_5, ter_linha_6, ter_linha_7, ter_linha_8)
        VALUES ('$magia[24]', '$magia[25]', '$magia[26]', '$magia[27]', '$magia[28]', '$magia[29]', '$magia[30]', '$magia[31]');

        INSERT INTO quar_circulo (quar_linha_1, quar_linha_2, quar_linha_3, quar_linha_4, quar_linha_5, quar_linha_6, quar_linha_7, quar_linha_8)
        VALUES ('$magia[32]', '$magia[33]', '$magia[34]', '$magia[35]', '$magia[36]', '$magia[37]', '$magia[38]', '$magia[39]');

        INSERT INTO quin_circulo (quin_linha_1, quin_linha_2, quin_linha_3, quin_linha_4, quin_linha_5, quin_linha_6, quin_linha_7, quin_linha_8)
        VALUES ('$magia[40]', '$magia[41]', '$magia[42]', '$magia[43]', '$magia[44]', '$magia[45]', '$magia[46]', '$magia[47]');

        INSERT INTO sext_circulo (sext_linha_1, sext_linha_2, sext_linha_3, sext_linha_4, sext_linha_5, sext_linha_6, sext_linha_7, sext_linha_8)
        VALUES ('$magia[48]', '$magia[49]', '$magia[50]', '$magia[51]', '$magia[52]', '$magia[53]', '$magia[54]', '$magia[55]');

        INSERT INTO set_circulo (set_linha_1, set_linha_2, set_linha_3, set_linha_4, set_linha_5, set_linha_6, set_linha_7, set_linha_8)
        VALUES ('$magia[56]', '$magia[57]', '$magia[58]', '$magia[59]', '$magia[60]', '$magia[61]', '$magia[62]', '$magia[63]');

        INSERT INTO oitavo_circulo (oitavo_linha_1, oitavo_linha_2, oitavo_linha_3, oitavo_linha_4, oitavo_linha_5, oitavo_linha_6, oitavo_linha_7, oitavo_linha_8)
        VALUES ('$magia[64]', '$magia[65]', '$magia[66]', '$magia[67]', '$magia[68]', '$magia[69]', '$magia[70]', '$magia[71]');

        INSERT INTO nono_circulo (nono_linha_1, nono_linha_2, nono_linha_3, nono_linha_4, nono_linha_5, nono_linha_6, nono_linha_7, nono_linha_8)
        VALUES ('$magia[72]', '$magia[73]', '$magia[74]', '$magia[75]', '$magia[76]', '$magia[77]', '$magia[78]', '$magia[79]');";

       
        
        if ($conn->multi_query($sql) === true) {
            echo "Novo registro criado com sucesso.";
        } else {
            echo "Erro " . $sql . '<br>' . $conn->error;
        }
        $conn->close();

    }
