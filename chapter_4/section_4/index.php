<?php 

class Database 
{
    const USER_NAME = 'root';

    public function getUserName()
    {
        //Đối với gọi hằng thì sử dụng self thay cho this
        return self::USER_NAME;
    }
} 

echo Database::USER_NAME;
$db = new Database();
echo $db->getUserName();
