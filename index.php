<?php /**
        Author: SpringHack - springhack@live.cn
        Last modified: 2015-09-04 20:45:23
        Filename: index.php
        Description: Created by SpringHack using vim automatically.
**/ ?>
<?php
	echo 'SpringHack';
	ob_start();
	phpinfo();
	file_put_contents('info.txt', ob_get_contents());
	ob_end_clean();
?>
