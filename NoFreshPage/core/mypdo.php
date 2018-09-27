<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 2017/6/5
 * Time: 9:44
 */
final  class mypdo{
    private $pdo;
    private static $instance;
    private $table;         //对哪个表进行操作
    //私有化构造方法
    private function __construct($table){
        //初始化类的属性
        try{
            require_once CONF;
            $dbms     = isset($option['dbms'])     ? $option['dbms']     : '';
            $host     = isset($option['host'])     ? $option['host']     : '';
            $username = isset($option['username']) ? $option['username'] : '';
            $password = isset($option['password']) ? $option['password'] : '';
            $dbname   = isset($option['dbname'])   ? $option['dbname']   : '';
            $port     = isset($option['port'])     ? $option['port']     : '';
            $charset  = isset($option['charset'])  ? $option['charset'] :'';
            //创建pdo对象
            $dsn = $dbms.":$host=".$host.";dbname=".$dbname.";charset=".$charset.";port=".$port;
            $this->pdo = new PDO($dsn,$username,$password);
        }catch (PDOException $e){
            echo "错误编号：".$e->getCode();
            echo "错误行号：".$e->getLine();
            echo "错误信息：".$e->getMessage();
        }
        //初始化表
        $this->table = $table;
    }

    //私有化克隆方法
    private function __clone(){
        // TODO: Implement __clone() method.
    }

    //入口方法
    public static function getSingleton($table){
        if(!self::$instance instanceof self){
            self::$instance = new self($table);
        }
        return self::$instance;
    }
    /*
     * 插入方法
     * @paramter $data is the date to insert,must be a assoc array
     * if the function execute successful return true otherwise return false
     */
    public function insert($date){
        //拼装sql语句
        $sql = "insert into $this->table (";
        //获取表里面的字段,date的key值
        $keys = array_keys($date);
        //将key这个数组转换成字符串
        $str = implode(',',$keys);
        $sql.=$str.") values(";
        //预处理准备，拼接占位符
        foreach ($keys as $v){
            $sql.=":".$v.",";
        }
        //去掉最后的逗号并拼接完成sql语句
        $sql = rtrim($sql,',');
        $sql .=");";
        //预处理
        $stmt = $this->pdo->prepare($sql);
        //绑定数据(将占位符替换)
        foreach ($date as $k=>$v){
            $stmt->bindValue(":$k",$v);
        }
        return $stmt->execute();
    }
    /*
     * 查询操作(以下不拼装sql语句因为拼装条件太多，不如直接写查询sql语句,即使是使用的时候)
     * this function return a ascoc array or false
     *
     */
    public function getAll($sql=''){
        //预处理
        $stmt = $this->pdo->prepare($sql);
        //执行
        $stmt->execute();
        //判断记录数
        if($stmt->rowCount()==0){
            echo "查询数据失败，没有查到你要的数据";
            return false;
        }
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    /*
     * 更新,删除操作
     */
    public function dml($sql=''){
        $stmt = $this->pdo->prepare($sql);
        $res =  $stmt->execute();
        if(!$res){
            echo "SQL语句执行失败";
            return false;
        }
        return true;
    }

}
