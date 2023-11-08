<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ... (previous code for sanitizing and retrieving form data)

    // Handle image upload
    $targetDirectory = "uploads/"; // Specify the directory where you want to store uploaded images
    $targetFile = $targetDirectory . basename($_FILES["foto_parts"]["name"]);

    if (move_uploaded_file($_FILES["foto_parts"]["tmp_name"], $targetFile)) {
        // The image has been successfully uploaded
        // You can store $targetFile in your database to save the image path
    } else {
        echo "Error uploading the image.";
    }

    // SQL query for data insertion (excluding the foto_parts column)
    $sql = "INSERT INTO parts (
        nama_parts,
        package_parts, 
        tipe_parts,
        merek_parts,
        jenis_parts, 
        spesifikasi_parts,
        ket_spesifikasi_parts,
        harga_jual_parts,
        catatan_parts,
        stock_parts
    ) VALUES (
        '$nama_parts',
        '$package_parts', 
        '$tipe_parts',
        '$merek_parts',
        '$jenis_parts', 
        '$spesifikasi_parts',
        '$ket_spesifikasi_parts', 
        '$harga_jual_parts',
        '$catatan_parts', 
        '$stock_parts'
    )";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        header("Location: viewparts.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


// Close the database connection
$conn->close();
?>
