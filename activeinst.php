<?php
if( isset($_GET['active_inst_ip']) ) { echo gethostbyname(php_uname('n')); die; } 
if( isset($_GET['active_inst_id']) ) 
{ 
    $this_instance_id = file_get_contents('http://169.254.169.254/latest/meta-data/instance-id');
    echo ( !empty($this_instance_id) ? (string)($this_instance_id) : "unknown instance id" ); die; 
} 