<?php
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table {
    public function validationDefault(Validator $v) {
        $v->notEmpty('email', 'Email tak boleh kosong');
        $v->minLength('email', 10, 'Panjang min 10 karakter');

        $v->notEmpty('user_id', 'ID Pengguna wajib diisi');
        return $v;
    }
}