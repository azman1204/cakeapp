<?php
$options = [
    'url' => 'users/save'
];
echo $this->Form->create($user, $options);

echo $this->Form->controls([
    'user_id'  => ['type' => 'text', 'label' => 'ID Pengguna'],
    'name'     => ['type' => 'text', 'label' => 'Nama'],
    'password' => ['type' => 'password', 'label' => 'Katalaluan'],
    'email'    => ['type' => 'email', 'label' => 'Emel'],
    'submit'   => ['type' => 'submit', 'label' => 'Simpan'],
]);

echo $this->Form->end();