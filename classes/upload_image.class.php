<?php

/////////////////////////////////////////////////////////////////////////////////
// Powered by ENG Muhammad Abdullah El Nahtta 
// This Class created from scratch by Powered by ENG Muhammad Abdullah El Nahtta
// Powered by ENG Muhammad Abdullah El Nahtta 
/////////////////////////////////////////////////////////////////////////////////
// you can contact me through mobile number 201093001070 or lanline 20 48 2327352
/////////////////////////////////////////////////////////////////////////////////
//                             &&&&&&&&&&&&&&&&,@                             
//                           &&&&&&&&&&&&&&&&&@&&&%&%                          
//                         *%&%&&%%%%#%%%%%%&%&&&&&&&                          
//                         &&&/,,,,,,...*,*,,***//(&&&%                        
//                       %&%&,,.....,,,,,,,,,,****//%&&                        
//                       %%#*,..... .........,,,,***/#&&                       
//                       &#*...........,...,,,,,,,****%&                       
//                       %(,....,...,......,,,###((***/&&*                     
//                     ..,#*,&#/,****@&*,,%/((#((/((*@#*,*                     
//                     .,..,@,,*(.&@(/,/.,@/((((*//*,*%**/                     
//                       ,,(,/..,,**,./..,**@,**,%&***//*                      
//                        .(,....,,,.....,******,,,,*/#,.                      
//                          (....,(...*..,*//***/#*//%                         
//                          %#,,//#(///((((#*//%%&/(%&                         
//                           #/#/*(..,,,,*,*//**#/%&&.                         
//                            /%#*/,...,,///****#&&&                           
//                             ,*%%#/(*//#(###%&&#/*,                          
//                            ,&..*/&&%&&&&&&&&#***,.&&                        
//                          @%   (....,,*///*****,  ..&&&&&&&&&&@              
//                     &&&&&%%%     *...,,,*,,,    ...&&&&&&&&&&&&&&&&&&&&&    
//             &%%%%%%%&&&%%%%%         ,,,,        .,&&&&&&&&&&&&&&&&&&&&&&&&&
//       %%%&&&%%%%%%%%%%&%%%%%%      @&#%%&&&&%  ...,&&&&&&&%&&&&%%%&&%&&&&&&&
//    %&&&%%%%%%%###%%%#%%%%%%%.     ,(/%#&&&&,.,# ...(&&&&&&&%&&&%%%%%%%%%%%&&
//    %%%%%%%#######%####%%%%%%%   ... *%#&&&,....   .*&&&&%&%%&&&&&%%%%%%%%%&&
//    %%################%%%%%%%&.        %%%&,....    /&&&%&%%%%&&&&&%%%%&&%&&%
//    %%###(#(((#(#(####%%%%%%%&,       %%%&&&...     .&&&&%%%%%&&&&&&&&&&&&&&&
/////////////////////////////////////////////////////////////////////////////////
// you can contact me through mobile number 201093001070 or lanline 20 48 2327352
/////////////////////////////////////////////////////////////////////////////////
// Powered by ENG Muhammad Abdullah El Nahtta 
// This Class created from scratch by Powered by ENG Muhammad Abdullah El Nahtta
// Powered by ENG Muhammad Abdullah El Nahtta 
/////////////////////////////////////////////////////////////////////////////////

class Upload_image
{

    // getting file data into variables
    public $file_submitted;
    public $file_name;
    public $file_temp_location;
    public $file_size;
    public $file_type;
    public $file_error;
    public $file_name_extenssion;
    public $file_extenssion;
    public $allowed_extenssion;
    public $new_path;
    public $file_name_new;

    public function upload_image_file($file, $value, $path, $tableName, $condition,  $coulmnName){
       $uploadFile= $this->do_upload($file, $path);
       if ($uploadFile[0]===true) {
        $updateDb= $this->update_db_with_with_file_upload($tableName, $condition, $value, $coulmnName, $uploadFile[1]);
            if ($updateDb===true) {
                return true;
            }else{
                return $updateDb;
            }    
       } else {
        return $uploadFile;
       }
       

    }

