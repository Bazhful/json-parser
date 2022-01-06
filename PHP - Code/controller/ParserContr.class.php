<?php 
Namespace Controllers;

class Parser { 
    
    // PRIVATE DATA
    private object $json_decoded;

    // PUBLIC DATA
    public object $test;
    
    /**
     * @param string $loaded_file
     */
    public function __construct(string $loaded_file){

        $this->db = new \Database\DB;
        $this->json_struct =  $loaded_file;
        $this->linked_list = new \SplDoublyLinkedList();
    }
    
    
    
    /**
     * @global ['PHP Object Generator' - (account details)]
     * 
     * @param string $json_struct 
     * @return \SplDoublyLinkedList
     */
    public function objGenerator(string $json_struct): \SplDoublyLinkedList {
        
        // 
        $json_decoded = json_decode($json_struct);
        for($i = 0; $i < count($this->json_decoded["items"]); $i++){
            
            $this->id_main = $i;
            $this->id_hash = $json_decoded["items"][$i]["id"];
            $this->username = $json_decoded["items"][$i]["login"]["username"];
            $this->password = $json_decoded["items"][$i]["login"]["password"];
            $this->name = $json_decoded["items"][$i]["name"];
            
            $list_object = new \SplDoublyLinkedList;
            $str_object = "$this->id_main## 
                            $this->id_hash##
                            $this->username##
                            $this->password##
                            $this->name";

            $list_object->push($str_object);
            
        }

        return $list_object;
       
    } 

    /**
     * @global ['returns list with duplicates']
     * 
     * @param array $arr
     * // returns object
     * @return array $seralizedObj
     */
    function duplicateNumber(array $arr): array {
        
        for($i = 0; $i < count($arr); $i++){
            for($j = 0; $j < $count($arr); $j++){
                if (strpos($arr[i], $arr[$j + 1]) === false) {
                    
                
                }
            }
        }
        
        

        return item;
    }
}
?>
