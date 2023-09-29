<?php

namespace App\Http\Controllers;

use App\Models\SalaryEmployee;
use App\Models\SalaryPeriod;
use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;

class NominaToPdfController extends Controller
{
    protected $fpdf, $periodo;

    public function __construct()
    {
        $this->fpdf = new PDF('P', 'mm', 'LETTER');
    }

    protected function periodo($id)
    {
        $this->periodo = SalaryPeriod::find($id);

        return $this->periodo->fechaini;
    }

    public function Nomina($id, $city)
    {
        $vistaCarrillo = SalaryEmployee::join('employ2s', 'Salary_employees.employ2_id', '=', 'employ2s.id')
                                ->where('employ2s.city_id', '=', $city)->whereSalaryperiodId($id)->orderBy('Salary_employees.id', 'desc')->get();
        // dd($vistaCarrillo);
        $this->fpdf->AliasNbPages();
        $this->fpdf->SetFillColor(184, 184, 187);
        $this->fpdf->SetTextColor(64);
        $this->fpdf->SetDrawColor(0, 0, 0);
        $this->fpdf->SetLineWidth(0.3);

        $this->fpdf->Ln(20);

        $th = 9;

        foreach ($vistaCarrillo as $value) {
            $this->fpdf->AddPage();
            $col_width = $this->fpdf->GetPageWidth()/6 - 3;
            for ($i=0; $i < 2 ; $i++) {
                if ($i == 1)
                {
                    $this->fpdf->Ln(32);
                    $this->fpdf->SetFont('Arial', 'B', 12);
                    $this->fpdf->Cell(0, 10, 'CRECEIMPULSO', 0, 0, 'C');
                    $this->fpdf->Ln();
                    $this->fpdf->SetFont('Arial', 'B', 9);
                    $this->fpdf->SetFillColor(184, 188, 191);
                    $this->fpdf->Cell(63, 10, '  ', 0, 0, 'C');
                    $this->fpdf->Cell(70, 5, 'RECIBO DE NOMINA', 0, 0, 'C', 1);
                    $this->fpdf->Ln();
                    $this->fpdf->Ln();
                }
                $dato = array('NOMBRE', 'DEPARTAMENTO', 'CARGO', 'FECHA INGRESO', 'NÚM. RELOJ');
                $this->fpdf->SetFont('Arial', 'B', 8);
                foreach ($dato as $value2) {
                    $this->fpdf->Cell( $value2 =='NOMBRE' ? $col_width * 2 : $col_width, $th, $value2,  0, 0, 'C', 1);
                }
                $this->fpdf->Ln();
                $this->fpdf->SetFont('Arial', 'B', 8);
                $this->fpdf->Cell($col_width * 2, $th, $value->name . ' ' . $value->lastname, 0, 0, 'C');
                $this->fpdf->Cell($col_width, $th, $value->departamento, 0, 0, 'C');
                $this->fpdf->Cell($col_width, $th, $value->cargo, 0, 0, 'C');
                $this->fpdf->Cell($col_width, $th, $value->fechaIni, 0, 0, 'C');
                $this->fpdf->Cell($col_width, $th, $value->bio_id, 0, 0, 'C');
                $this->fpdf->ln();
                $col_width2 = $this->fpdf->GetPageWidth()/4 - 4.5;
                $dato = array('FECHA INICIO', 'DIAS TRAB.', 'R. F. C.', 'NÚM.SEG.SOC.',);
                $this->fpdf->SetFont('Arial', 'B', 8);
                foreach ($dato as $value3) {
                    $this->fpdf->Cell($col_width2, $th, $value3,  0, 0, 'C', 1);
                }
                $this->fpdf->Ln();
                $this->fpdf->Cell($col_width2, $th, $this->periodo($id), 0, 0, 'C');
                $this->fpdf->Cell($col_width2, $th, $value->workingdays, 0, 0, 'C');
                $this->fpdf->Cell($col_width2, $th, $value->rfc, 0, 0, 'C');
                $this->fpdf->Cell($col_width2, $th, $value->imss, 0, 0, 'C');
                $this->fpdf->Ln();

                $this->fpdf->Cell(40, $th, 'Sueldo', 0, 0, 'L');
                $this->fpdf->Cell(40, $th, '$ '. number_format($value->salario, 2), 0, 0, 'R');
                $this->fpdf->Cell(35, $th, '', 0, 0, 'C');
                $this->fpdf->Cell(35, $th, 'Subsidio Empleo', 0, 0, 'L');
                $this->fpdf->Cell(40, $th, '$ '. number_format($value->subsidio, 2), 0, 0, 'R');
                $this->fpdf->Ln(5);

                $this->fpdf->Cell(40, $th, 'Prevision', 0, 0, 'L');
                $this->fpdf->Cell(40, $th, '$ '. number_format($value->prevsoc, 2), 0, 0, 'R');
                $this->fpdf->Cell(35, $th, '', 0, 0, 'C');
                $this->fpdf->Cell(35, $th, 'Descuento', 0, 0, 'L');
                $this->fpdf->Cell(40, $th, '$ '. number_format($value->descuento, 2), 0, 0, 'R');
                $this->fpdf->Ln(5);

                $this->fpdf->Cell(40, $th, '', 0, 0, 'L');
                $this->fpdf->Cell(40, $th, '', 0, 0, 'R');
                $this->fpdf->Cell(35, $th, '', 0, 0, 'C');
                $this->fpdf->Cell(35, $th, 'I. M. S. S.', 0, 0, 'L');
                $this->fpdf->Cell(40, $th, '$ '. number_format($value->segsoc, 2), 0, 0, 'R');
                $this->fpdf->Ln(5);

                $this->fpdf->Cell(40, $th, '', 0, 0, 'L');
                $this->fpdf->Cell(40, $th, '', 0, 0, 'R');
                $this->fpdf->Cell(35, $th, '', 0, 0, 'C');
                $this->fpdf->Cell(35, $th, 'Infonavit', 0, 0, 'L');
                $this->fpdf->Cell(40, $th, '$ '. number_format($value->infonavit, 2), 0, 0, 'R');
                $this->fpdf->Ln(15);

                $percepciones = $value->salario + $value->prevsoc;
                $deducciones = $value->subsidio + $value->descuento + $value->segsoc + $value->infonavit;
                $total = $percepciones - $deducciones;

                $this->fpdf->Cell(40, $th, 'Percepciones', 0, 0, 'L');
                $this->fpdf->Cell(40, $th, '$ '. number_format($percepciones, 2), 0, 0, 'R');
                $this->fpdf->Cell(35, $th, '', 0, 0, 'C');
                $this->fpdf->Cell(35, $th, 'Deducciones', 0, 0, 'L');
                $this->fpdf->Cell(40, $th, '$ '. number_format($deducciones, 2), 0, 0, 'R');
                $this->fpdf->Ln();
                $this->fpdf->Ln();
                $this->fpdf->SetFont('Arial', 'B', 10);
                $this->fpdf->Cell(50, $th, '', 0, 0, 'C');
                $this->fpdf->Cell(20, $th, '', 0, 0, 'C');
                $this->fpdf->Cell(70, $th, $value->name. ' ' . $value->lastname, 'T', 0, 'C');
                $this->fpdf->Cell(50, $th, 'Total: $ '. number_format($total, 2), 0, 0, 'C');

            }

        }
        /*
        #####################################
        #####################################
                Salida de pdf
        */

        $this->fpdf->Output('D', "Requisicion.pdf");
        exit;
    }
}

class PDF extends Fpdf
{
    function header()
    {
        $imagenes = public_path() . '/static/img';
        $this->SetTextColor(0, 0, 0);
        $this->SetFont('Arial', 'B', 12);
        $this->Image($imagenes . '/logo.png', 10, 10, 50);
        $this->Image($imagenes.'/logo.png', 10, 145, 50);
        $this->Cell(0, 10, 'CRECEIMPULSO', 0, 0, 'C');
        $this->Ln();
        $this->SetFont('Arial', 'B', 9);
        $this->SetFillColor(184, 188, 191);
        $this->Cell(63, 10, '  ', 0, 0, 'C');
        $this->Cell(70, 5, "RECIBO DE NOMINA", 0, 0, 'C', 1);
        $this->Ln(10);
    }
}
