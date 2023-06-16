<?php
include "component/connection.php";
include "component/header.php";

if(isset($_POST['id'])){ 
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $access = $_POST['access'];

     $sql = "INSERT INTO admin (id,nama,password,access)
     VALUES ('$id','$nama','$password','$access')";
     $result = mysqli_query($mysqli, $sql);
if($result){
  ?>
  <main x-data="app">
    <button type="button" @click="closeToast()" x-show="open" x-transition.duration.300ms class="fixed top-4 right-4 z-50 rounded-md bg-green-500 px-4 py-2 text-white transition hover:bg-green-600">
      <div class="flex items-center space-x-2">
        <span class="text-3xl"><i class="bx bx-check"></i></span>
        <p class="font-bold">Anda telah BERJAYA Mendaftar Sebagai Admin!</p>
      </div>
    </button>
  </main>
<?php
}
else{
  ?>
  <main x-data="app">
    <button type="button" @click="closeToast()" x-show="open" x-transition.duration.300ms class="fixed top-4 right-4 z-50 rounded-md bg-red-500 px-4 py-2 text-white transition hover:bg-red-600">
      <div class="flex items-center space-x-2">
        <span class="text-3xl"><i class="bx bx-x"></i></span>
        <p class="font-bold">Anda TIDAK BERJAYA Mendaftar!</p>
      </div>
    </button>
  </main>
      <?php
}
}
?>

<section class="bg-purple-300">
<div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-purple-500 dark:border-gray-700 shadow-lg shadow-blue-900/80">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
          <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                  Pendaftaran Admin
          </h1>
              <form class="space-y-4 md:space-y-6" method="post">

                  <div>
                      <label for="id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID</label>
                      <input type="id" name="id" id="id" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Masukkan ID Anda" required="">
                  </div>

                  <div>
                      <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Penuh</label>
                      <input type="nama" name="nama" id="nama" placeholder="Masukkan Nama Penuh Anda" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                  </div>

                  <div>
                      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                      <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                  </div>

                  <select class="form-select appearance-none block w-full px-3 mt-2 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example" name="access" required>
                 <option disabled selected value> -- select an option -- </option>  
                 <option value="admin">admin</option>
                  </select>

                  <div class="flex items-baseline justify-between">
                      <button type="button" class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out"><a href="login.php">BACK</a></button>

                      <button type="submit" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">DAFTAR</button>
                  </div> 
              </form>
      </div>
  </div>
</div>