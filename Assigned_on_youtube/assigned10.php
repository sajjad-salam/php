
<?php 

// $driver= array("C:");

// $total_size=0 ;
// foreach($driver as $d) {
//     $size = disk_total_space($d);
//     $total_size+=$size;
// }

// $teraSize= $total_size/1024/1024/1024/1024;
// $teraSize=round($teraSize,2);
// echo $teraSize.  " Terabyte" ;



// Output Examples
// "1.37 Terabyte"
// "0.46 "







// C:\Users\wtgd5\Downloads/DEE_REMIX.mp4;


// $file_path= "C:\Users\wtgd5\Downloads/DEE_REMIX.mp4";

// $file_size = filesize($file_path);

// $size_mega= round(($file_size/1024)/1024);
// $size_kb= round($file_size/1024);


// echo "Size In Megabyte Is" . $size_mega . "<br>";
// echo "Size In Kilobyte Is" . $size_kb;

// Output


// " 32"
// "Size In  Is 33261"




$dir1="Programming";
$dir2= "PHP";


// mkdir($dir1,0700);
// chmod($dir1,0700);
// mkdir("$dir1/$dir2",0700);
// chmod("$dir1/$dir2",0700);
// echo "diretory created ";

// Programming 
// PHP
// Output
// "Directory Programming/PHP Removed"
// "Directory Programming Removed"

// if (is_dir("$dir1/$dir2")) {
// rmdir("$dir1/$dir2");
// echo "directory php removed ";
// }

// if (is_dir($dir1)) {
// rmdir($dir1);
// echo "directory programming removed ";

// }

// Test Cases


// function change_permissions($file_name) {

//     if (is_dir($file_name)) {
//     echo  " This Is Directory And Only Files Allowed" . "<br>";
//     }

//     $ext=pathinfo($file_name,PATHINFO_EXTENSION );
//     if ($ext!="txt") {
//         echo "File Extension Is Not Txt" . "<br>";
//     }

//     $per= fileperms($file_name);

//     $owner= 0700;
//     $other=0000;
//     chmod($file_name,$owner);
//     $new_per=fileperms($file_name);
//     if ($new_per===$per) {
//         echo "Permissions  Changed" . "<br>";
    
//     }else {
//         chmod($file_name,$per);
//     }
// }
// echo change_permissions("Elzero"); // This Is Directory And Only Files Allowed
// echo change_permissions("Work.docx"); // File Extension Is Not Txt
// echo change_permissions("Result.txt"); // Permissions Changed

// echo basename($_SERVER["PHP_SELF"]);
// echo basename($_SERVER["SCRIPT_FILENAME"]);
// echo basename($_SERVER["SCRIPT_NAME"]);


// elzero.txt Content
// Hello Elzero Web
// School
// No Need To Read

// // Needed Output
// "Hello Elzero Web School"
// "Hello Elzero Web School"
// "Hello Elzero Web School"
// "Hello Elzero Web School"

// $file = fopen("elzero.txt","r");
// echo fgets($file,) . fgets($file);

// fclose($file);


// $file= file("elzero.txt",FILE_IGNORE_NEW_LINES);


// echo implode(" ", array_slice($file,0,2));



// $file =file_get_contents("elzero.txt");

// echo implode(" " , array_slice(explode(PHP_EOL,$file),0,2)) ;







// $file="elzero.txt";



// $content= file_get_contents($file);


// $content=str_replace("Osamaa","Elzero", $content);

// echo $content;
// elzero.txt Content
// Hello Osamaa Web
// School

// // elzero.txt New Content
// Hello Elzero Web
// School
