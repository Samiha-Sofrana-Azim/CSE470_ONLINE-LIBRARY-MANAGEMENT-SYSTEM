<?php
use PHPUnit\Framework\TestCase;
class MyTest extends TestCase
{
    public function testadminlogin(){
    include "./app/controller/adminlogin.php"; 
    $admin =new adminlogin();
    $this->assertTrue(true); 
    }
    public function testissue-books(){
    include "./app/controller/issue-books.php"; 
    $issue =new issue-books();
    $this->assertTrue(true); 
    }
    
    public function testlogout(){
    include "./app/controller/logout.php";
    $logout = new logout();
    $cookie->setcookie(day, 4);
    $this->assertEquals(day,$cookie->session_name);
    $this->assertEquals(4,$cookie->time() - 60*60);
    $this->assertTrue(true);
        }
        
    public function testchange-password(){
    include "./app/view/change-password.php"; 
    $change-password =new change-password();
    $this->assertTrue(true);
        }
       
    public function testcheck-availability(){
    include "./app/view/check-availability.php"; 
    $check-availability =new check-availability();
    $this->assertTrue(true); 
                }
}
 ?>

