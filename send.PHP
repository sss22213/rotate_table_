<?
			$a = $_GET["S1"];
			$b = $_GET["S2"];
			$c = $_GET["S3"];
			$d = $_GET["S4"];
			if($d==11)
			{
		
		echo "<TABLE BORDER=2>";
			
			$num=$c;
			$circule_row=$c*2-1+$a;
			$circule_col=$c*2-1+$b;
			
			echo '<TR>';
			echo "<td width=100px height=60px rowspan=$circule_row>$num</td><td width=100px height=60px colspan=$circule_col>$num</td>";
			echo '</TR>';
			$num--;
			$circule_row=$circule_row-2;
			$circule_col=$circule_col-2;
			$r1=$circule_row;
			$r2=$circule_row+2;
			
			
				for($x=0;$x<$c-1;$x++)
			{	
					echo '<TR>';
					$num1=$num+1;
					echo "<td width=100px height=60px rowspan=$r1>$num</td><td width=100px height=60px colspan=$circule_col>$num</td><td width=100px height=60px rowspan=$r2>$num1</td>";
					$num--;
					
					$circule_row=$circule_row-2;
					$circule_col=$circule_col-2;
					$r1=$circule_row;
					$r2=$circule_row+2;
					echo '</TR>';
			}
			
			
					for($x=1;$x<=$a;$x++)
				{
					
					echo "<TR>";
					for($y=1;$y<=$b;$y++)
					{
						
						echo "<TD width=100px height=60px>($x, $y)</TD>";
						if($x==1&& $y==$b)
						{
							echo "<td width=100px height=60px rowspan=$r2>1</td>";
						}
							
						
					}
					
					echo "</TR>";
					
				}
				$num2=$x;
				$circule_col=$circule_col+2;
				for($x=0;$x<$c;$x++)
			{
				$num2=$x+1;
				echo "<tr><td width=100px height=60px colspan=$circule_col>$num2</td></tr>";		
				$circule_col=$circule_col+2;
				
			
			}	
			
			echo "</TABLE>";
			
			}
			
			
		else if($d==22)
		
			{
				echo "<TABLE BORDER=2>";
			
			$num=$c;
			$circule_row=$c*2-1+$a;
			$circule_col=$c*2-1+$b;
		
			echo '<TR>';
			echo "<td width=100px height=60px colspan=$circule_col>$num</td><td width=100px height=60px rowspan=$circule_row>$num</td>";
			echo '</TR>';
			$num--;
			$circule_row=$circule_row-2;
			$circule_col=$circule_col-2;
			$r1=$circule_row;
			$r2=$circule_row+2;
			
			
				for($x=0;$x<$c-1;$x++)
			{	
					echo '<TR>';
					$num1=$num+1;
					echo "<td width=100px height=60px rowspan=$r2>$num1</td><td width=100px height=60px colspan=$circule_col>$num</td><td width=100px height=60px rowspan=$r1>$num</td>";
					$num--;
					
					$circule_row=$circule_row-2;
					$circule_col=$circule_col-2;
					$r1=$circule_row;
					$r2=$circule_row+2;
					echo '</TR>';
			}
			
					for($x=1;$x<=$a;$x++)
				{
					
					echo "<TR>";
					for($y=1;$y<=$b;$y++)
					{
						if($x==1 && $y==1)
						{
							echo "<td width=100px height=60px rowspan=$r2>1</td>";
							
						}
						echo "<TD width=100px height=60px>($x, $y)</TD>";
						
							
						
							
						
					}
					
					echo "</TR>";
					
				}
				$num2=$x;
				$circule_col=$circule_col+2;
				for($x=0;$x<$c;$x++)
			{
				$num2=$x+1;
				echo "<tr><td width=100px height=60px colspan=$circule_col>$num2</td></tr>";		
				$circule_col=$circule_col+2;
				
			
			}	
			
			echo "</TABLE>";
			}
	?>