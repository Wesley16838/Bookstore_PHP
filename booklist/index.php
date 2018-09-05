<?php
session_start();
try
{
	$db = new PDO('mysql:host=localhost;dbname=wesley16838', 'wesley16838', 'password');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	if(!empty($_GET["action"])) {
		switch($_GET["action"]) {
			case "add":
			if(!empty($_POST["quantity"])) {
				$queryString = " SELECT * from bookstore where UID=".$_GET['UID'];
				$q = $db->query($queryString);/*$Q=$productByCode*/
				$itemArray = array($q[0]["UID"]=>array('booktitle'=>$q[0]["booktitle"], 'UID'=>$q[0]["UID"], 'quantity'=>$_POST["quantity"], 'price'=>$q[0]["Price"]));

				if(!empty($_SESSION["cart_item"])) {
					if(in_array($q[0]["UID"],array_keys($_SESSION["cart_item"]))) {
						foreach($_SESSION["cart_item"] as $k => $v) {
							if($q[0]["UID"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
						}
					} else {
						$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
					}
				} else {
					$_SESSION["cart_item"] = $itemArray;
				}
			}
			break;
			case "remove":
			if(!empty($_SESSION["cart_item"])) {
				foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["UID"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
				}
			}
			break;
			case "empty":
			unset($_SESSION["cart_item"]);
			break;	
		}
	}
}catch(PDOException $e)
{
	print "Couldn't connect to the database! " . $e->getMessage();
}
?>
<HTML>
<HEAD>
	<TITLE>Simple PHP Shopping Cart</TITLE>
	<link href="cartstyle.css" type="text/css" rel="stylesheet" />
</HEAD>
<BODY>
	<div id="shopping-cart">
		<div class="txt-heading">Shopping Cart <a id="btnEmpty" href="index.php?action=empty">Empty Cart</a></div>
		<?php
		if(isset($_SESSION["cart_item"])){
			$item_total = 0;
			?>	
			<table cellpadding="10" cellspacing="1">
				<tbody>
					<tr>
						<th style="text-align:left;"><strong>Booktitle</strong></th>
						<th style="text-align:left;"><strong>UID</strong></th>
						<th style="text-align:right;"><strong>Quantity</strong></th>
						<th style="text-align:right;"><strong>Price</strong></th>
						<th style="text-align:center;"><strong>Action</strong></th>
					</tr>	
					<?php		
					foreach ($_SESSION["cart_item"] as $item){
						?>
						<tr>
							<td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><strong><?php echo $item["booktitle"]; ?></strong></td>
							<td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><?php echo $item["UID"]; ?></td>
							<td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo $item["quantity"]; ?></td>
							<td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo "$".$item["Price"]; ?></td>
							<td style="text-align:center;border-bottom:#F0F0F0 1px solid;">
								<a href="index.php?action=remove&UID=<?php echo $item["UID"]; ?>" class="btnRemoveAction">Remove Item</a></td>
							</tr>
							<?php
							$item_total += ($item["Price"]*$item["quantity"]);
						}
						?>

						<tr>
							<td colspan="5" align=right><strong>Total:</strong> <?php echo "$".$item_total; ?></td>
						</tr>
					</tbody>
				</table>		
				<?php
			}
			?>
		</div>

		<div id="product-grid">
			<div class="txt-heading">Products</div>
			<?php
			$query="SELECT * from bookstore ORDER BY UID ASC";
			$p = $db->query($query);/*$p=$product_array*/
			if (!empty($p)) { 
				foreach($p as $key=>$value){
					?>
					
						<form method="post" action="index.php?action=add&UID=<?php echo $p[$key]["UID"]; ?>">
							
							<div><strong><?php echo $p[$key]["booktitle"]; ?></strong></div>
							<div class="product-price"><?php echo "$".$p[$key]["Price"]; ?></div>
							<div>
								<input type="text" name="quantity" value="1" size="2" />
								<input type="submit" value="Add to cart" class="btnAddAction" />
							</div>
						</form>
				
					<?php
				}
			}
			?>
		</div>
	</BODY>
</HTML>