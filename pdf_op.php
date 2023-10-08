<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
    function Header()
    {
        // Logo en la cabecera (ajusta las rutas según la ubicación de tus imágenes)
        $this->Image('img/sky.png', 10, 10, 30);

        // Configura la fuente y tamaño para el título
        $this->SetFont('Times', 'B', 14);

        // Título de la cabecera
        $this->Cell(0, 10, 'REPORTE OPINIONES', 0, 1, 'C');

        // Salto de línea adicional
        $this->Ln(10);

        $fechaActual = date('Y-m-d');
        $horaActual = date('H:i:s');

        $this->InfoBox('Alejandra Isabella Parraga Cruz', $fechaActual, $horaActual);
    }

    function Footer()
    {
        // Posición en la parte inferior de la página
        $this->SetY(-15);

        // Configura la fuente y tamaño para el pie de página
        $this->SetFont('Times', 'I', 8);

        // Número de página
        $this->Cell(0, 10, 'Pagina ' . $this->PageNo(), 0, 0, 'C');
    }

    function InfoBox($nombreAdmin, $fecha, $hora)
    {
        $this->SetFont('Times', '', 12);
        $this->Cell(0, 10, 'Nombre del Administrador: ' . $nombreAdmin, 0, 1);
        $this->Cell(0, 10, 'Fecha: ' . $fecha, 0, 1);
        $this->Cell(0, 10, 'Hora: ' . $hora, 0, 1);

        
        $this->Cell(0, 0, '', 'T');

        // Espacio adicional para separar el cuadro de información del contenido principal
        $this->Ln(10);
    }
}

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Times', '', 12);

$mysqli = new mysqli("localhost", "root", "", "datos_etapa1");

if ($mysqli->connect_error) {
    die("Error de conexión a la base de datos: " . $mysqli->connect_error);
}

$query = "SELECT nombre, correo_electronico, asunto, mensaje FROM opiniones";
$resultado = $mysqli->query($query);

while ($fila = $resultado->fetch_assoc()) {
    $nombre = $fila['nombre'];
    $correo = $fila['correo_electronico'];
    $asunto = $fila['asunto'];
    $mensaje = $fila['mensaje'];

    // Imprime cada campo uno debajo del otro
    $pdf->Cell(0, 10, 'Nombre: ' . utf8_decode($nombre), 0, 1);
    $pdf->Cell(0, 10, 'Correo: ' . utf8_decode($correo), 0, 1);
    $pdf->Cell(0, 10, 'Asunto: ' . utf8_decode($asunto), 0, 1);

    // Utiliza MultiCell para el campo de mensaje
    $pdf->MultiCell(0, 10, 'Mensaje: ' . utf8_decode($mensaje), 0, 1);

    // Salto de línea adicional entre registros
    $pdf->Ln(10);
}

$mysqli->close();

$pdf->Output();
?>
