<?php
include_once "component/connection.php";
include_once "component/header.php";
include_once "component/nav.php";

if (isset($_POST["update"])) {
    $nama = $_POST["nama"];
    $ndp = $_POST["ndp"];
    $paswword = $_POST["ndp"];

     $result = mysqli_query( $mysqli, "UPDATE murid SET nama='$nama' WHERE ndp='$ndp'" );

    if ($result) {
    echo "<script>alert('Berjaya kemaskini')</script>";
    echo "<script>window.location='dashboard_admin.php'</script>";    
       
    } else { 
    echo "<script>alert('Tidak Berjaya kemaskini')</script>";
    echo "<script>window.location='edit.php'</script>"; 
    }
}

 ?>

<?php
$ndp = $_GET['ndp'];
$result = mysqli_query($mysqli, "SELECT * FROM murid WHERE ndp='$ndp'");
while($res = mysqli_fetch_array($result))
{
    $ndp = $res['ndp'];
    $nama = $res['nama'];
    
}
?>

<div class="flex items-center justify-center">
    <div class="px-8 py-6 mt-20 text-left bg-white shadow-lg rounded-lg">
        <h3 class="text-2xl font-bold">KEMASKINI MAKLUMAT USER</h3>
        
        <form method="post" enctype='multipart/form-data'>
            <div class="mt-4">
            <div class="mt-4">


</div>
            <div class="mt-4">
                <label class="block">NDP</label>
                <input name="ndp" type="text" required class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" value="<?php echo $ndp;?>">  
                </div>
                <div class="mt-4">
                <label class="block">NAMA</label>
                <input name="nama" type="text" required class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" value="<?php echo $nama;?>">  
                </div>
               
                <div class="flex items-baseline justify-between">

                    <button type="button" class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out"><a href="dashboard_admin.php">BACK</a></button>

                    <button type="submit" name="update" class="px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900">KEMASKINI</button>
                  
                </div>
            </div>
        </form>
    </div>
</div>
 <?php
 include_once "component/footer.php";
 ?>