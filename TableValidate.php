

<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `users` WHERE CONCAT('id',`nama_penuh`, `nama_syarikat`, `alamat_syarikat`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `user`";
    $search_result = filterTable($query);
}
                        
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "iks");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
