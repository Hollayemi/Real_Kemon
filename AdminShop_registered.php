<?php
 $shopReg = "jhj";
 include('adminHeader.php');
?>
<section class="contain">

<style>
 table{
    width:100%;
}
table, th, td {
    border: 0px solid black;
    border-collapse: collapse;
    margin-left:0%;
    margin-right:10%;
    margin-top:30px;
    margin-bottom:130px;

}
th, td {
    min-width:150px !important;
    padding: 5px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
    background-color: #fff;
}
</style>
<table id="t01"  style="width:100%">
  <tr>
    <th>id</th>
    <th>website</th>
    <th>Phone Number</th>
    <th>Shop Name</th>
    <th>Bustop</th>
    <th>Junction</th>		
    <th>Description</th>
    <th>Location</th>
    <th>Function</th>
  </tr>


<?php
    $mysqli=mysqli_connect('localhost','root','','market');

    $sql="SELECT id,shop_name,shop_website,phone,state,junction,city,whatsapp FROM marketers";

    $run=mysqli_query($mysqli,$sql);

    while($row = mysqli_fetch_assoc($run)) {
        $shop_name      =       $row["shop_name"];
        $junction       =       $row["junction"];
        $state         =       $row["state"];
        $wahtsapp           =       $row["whatsapp"];
        $id             =       $row["id"];
        $Phone          =       $row["phone"];
        $website          =       $row["shop_website"];
        $city           =       $row["city"];
   
?>


    <tr>
        <td><?php echo $id ?> </td>
        <td><?php echo $website ?> </td>
        <td><?php echo $Phone ?> </td>
        <td><?php echo $shop_name ?> </td>
        <td><?php echo $state ?> </td>
        <td><?php echo $junction ?> </td>		
        <td><?php echo $city ?> </td>
        <td><?php echo $state ?> </td>
        <td><button value="Delete" onClick= Delete('') style="background-color:red; height:30px;" >Delete</button></td>
        
    </tr>
  
    
<?php 

    
}
     


?>

</section>
<?php include('AdminFooter.php') ?>