<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use DB;

class DBTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDBInsertion()
    {
        
        $query = "INSERT INTO contacts (first_name, mobile, _created_at, _updated_at, user_id) values(?,?,?,?,?)";
        $date = date('Y-m-d H:i:s');
        $result = DB::insert($query, ["Seun", "08113760927", $date, $date, 1]);
        $this->assertTrue($result);
        
        $result = DB::insert($query, ["Segun", "08113760927", $date, $date, 2]);
        $this->assertTrue($result);
        
        $result = DB::insert($query, ["Queen", "08113760927", $date, $date, 3]);
        $this->assertTrue($result);
        
        echo " All Insertion Successfull \n";
    }
    
    
    public function testDBSelect() {
        
        $query = "SELECT * FROM contacts";
        $result = DB::select($query);
         $this->assertNotNull($result);
        
        foreach($result as $raw) {
        
                foreach($raw as $key => $val){
                    echo $key." = ".$val;
                }
            print "\n";
        }
        
        echo "values fetched successfully";
        
    }
    
    
    
    public function testDBSelectQuery() {
        
         $query = "SELECT * FROM contacts C WHERE C.user_id = ?";
        $result = DB::select($query, [1]);
         $this->assertCount(1, $result);    
        
        foreach($result as $raw) {
        
                foreach($raw as $key => $val){
                    echo $key." = ".$val;
                }
            print "\n";
        }
        
       echo "selection with query successful";
        
    }
    
    
    
    
    
    public function testUpdate() {
        
        $query = "UPDATE contacts C SET C.last_name = ?, C.middle_name = ? WHERE C.user_id = ?";
            
        $result = DB::update($query, ["Matt", "M.", 1]);
                
        $this->assertNotNull($result);
        
        echo "update successful. " . $result . " record(s) modified";
        
        
    }
    
    
    
    
    public function testDelete() {
        
      $query = "DELETE FROM contacts WHERE user_id = ? AND _id = ?" ;
        
       $result = DB::delete($query, [1, 1]);
        
       $this->assertNotNull($result);
        
       echo $result ." record(s) deleted successfully";   
        
    }
    
    
    
}
