<?php 
$data = [
            ["Name"=>"Abc","Email"=>"Abc@gmail.com","Password"=>"Abc123"],
            ["Name"=>"Ali","Email"=>"Ali@gmail.com","Password"=>"Ali123"],
            ["Name"=>"Ahmed","Email"=>"Ahmed@gmail.com","Password"=>"Ahmed123"],
            ["Name"=>"Test","Email"=>"Test@gmail.com","Password"=>"Test123"]
];
?>
<table border="1px">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
    </tr>
<?php 
foreach($data as $key => $value){
    if($value['Name'] == "Ali"){
        ?>
            <tr>
                <td><?php echo $value['Name'] ?></td>
                <td><?php echo $value['Email'] ?></td>
                <td><?php echo $value['Password'] ?></td>
            </tr>
    <?php 
    }
    
}
?>
</table>