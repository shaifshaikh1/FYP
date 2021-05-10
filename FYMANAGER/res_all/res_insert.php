<?php
session_start();
$conn = mysqli_connect('localhost','root','');

if(!$conn)
{
    echo'Not Connected to the server yet';
}

if(!mysqli_select_db($conn,'construction-site'))
{
    echo'Database not selected yet';
}



									//building insertion query
									$table_struct = ["id", "floor", "funds", "quantity", "sources"];
									$values = "";
									$check_v = 0;
									for($q=0; $q!=sizeof($table_struct); $q++){
										if($_POST[$table_struct[$q]]!=""){
											if($q==1 || $q==2)
												$values = $check_v==0? $values.$_POST[$table_struct[$q]]: $values.", ".$_POST[$table_struct[$q]];
											else
												$values = $check_v==0? $values.'"'.$_POST[$table_struct[$q]].'"': $values.', "'.$_POST[$table_struct[$q]].'"';
											$check_v = 1;
										}
										else
											$values = $values.", NULL";
									}

									//performing insertion
									$query = "insert into res_allot values (".$values.")";
									if($result)
										echo "Insertion succesful";
									else
										echo "Error during insertion";
								?>
								</p>
						</div>
					</div><!-- /scroller-inner -->
				</div><!-- /scroller -->

			</div><!-- /pusher -->
		</div><!-- /container -->
		<script src="../js/classie.js"></script>
		<script src="../js/mlpushmenu.js"></script>
		<script>
			new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ) );
		</script>
	</body>
</html>