<?php
    session_start();
    class user
    {
        public $user1;
        public $pass;
        public $num;
        public $fname;
        public $mail;
        /*function __construct($user1, $pass)
        {
        }*/
        function insert($user1,$fname,$mail,$pass)
        {
            $this->user1 = $user1;
            $this->fname = $fname;
            $this->mail = $mail;
            $this->pass = $pass;
            $conn = new mysqli('localhost','root');
            if(!$conn)
            {
                echo "Fail";
                return false;
            }
            mysqli_select_db($conn, 'info');

            $stmt = "insert into employee(user, fname, email, password) values('$this->user1','$this->fname','$this->mail','$this->pass')";
            mysqli_query($conn, $stmt);
            return true;
        }
        function check($user1, $pass)
        {
            $this->user1 = $user1;
            $this->pass  = $pass;
            $user3 = $this->user1;
            $pass2 = $this->pass;
            $con = mysqli_connect('localhost','root');
            if(!$con)
            {
                echo "Error";
            }
            mysqli_select_db($con, 'info');

            $q = "select * from employee where email = '$user3' && password = '$pass2' ";

            $result = mysqli_query($con, $q);

            $num = mysqli_num_rows($result);

            return $num;
            /*echo $user3;
            echo $pass2;
            echo $num;*/
        }
        function validuser($num)
        {
            $this->num = $num;
            if($this->num==1)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        function getusername($user1)
        {
            return $this->user1;
        }
    }
    /*$user4 = "sb@gmail.com";
    $pass3 = "123456";
    $user2 = new user($user4,$pass3);
    $num = $user2->check();
    echo $num;*/ 
?>