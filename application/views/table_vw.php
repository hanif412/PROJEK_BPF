<?php

$template = array(
    'table_open'    => '<table border="1 cellpadding="4" cellspacing="0">',
    'table_clos'    => '</table>'
);

$this->table->set_template($template);
$this->table->set_heading(array('No', 'Nama', 'Alamat'));

$this->table->add_row(array('1','Budi','Rumbai'));
$this->table->add_row(array('2','Hanif','Panam'));
$this->table->add_row(array('3','Dimas','NangkaS'));

echo $this->table->generate();