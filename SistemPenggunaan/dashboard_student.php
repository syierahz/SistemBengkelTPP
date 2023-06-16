<?php
include_once "component/connection.php";
include_once "component/header.php";
include_once "component/nav.php";

$result = mysqli_query($mysqli, "SELECT * FROM masuk ORDER BY ndp DESC");
 
 if (isset($_POST['Submit'])) {
     $ndp = $_POST['ndp'];
  
     // Insert data ke database
     $add = mysqli_query($mysqli, "INSERT INTO masuk(ndp,waktu_penggunaan) VALUES('$ndp', NOW())");
     if ($add) {
         header("Refresh:0");
     }
 }
 ?>
    
 <center class="underline font-bold text-xl pt-6">USER - SENARAI NAMA PELAJAR KEGUNAAN BENGKEL TPP </center>
 <div class="overflow-hidden">
     <div class="flex flex-col pt-6 pr-12 pl-12">
     <div class="overflow-x-auto sm:-mx-8 lg:-mx-8">
         <div class="py-2 inline-block min-w-full sm:px-8 lg:px-8">
         
             <table class="min-w-full border text-center">
             <thead>
                 <tr class="border border-black bg-blue-400">
                 <th scope="col" class="text-md font-medium text-white px-4 py-4 border-r">
                     Bil.
                 </th>
                 <th scope="col" class="text-md font-medium text-white px-4 py-4 border-r">
                     Nama
                 </th>
                 <th scope="col" class="text-md font-medium text-white px-4 py-4 border-r">
                     NDP
                 </th>
               
                 <th scope="col" class="text-md font-medium text-white px-4 py-4 border-r">
                     Tindakan
                 </th>
                 </tr>
                <?php
                $result = mysqli_query($mysqli,"SELECT * FROM murid"); 
                $bil = 1;
                

                while ($r = mysqli_fetch_array($result)){
                ?>  
                <tr class="border border-black">
                    <td class="border border-black"><?php echo $bil; ?></td>
                    <td class="border border-black"><?php echo $r['nama']; ?></td>
                    <td class="border border-black"><?php echo $r['ndp']; ?></td>
                   
                    
                    <td>
                        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-3 border border-black rounded">
                            <a href='update.php?ndp=<?php echo $r['ndp'];?>'>UPDATE</a>
                        </button>
                        
                
                    </td>
                </tr>
                <?php $bil = $bil + 1; 
                }
                ?>
             </thead>
             </table>       
         </div>
     </div>
     </div>
 </div>
 <?php
 include_once "component/footer.php";
 ?>