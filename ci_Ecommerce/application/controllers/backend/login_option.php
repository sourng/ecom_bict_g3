<?php
if( $this->session->userdata('gro_id')==1 ){
    redirect(site_url().'backend/'.$this->session->userdata('group_name'), 'location', 302);
}
elseif($this->session->userdata('gro_id')==2){
    redirect(site_url().'backend/'.$this->session->userdata('group_name'), 'location', 302);
}else{
    $this->load->view('backend/login/v_login');
}
?>