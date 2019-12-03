<?php include('head.php') ;?>
<?php include('nav.php') ;?>

<div style="margin-top:5%"></div>

<?php

// Dashboard
if($page == 'dashboard'){
	$this->load->view('dashboard/index');
}

elseif($page == 'guestbook'){
	$this->load->view('guestbook/index');
}

// Report
elseif($page == 'report_guest'){
	$this->load->view('report/guest');
}

elseif($page == 'report_report'){
	$this->load->view('report/report');
}


// Data Master
elseif($page == 'dm_team'){
	$this->load->view('data_master/team');
}

elseif($page == 'dm_lomba'){
	$this->load->view('data_master/lomba');
}

elseif($page == 'dm_school'){
	$this->load->view('data_master/school');
}


?>
<?php include('footer.php');?>
