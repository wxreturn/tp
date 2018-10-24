<?php
/**********************************************************                                                                  
 *  
 *  FileName:  photo.php
 *
 *  Author:  wxreturn
 *
 *  Version:  1.0
 *
 *  DateTime:  2018年10月2日 - 下午11:11:29
 *
 *  Description:  读取文件中的所有文件重命名成指定格式的文件
 *
 **********************************************************/

die;

$filePathName = 'G:\photo';

//echo $filePathName;
$i = 1;
$extendName = '.png';
$prefix = 'wx';
$res = opendir($filePathName); 
while( ($hFile = readdir($res)) !== false)
{
    if ($hFile != '.' && $hFile!='..')
    {
        echo $hFile . '<br />';
        rename($filePathName . '\\'. $hFile, $filePathName . '\\' . $prefix . $i . $extendName);
        $i++;
    }
}
closedir($res);