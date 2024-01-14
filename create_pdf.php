<?php
// Include file TCPDF
require_once('C:\laragon\www\sipaku\tcpdf\tcpdf.php');

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['nama']) && isset($_GET['ttl']) && isset($_GET['alamat']) && isset($_GET['total_malnutrisi']) && isset($_GET['total_stunting'])) {
    $nama = $_GET['nama'];
    $ttl = $_GET['ttl'];
    $alamat = $_GET['alamat'];
    $total_malnutrisi = $_GET['total_malnutrisi'];
    $total_stunting = $_GET['total_stunting'];

    $pdf = new TCPDF();

    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Author Name');
    $pdf->SetTitle('Informasi Gizi');
    $pdf->SetSubject('Data Gizi');
    $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

    $pdf->AddPage();

    $pdf->SetFont('helvetica', '', 12);

    #$pdf->SetTextColor(23, 162, 184);
    $pdf->SetFont('helvetica', 'B', 18);
    $pdf->Cell(0, 10, 'Informasi Status Gizi', 0, 1, 'C');

    $pdf->SetTextColor(0);
    $pdf->SetFont('helvetica', 'B', 14);
    $pdf->Cell(0, 10, 'Data Pribadi:', 0, 1);
    $pdf->SetFont('');
    $pdf->Cell(0, 10, "Nama: $nama", 0, 1);
    $pdf->Cell(0, 10, "Tempat Tanggal Lahir: $ttl", 0, 1);
    $pdf->Cell(0, 10, "Alamat: $alamat", 0, 1);
    $pdf->Ln(10);

    $pdf->SetFont('helvetica', 'B', 14);
    $pdf->Cell(0, 10, 'Perhitungan Probabilitas Gizi:', 0, 1);
    $pdf->SetFont('');
    $pdf->Cell(0, 10, "Probabilitas Gizi (Malnutrisi): $total_malnutrisi", 0, 1);
    $pdf->Cell(0, 10, "Probabilitas Gizi (Stunting): $total_stunting", 0, 1);
    $pdf->Ln(10);

    $pdf->SetFont('helvetica', 'B', 14);
    $pdf->Cell(0, 10, 'Nilai Terbesar:', 0, 1);
    $pdf->SetFont('');

    $arr = [$total_malnutrisi, $total_stunting];
    $max = max($arr);

    $pdf->Cell(0, 10, "Nilai Terbesar dari array di atas ialah: $max", 0, 1);
    $pdf->Ln(10);

    // Solusi
    $pdf->SetFont('helvetica', 'B', 12);
    $pdf->Cell(0, 10, 'Hasil Klasifikasi & Solusi:', 0, 1);
    $pdf->SetFont('');
    $solusi = '';

    if ($total_malnutrisi == $max) {
        $pdf->SetFont('');
        $pdf->Write(10, "Klasifikasi: Probabilitas Gizi terklasifikasi Malnutrisi\n");
        $solusi = "Memenuhi kebutuhan nutrisi lengkap, termasuk karbohidrat, protein, vitamin, mineral, dan serat sesuai kebutuhan anak";
    } elseif ($total_stunting == $max) {
        $pdf->SetFont('');
        $pdf->Write(10, "Klasifikasi: Probabilitas Gizi terklasifikasi Stunting\n");
        $solusi = "    1.Membawa anak untuk kontrol rutin ke dokter jika ia menderita penyakit kronis
    2. Memeriksakan tinggi dan berat badan anak secara berkala 
    3. Memperbaiki sanitasi di rumah dan menerapkan perilaku hidup bersih dan sehat (PHBS)
    4.Memberikan nutrisi yang berupa makanan yang kaya protein hewani, lemak, dan kalori";
}
    

    $pdf->Ln(5);

    $pdf->SetFont('');
    $pdf->Write(10, "Solusi:\n$solusi");

    $pdf->Output('Informasi Kulit ' . $nama . '.pdf', 'I');
} else {
    echo "Data tidak valid atau tidak ditemukan.";
}
?>
