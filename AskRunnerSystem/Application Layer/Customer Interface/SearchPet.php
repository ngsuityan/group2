<?php
    // require the database connection
    require_once $_SERVER["DOCUMENT_ROOT"].'/AskRunnerSystem/Business Service Layer/Database/AskRunnerSystem.php';

    if(ISSET($_POST['search'])){
    $keyword = $_POST['keyword'];
    $view = $pet->searchpet($keyword);

    foreach($view as $row) {
                        
                        $proid=$row['PET_PROID'];
            ?>
             <div class="row">
                <div class="col-md-3 kotakkedai text-center py-4 m-4">
                    <a href="CustomerIndex.php?type=pet&proid=<?php echo $proid?>">
                        <legend><h1><?php echo $row['PET_NAME'];?> <?php echo "<br> RM ";?>  
                            <?php echo $row['PET_PRICE'];?></h1></legend>
                        <img src="../IMG/<?php echo $row['PET_IMAGE'];?>"   style="width: 100%;height: 70%;margin-top: 10px;border-radius: 10px;">
                    <button class="btn btn-info button2 btn-block mt-2"><h4>View</h4></button><br/><br/>
                    </a>
                </div>
            </div>

            
            <?php
                }
            ?>

    
<?php       
    }elseif(ISSET($_POST['asc'])){
  
    $view = $pet->sortpetasc();

    foreach($view as $row) {
                        
                        $petprice=$row['PET_PRICE'];
            ?>
             <div class="row">
                <div class="col-md-3 kotakkedai text-center py-4 m-4">
                    <a href="CustomerIndex.php?type=pet&proid=<?php echo $proid?>">
                        <legend><h1><?php echo $row['PET_NAME'];?> <?php echo "<br> RM ";?>  
                            <?php echo $row['PET_PRICE'];?></h1></legend>
                        <img src="../IMG/<?php echo $row['PET_IMAGE'];?>"   style="width: 100%;height: 70%;margin-top: 10px;border-radius: 10px;">
                    <button class="btn btn-info button2 btn-block mt-2"><h4>View</h4></button><br/><br/>
                    </a>
                </div>
            </div>


<?php       
    }}elseif(ISSET($_POST['desc'])){
  
    
    $view = $pet->sortpetdesc();

    foreach($view as $row) {
                        
                        $petprice=$row['PET_PRICE'];
            ?>
             <div class="row">
                <div class="col-md-3 kotakkedai text-center py-4 m-4">
                    <a href="CustomerIndex.php?type=pet&proid=<?php echo $proid?>">
                        <legend><h1><?php echo $row['PET_NAME'];?> <?php echo "<br> RM ";?>  
                            <?php echo $row['PET_PRICE'];?></h1></legend>
                        <img src="../IMG/<?php echo $row['PET_IMAGE'];?>"   style="width: 100%;height: 70%;margin-top: 10px;border-radius: 10px;">
                    <button class="btn btn-info button2 btn-block mt-2"><h4>View</h4></button><br/><br/>
                    </a>
                </div>
            </div>


    <?php } }else{
?>

<?php $view = $pet->allpet();  
foreach($view as $row) {
                        $proid=$row['PET_PROID'];
            ?>
             <div class="row">
                <div class="col-md-3 kotakkedai text-center py-4 m-4">
                    <a href="CustomerIndex.php?type=pet&proid=<?php echo $proid?>">
                        <legend><h1><?php echo $row['PET_NAME'];?> <?php echo "<br> RM ";?>  
                            <?php echo $row['PET_PRICE'];?></h1></legend>
                        <img src="../IMG/<?php echo $row['PET_IMAGE'];?>"   style="width: 100%;height: 70%;margin-top: 10px;border-radius: 10px;">
                    <button class="btn btn-info button2 btn-block mt-2"><h4>View</h4></button><br/><br/>
                    </a>
                </div>
            </div>

            
            <?php
                }
            ?>
        
<?php
    }
$conn = null;
?>