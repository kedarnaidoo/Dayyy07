<?php
class Jaime extends Lannister
{
	public function will($obj)
	{
		if (get_parent_class($obj) !== 'Lannister')
			return ("Let's do this.");
		else if (get_class($obj) === 'Cersei')
			return ("With pleasure, but only in a tower in Winterfell, then.");
		else
			return ("Not even if I'm drunk !");
	}
}
?>