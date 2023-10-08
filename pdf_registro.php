<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
    function Header()
    {
        $this->SetFont('Times', 'B', 14);
        $this->Cell(0, 10, 'REGISTRO CLIENTES', 0, 1, 'C');
        $this->Image('img/sky.png', 10, 10, 30);
        $this->SetY(30);

        $fechaActual = date('Y-m-d');
        $horaActual = date('H:i:s');

        $this->InfoBox('Alejandra Isabella Parraga Cruz', $fechaActual, $horaActual);
    }

    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Times', 'B', 8);
        $this->Cell(0, 10, 'Pagina ' . $this->PageNo(), 0, 0, 'C');
    }

    function TablaClientes($header, $data)
    {
        $this->SetY(60); // Para bajar la tabla

        // Configura el fondo negro, texto en blanco y fuente en los títulos de la tabla
        $this->SetFillColor(0, 0, 0); // Fondo negro
        $this->SetTextColor(255, 255, 255); // Texto en blanco
        $this->SetFont('Times', 'B', 12); // Fuente Times en negrita y tamaño 12 para los títulos

        foreach ($header as $col) {
            $this->Cell(45, 7, $col, 1, 0, 'C', 1);
        }
        $this->Ln();

        // Restaura el color de fondo para el contenido de la tabla (blanco)
        $this->SetFillColor(255, 255, 255); // Blanco
        $this->SetTextColor(0, 0, 0); // Texto en negro
        $this->SetFont('Times', '', 12); // Restaura la fuente regular Times y tamaño 12 para el contenido de la tabla

        // Contenido de la tabla
        foreach ($data as $row) {
            foreach ($row as $col) {
                $this->Cell(45, 7, utf8_decode($col), 1);
            }
            $this->Ln();
        }
    }

        function InfoBox($nombreAdmin, $fecha, $hora)
        {
            $this->SetFont('Times', '', 12);
            $this->Cell(0, 10, 'Nombre del Administrador: ' . $nombreAdmin, 0, 1);
            $this->Cell(0, 10, 'Fecha: ' . $fecha, 0, 1);
            $this->Cell(0, 10, 'Hora: ' . $hora, 0, 1);

            // Espacio adicional para separar el cuadro de información del contenido principal
            $this->Ln(10);
        }
}

$pdf = new PDF();
$pdf->SetTitle('REGISTRO CLIENTES');
$pdf->AddPage();
$pdf->SetFont('Times', '', 12);

$header = ['NOMBRE', 'APELLIDO PATERNO', 'APELLIDO MATERNO', 'CORREO'];

include("conexion.php");
$mysqli = new mysqli("localhost", "root", "", "datos_etapa1");

if ($mysqli->connect_error) {
    die("Error de conexión a la base de datos: " . $mysqli->connect_error);
}

$consulta = "SELECT nombre, apat, amat, correo FROM registros";
$resultado = $mysqli->query($consulta);

$data = array();
while ($fila = $resultado->fetch_assoc()) {
    $data[] = $fila;
}

$mysqli->close();

$pdf->TablaClientes($header, $data);

$pdfContent = $pdf->Output('', 'S');

header('Content-Type: application/pdf');
echo $pdfContent;
?>
