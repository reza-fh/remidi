<?php
$buku = [
    ["Horor", "Briistory", "Rumah Di Perkebunan Karet", 50000],
    ["Horor", "C.J Tudor", " The Chalk Man", 105000],
    ["Horor", "Eve Shi", "Boneka Sandya", 80000],
    ["Komedi", "Almira Bastari", "Ganjil Genap", 50000],
    ["Komedi", "Simpleman", "Sewu Dino", 75000],
    ["Komedi", "Joko Pinurbo", "Perjamuan Khong Guan", 65000],
    ["Romantis", "ika Natassa", "Critical Eleven", 57000],
    ["Romantis", "Fahd Pahdephie", "Angan Senja dan Senyum Pagi ", 59000],
    ["Romantis", "M. Aan Mansyur", "Tidak Ada New York Hari Ini", 48000]
];

// Membuat Pilihan
$temp_arr=[];

foreach ($buku as $key) {

   $temp_arr[]=$key[0];
}
$pilihan=array_unique($temp_arr);

$tampilkan_buku =[];
if(isset($_POST['filter']))
{
    $filter=$_POST['filter'];
    if($filter == "")
    {
        $tampilkan_buku =$buku;
    }else{
        foreach($buku as $key)
        {
            if($key[0] == $filter){
                $tampilkan_buku []=[$key[0],$key[1],$key[2],$key[3]];
            }
        }
    }
}else{
    $tampilkan_buku =$buku;
}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

   
    <div class="d-flex mx-auto" >
       <h2 class="mx-auto" >~ Deretan Buku Cerita Terbaik 2020 ~</h2>
  </div>

<div class="container">
  <div class="row">  
    <form action="remidi.php" method="post">
        <select name="filter">
            <option value="">
                Tampilkan Semua
            </option>
            <?php foreach ($pilihan as $key): ?>
                <option value="<?php echo $key; ?>"><?php echo $key; ?></option>
            <?php endforeach; ?>      
        </select>
        <input type="submit" value="filter">
    </form>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Genre</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Judul Buku</th>
      <th scope="col">Harga Buku</th>
    </tr>
  </thead>
  <?php $grand_total=0; ?>
  <?php foreach ($tampilkan_buku  as $key => $value): ?>
  <tbody>
    <tr class="border 1px" >
      <td><?php echo $value[0]; ?></td>
      <td><?php echo $value[1]; ?></td>
      <td><?php echo $value[2]; ?></td>
      <td><?php echo $value[3]; ?></td>
    </tr>
</tbody>
<?php $grand_total+=$value[3]; ?>
<?php endforeach; ?>
<thead class="thead-light">
    <tr>
      <th scope="col">Total Keseluruhan Harga Buku</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"><?php echo $grand_total; ?></th>
    </tr>
  </thead>
</table>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>