    private function update_db_with_with_file_upload($tableName, $condition, $value, $coulmnName , $path){
        $inquiry_db   = new ElmasriaDB;
        $sql="SELECT * FROM `{$tableName}`  WHERE  `{$condition}`='{$value}'";

        $result = $inquiry_db ->query($sql);

        if ($result->num_rows > 0) {
                $sql="UPDATE `{$tableName}` SET `{$coulmnName}`='{$path}' WHERE `{$condition}`='{$value}'";
                if ($inquiry_db->query($sql) === TRUE) {
                    return true;
                } else {
                    return "Failed to update DB with attachment please take screenshoot and refere to Software Development Team";
                }
          } else {
                $sql="INSERT INTO `{$tableName}` (`{$condition}`,`{$coulmnName}`) VALUES ('{$value}', '{$path}')";
                if ($inquiry_db->query($sql) === TRUE) {
                    return true;
                } else {
                    return "Failed to update DB with attachment please take screenshoot and refere to Software Development Team";
                }
          }
        $inquiry_db->close_db_connection();
    }


    //////////////////////////////////////////////
    ///////////////////////check_file_size////////
    //////////////////////////////////////////////
    private function check_file_size()
    {
        // creating an array which has the allowed Extension
        $this->allowed_extenssion = array(
            "jpg",
            "jpeg",
            "png",
            "gif"
        );
        
        if ($this->file_size <= 500000)
        {
            return true;
        }
        else
        {
            return "Error during upload !!!  please make sure that your file size less than 0.5 MB for file.$this->file_name";
        }
    }
    //////////////////////////////////////////////
    /////////////////check_file_extenssion////////
    //////////////////////////////////////////////
    private function check_file_extenssion()
    {
        if (in_array($this->file_extenssion, $this->allowed_extenssion))
        {
            return true;
        }
        else
        {
            return "unaccepted file extenssion for file".$this->file_name;
        }
    }

    //////////////////////////////////////////////
    ///The uniqid() function generates a unique ID
    //////////////////////////////////////////////
    private function upload_image()
    {
        // The uniqid() function generates a unique ID based on the microtime (the current time in microseconds).
        // Note: The generated ID from this function does not guarantee uniqueness of the return value!
        // To generate an extremely difficult to predict ID, use the md5() function.
        $this->file_name_new = md5(uniqid('', true)) . "." . $this->file_extenssion;
        $file_destination_upload =$this->new_path . $this->file_name_new;

        $upload_moved = move_uploaded_file($this->file_temp_location, $file_destination_upload);

        if ($upload_moved)
        {
            return true;
        }
        else
        {
            return "unaccepted file error trying to move file .$this->file_name";
        }

    }

    private function do_upload($file, $path)
    {
        // getting file data into variables
        $this->file_submitted = $file;
        //////////////////////////////////////
        $this->file_name = $file["name"];
        $this->file_temp_location = $file["tmp_name"];
        $this->file_size = $file["size"];
        $this->file_type = $file["type"];
        $this->file_error = $file["error"];

        $this->new_path = $path;

        //The explode() function breaks a string into an array.
        $this->file_name_extenssion = explode(".", $this->file_name);

        // getting file extension
        // The end() function moves the internal pointer to, and outputs, the last element in the array.
        // The strtolower() function converts a string to lowercase.
        $this->file_extenssion = strtolower(end($this->file_name_extenssion));

        

        if ($this->check_file_size() === true)
        {
            if ($this->check_file_extenssion() === true)
            {
                if ($this->upload_image() === true)
                {
                    return $res= array(true ,$this->new_path . $this->file_name_new);

                }
                else
                {
                    return $this->upload_image();
                }
            }
            else
            {
                return $this->check_file_extenssion();
            }
        }
        else
        {
            return $this->check_file_size();
        }
    }

}