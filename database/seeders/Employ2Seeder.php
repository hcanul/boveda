<?php

namespace Database\Seeders;

use App\Models\Employ2;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Employ2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['WILLIAM MIGUEL', 'CAUICH TUYUB', '1975-04-16', 'Masculino', '(983) 106-5737', 1, '0216052022236', '58 X 89 COL EMILIANO ZAPATA CP 77229 NULL', 1, 'CATW-750416-DR1', '30-04-7500-845', '2021-04-06', NULL, 'COMERCIAL', 'COORDINADOR', 'BLOQUEADO'],
            ['EDWIN  EDGAR', 'POOL CHI', '1984-09-04', 'Masculino', '(983) 838-9117', 3, '0215071962880', '79 X 48 COL PLAN DE AYALA CP 77214 NULL', 1, 'POCE-840904-79A', '82-06-8403-847', '2021-07-16', NULL, 'COMERCIAL', 'ASESOR', 'ACTIVO'],
            ['MARTHA PATRICIA', 'ARANA MARTINEZ', '1991-05-08', 'Femenino', '(983) 809-6420', 1, '0215085056883', 'C 44 X 89 Y 91  COL PLAN DE AYALA', 1, 'AAMM-910508-MQ', '82089128803', '2021-04-05', NULL, 'Comercial', 'GERENTE','ACTIVO'],
            ['HUGO PAULINO', 'CANUL ECHAZARRETA', '1982-01-26', 'Masculino', '(983) 111-4164', 99, '1234567890', 'CALLE 77 ESQ. CALLE 80 COL. JESUS MARTINEZ ROSS', 1, 'CAEH-820126-5U9', '82-01-2398', '2022-01-03', NULL, 'INFORMATICA', 'INFORMATICA','ACTIVO'],
            ['JUAN CARLOS', 'CAAMAL CANO', '1998-07-08', 'Masculino', '(983) 106-3414', 6, '0217106699939', '76 X 99 Y 101 COL EMILIANO ZAPATA 76 X 99 Y 101 COL EMILIANO ZAPATA', 1, 'CACJ-980708-BF0', '20-16-9853-106', '2022-01-04', '2022-01-04', 'COMERCIAL', 'ASESOR', 'ACTIVO'],
            ['MANUEL JESUS ', 'YEH CHI', '1988-01-01', 'Masculino', '(983) 700-4259', 7, '0218074854212', 'CALLE 62 X 89 COL LEONA VICARIO', 1, 'YECM-880101-N17', '82-06-8844-123', '2022-07-12', '2022-07-12', 'COMERCIAL', 'ASESOR', 'BLOQUEADO'],
            ['DARWIN OCTAVIO', 'GARCIA CHI', '1996-09-22', 'Masculino', '(984) 165-2294', 8, '0245104366363', 'DOMICILIO CONOCIDO UH-MAY DOMICILIO CONOCIDO UH-MAY', 1, 'GACD-960922-3S0', '46-16-9621-375', '2022-08-08', '2022-08-08', 'COMERCIAL', 'ASESOR', 'BLOQUEADO'],
            ['OSWALDO GIOVANY', 'LARA HERNANDEZ', '1983-11-19', 'Masculino', '(983) 121-9101', 8, '1220053007668', 'C 62 X 67 Y 69 COL CENTRO FELIPE CARRILLO PUERTO C 62 X 67 Y 69 COL CENTRO FELIPE CARRILLO PUERTO', 1, 'LAHO-831119-BC8', '00-00', '2022-09-19', '2022-09-19', 'COMERCIAL', 'ASESOR', 'ACTIVO']
        ];
        foreach ($data as $key => $value) {
            Employ2::create([
                'name'=> $value[0],
                'lastname'=> $value[1],
                'birthdate'=> $value[2],
                'gender'=> $value[3],
                'phone'=> $value[4],
                'bio_id'=> $value[5],
                'numIne'=> $value[6],
                'direccion'=> $value[7],
                'city_id'=> $value[8],
                'rfc'=> $value[9],
                'imss'=> $value[10],
                'fechaIni'=> $value[11],
                'fechaFin'=> $value[12],
                'departamento'=> $value[13],
                'cargo'=> $value[14],
                'activo'=> strtoupper($value[15]),
            ]);
        }

    }
}
