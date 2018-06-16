<?php 
header("Content-Type: text/html; charset=UTF-8");
require_once "config_class.php"; 
require_once "checkvalid_class.php"; 
require_once "database_class.php"; 

//√лобальный управл¤ющий класс 
abstract class GlobalClass
{ 
     
    private $db; 
    private $table_name; 
    protected $config; 
    protected $valid; 
     
    protected function __construct($table_name, $db){ 
        $this->db = $db; 
        $this->table_name = $table_name; 
        $this->config = new Config(); 
        $this->valid = new CheckValid(); 
    } 
     
    /*-ƒобавление новой записи-*/ 
    public function add($new_values)
	{ 
        return $this->db->insert($this->table_name, $new_values); 
    } 
    /*-ƒобавление новой записи-*/ 
     
    /*-–едактирование записи по id-*/ 
    protected function edit($id, $upd_fields){ 
        //ћетода updateOnID написал сам, могут быть ошибки 
        return $this->db->updateOnID($this->table_name, $id, $upd_fields); 
    } 
    /*-–едактирование записи по id-*/ 
     
    /*-”даление записи по Id-*/ 
    protected function delete($id){ 
        return $this->db->deleteOnID($this->table_name, $id); 
    } 
    /*-”даление записи по Id-*/ 
     
    /*-”даление всех записей-*/ 
    protected function deleteAll(){ 
        return $this->db->deleteAll($this->table_name); 
    } 
    /*-”даление всех записей-*/ 
     
    /*-¬ыбрать определенное поле, если известно другое поле и значение-*/ 
    protected function getField($field_out, $field_in, $value_in){ 
        return $this->db->getFields($this->table_name, $field_out, $field_in, $value_in); 

    } 
    /*-¬ыбрать определенное поле, если известно другое поле и значение-*/ 
     
    /*-¬ыбрать поле по id-*/ 
    protected function getFieldOnID($id, $field){ 
        return $this->db->getFieldOnID($this->table_name, $id, $field); 
    } 
    /*-¬ыбрать поле по id-*/ 
     
    /*-»зменение записи по Id-*/ 
    protected function setFieldOnID($id, $field, $value){ 
        return $this->db->setFieldOnID($this->table_name, $id, $field, $value); 
    } 
    /*-»зменение записи по Id-*/ 
     
    /*-ѕолучение всей записи целиком- (сделано public после завершение работы помен¤ть)*/ 
    public function get($id){ 
        return $this->db->getElementOnID($this->table_name, $id); 
    } 
    /*-ѕолучение всей записи целиком-*/ 
     
    /*-ѕолучение всех записей- (сделано public после завершение работы помен¤ть)*/ 
    public function getAll($order = "", $up = true){ 
        return $this->db->getAll($this->table_name, $order, $up); 
    } 
    /*-ѕолучение всех записей-*/ 
     
    /*-¬ыбрать все по определенному полю-*/ 
    protected function getAllOnField($field, $value, $order = "", $up = true){ 
        return $this->db->getAllOnField($this->table_name, $field, $value, $order, $up); 
    } 
    /*-¬ыбрать все по определенному полю-*/ 
     
    /*-ѕолучение определенного числа случайных елементов-*/ 
    protected function getRandomElement($count){ 
        return $this->db->getRandomElements($this->table_name, $count); 
    } 
    /*-ѕолучение определенного числа случайных елементов-*/ 
     
    /*-ѕолучение последнего ID-*/ 
    protected function getLastID(){ 
        return $this->db->getLastID($this->table_name); 
    } 
    /*-ѕолучение последнего ID-*/ 
     
    /*-ѕолучение определенного количества записей по определенному полю-*/ 
    protected function getCountFields($fields, $count){ 
        return $this->db->getCountFields($this->table_name, $fields, $count); 
    } 
    /*-ѕолучение определенного количества записей по определенному полю-*/ 
     
    /*-ѕолучение количества елементов в таблице-*/ 
    protected function getCount(){ 
        return$this->db->getCount($this->table_name); 
    } 
    /*-ѕолучение количества елементов в таблице-*/ 
     
    /*-ѕроверка на существование данного значени¤ по полю-*/ 
    protected function isExists($field, $value){ 
        return $this->db->isExists($this->table_name, $field, $value); 
    } 
    /*-ѕроверка на существование данного значени¤ по полю-*/ 
     
    /*-поиск-*/ 
    protected function search($words, $fields){ 
        return $this->db->search($this->table_name, $words, $fields); 
    } 
    /*-поиск-*/ 
} 
?>