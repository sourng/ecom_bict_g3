<?php
	$data = array(
‘id’ => $product_details->id,
‘qty’ => 1,
‘price’ => 1,
‘name’ => $product_details->title,
‘options’ => array(‘size’ => $size, ‘color’ => $color ”)
);
$this->cart->insert($data);

// Here in above code you can see that I’ve two option values ‘size’ and ‘color’, inserting those value is not problem I did exactly as u taught but, while update I got problem. I tried to update doing this

foreach ($this->input->post() as $key => $value) {
$data = array(
‘rowid’ => $key,
‘options’ => array(‘color’ => ‘aa’, ‘size’ => ‘bb’)
);

$this->cart->update($data);

}