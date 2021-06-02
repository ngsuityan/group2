<?php
	// require the database connection
	require_once $_SERVER["DOCUMENT_ROOT"].'/AskRunnerSystem/Business Service Layer/Database/AskRunnerSystem.php';

	if(ISSET($_POST['search'])){
	$keyword = $_POST['keyword'];
	 $view = $pet->spsearchpet($spid, $keyword);
                        foreach ($view as $row) {
                            $proid = $row['PET_PROID'];
                        ?>

                                <div class="col-lg-4 form-style-6 ml-5">
                                <fieldset>
                                    <legend><h1><?php echo $row['PET_NAME'];?></h1></legend>
                                    <form action="ServiceProviderProduct.php?view=pet&proid=<?php echo $proid?>" method="POST">
                                        <table>
                                            <input type="text" name="PET_PROID" value="<?php echo $row['PET_PROID']; ?>" hidden>
                                            <tr>
                                                <td>
                                                    <h3 style="color: #061161">Product Name</h3>
                                                </td>
                                                <td>
                                                    <input type="text" name="PET_NAME"  class="form-control input-lg col-xs-4" value="<?php echo $row['PET_NAME'];?>" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h3 style="color: #061161">Product Type</h3>
                                                </td>
                                                <td>
                                                    <input type="text" name="PET_TYPE"  class="form-control input-lg col-xs-4"  value="<?php echo $row['PET_TYPE'];?>"  required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h3 style="color: #061161">Product Price</h3>
                                                </td>
                                                <td><input type="number" name="PET_PRICE"  class="form-control input-lg" value="<?php echo $row['PET_PRICE'];?>"  required></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h3 style="color: #061161">Product Brand</h3>
                                                </td>
                                                <td>
                                                    <input type="text" name="PET_BRAND"  class="form-control input-lg col-xs-4"  value="<?php echo $row['PET_BRAND'];?>"  required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h3 style="color: #061161">Product Function</h3>
                                                </td>
                                                <td>
                                                    <input type="text" name="PET_FUNCTION"  class="form-control input-lg col-xs-4" value="<?php echo $row['PET_FUNCTION'];?>" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h3 style="color: #061161">Product Description</h3>
                                                </td>
                                                <td>
                                                    <textarea cols="50" rows="4" name="PET_DESCRIPTIONS" class="form-control input-lg" ><?php echo $row['PET_DESCRIPTIONS'];?></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h3 style="color: #061161">Product Stock</h3>
                                                </td>
                                                <td><input type="number" name="PET_STOCK"  class="form-control input-lg" value="<?php echo $row['PET_STOCK'];?>"  required></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h3 style="color: #061161">Product Life Stage</h3>
                                                </td>
                                                <td>
                                                    <input type="text" name="PET_LIFE_STAGE"  class="form-control input-lg col-xs-4" value="<?php echo $row['PET_LIFE_STAGE'];?>" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h3 style="color: #061161">Product Expire Date</h3>
                                                </td>
                                                <td>
                                                    <input type="date" name="PET_EXPIRY_DATE"  class="form-control input-lg col-xs-4" value="<?php echo $row['PET_EXPIRY_DATE'];?>" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h3 style="color: #061161">Product Shipping Fee</h3>
                                                </td>
                                                <td><input type="number" name="PET_SHIP_FEE"  class="form-control input-lg" value="<?php echo $row['PET_SHIP_FEE'];?>"  required></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h3 style="color: #061161">Product Shipping From</h3>
                                                </td>
                                                <td><input type="text" name="PET_SHIPS_FROM"  class="form-control input-lg" value="<?php echo $row['PET_SHIPS_FROM'];?>" required></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h3 style="color: #061161">Product Origin</h3>
                                                </td>
                                                <td><input type="text" name="PET_ORIGIN"  class="form-control input-lg" value="<?php echo $row['PET_ORIGIN'];?>" required></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h3 style="color: #061161">Choose Image</h3>
                                                </td>
                                                <td>
                                                    <input type="text" name="image" class="form-control input-lg" value="<?php echo $row['PET_IMAGE'];?>">
                                                    <input type="file" name="PET_IMAGE"  class="form-control input-lg" required></td><br>
                                            </tr>
                                            <tr>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h3 style="color: #061161">Publish</h3>
                                                </td>
                                                <td>
                                                    <select name="PET_PUBLISH" required="">
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </td>
                                            </tr>

                                        </table>
                                        <div class="form-style-6">
                                            <input type="submit" name="editpet" value="Update" >
                                            <button class="btn btn-danger button2 btn-block mt-2" onclick="window.location.href='../Service Provider Interface/ServiceProviderProduct.php?delete=pet&proid=<?php echo $proid?>'"><h3>Delete</h3></button>
                                        </div>
                                        

                                    </form>
                                </fieldset>
                            </div>
			
			<?php
				}
			?>

	
<?php		
	}else{
?>

<?php  
 $view = $pet->viewpet($spid);
                        foreach ($view as $row) {
                            $proid = $row['PET_PROID'];
                        ?>

                                <div class="col-lg-4 form-style-6 ml-5">
                                <fieldset>
                                    <legend><h1><?php echo $row['PET_NAME'];?></h1></legend>
                                    <form action="ServiceProviderProduct.php?view=pet&proid=<?php echo $proid?>" method="POST">
                                        <table>
                                            <input type="text" name="PET_PROID" value="<?php echo $row['PET_PROID']; ?>" hidden>
                                            <tr>
                                                <td>
                                                    <h3 style="color: #061161">Product Name</h3>
                                                </td>
                                                <td>
                                                    <input type="text" name="PET_NAME"  class="form-control input-lg col-xs-4" value="<?php echo $row['PET_NAME'];?>" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h3 style="color: #061161">Product Type</h3>
                                                </td>
                                                <td>
                                                    <input type="text" name="PET_TYPE"  class="form-control input-lg col-xs-4"  value="<?php echo $row['PET_TYPE'];?>"  required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h3 style="color: #061161">Product Price</h3>
                                                </td>
                                                <td><input type="number" name="PET_PRICE"  class="form-control input-lg" value="<?php echo $row['PET_PRICE'];?>"  required></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h3 style="color: #061161">Product Brand</h3>
                                                </td>
                                                <td>
                                                    <input type="text" name="PET_BRAND"  class="form-control input-lg col-xs-4"  value="<?php echo $row['PET_BRAND'];?>"  required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h3 style="color: #061161">Product Function</h3>
                                                </td>
                                                <td>
                                                    <input type="text" name="PET_FUNCTION"  class="form-control input-lg col-xs-4" value="<?php echo $row['PET_FUNCTION'];?>" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h3 style="color: #061161">Product Description</h3>
                                                </td>
                                                <td>
                                                    <textarea cols="50" rows="4" name="PET_DESCRIPTIONS" class="form-control input-lg" ><?php echo $row['PET_DESCRIPTIONS'];?></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h3 style="color: #061161">Product Stock</h3>
                                                </td>
                                                <td><input type="number" name="PET_STOCK"  class="form-control input-lg" value="<?php echo $row['PET_STOCK'];?>"  required></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h3 style="color: #061161">Product Life Stage</h3>
                                                </td>
                                                <td>
                                                    <input type="text" name="PET_LIFE_STAGE"  class="form-control input-lg col-xs-4" value="<?php echo $row['PET_LIFE_STAGE'];?>" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h3 style="color: #061161">Product Expire Date</h3>
                                                </td>
                                                <td>
                                                    <input type="date" name="PET_EXPIRY_DATE"  class="form-control input-lg col-xs-4" value="<?php echo $row['PET_EXPIRY_DATE'];?>" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h3 style="color: #061161">Product Shipping Fee</h3>
                                                </td>
                                                <td><input type="number" name="PET_SHIP_FEE"  class="form-control input-lg" value="<?php echo $row['PET_SHIP_FEE'];?>"  required></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h3 style="color: #061161">Product Shipping From</h3>
                                                </td>
                                                <td><input type="text" name="PET_SHIPS_FROM"  class="form-control input-lg" value="<?php echo $row['PET_SHIPS_FROM'];?>" required></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h3 style="color: #061161">Product Origin</h3>
                                                </td>
                                                <td><input type="text" name="PET_ORIGIN"  class="form-control input-lg" value="<?php echo $row['PET_ORIGIN'];?>" required></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h3 style="color: #061161">Choose Image</h3>
                                                </td>
                                                <td>
                                                    <input type="text" name="image" class="form-control input-lg" value="<?php echo $row['PET_IMAGE'];?>">
                                                    <input type="file" name="PET_IMAGE"  class="form-control input-lg" required></td><br>
                                            </tr>
                                            <tr>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h3 style="color: #061161">Publish</h3>
                                                </td>
                                                <td>
                                                    <select name="PET_PUBLISH" required="">
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </td>
                                            </tr>

                                        </table>
                                        <div class="form-style-6">
                                            <input type="submit" name="editpet" value="Update" >
                                            <button class="btn btn-danger button2 btn-block mt-2" onclick="window.location.href='../Service Provider Interface/ServiceProviderProduct.php?delete=pet&proid=<?php echo $proid?>'"><h3>Delete</h3></button>
                                        </div>
                                        

                                    </form>
                                </fieldset>
                            </div>
<?php
	} }
$conn = null;
?>