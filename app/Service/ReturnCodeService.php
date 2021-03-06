<?php
/**
 * 2017年11月24日12:03:25
 * Angela 
 * 功能:定义状态码
 * 
 */
namespace App\Service;

class ReturnCodeService extends CommonService{
    
    static $codeMessage = [
        200 => '请求成功',
        400 => '请求失败，请重试',
        500 => '恭喜您，添加成功',
        600 => '很抱歉，添加失败',
        888 => '很抱歉，请重新登录',
        999 => '很抱歉, 您没有权限！',
        
        
        //用户登录相关  100 开头的
        100400 =>'用户名或者密码错误',
        100200 =>'恭喜您，登录成功',
        100300 =>'请求超时，请登录',
        100900 =>'恭喜您，新增管理员成功',
        100500 =>'很抱歉，新增管理员失败',
        100600 =>'恭喜您，修改成功',
        100100 =>'很抱歉，修改失败',
        100700 =>'很抱歉，您未修改',
        100800 =>'很正确，删除成功',
        100810 =>'很正确，重置密码成功',
        100601 =>'很抱歉，当前密码错误',
        100602 =>'很抱歉，确认密码错误',
        
        //学生管理相关 200 开头的 
        200200 =>'恭喜您，新增学生成功',
        200400 =>'很抱歉，新增学生失败',
        200500 =>'很正确，删除学生成功',
        200300 =>'恭喜您，修改学生成功',
        200600 =>'很抱歉，修改学生失败',
        200700 =>'很抱歉，录入成绩格式有误',
        201700 =>'很抱歉，已录入成绩',
        200800 =>'恭喜您，录入成绩成功',
        200900 =>'很抱歉，录入成绩失败',
        200901 =>'很抱歉，该学生已经录过成绩',
        200902 =>'很抱歉，修改成绩失败',
        200903 =>'恭喜您，修改成绩成功',
        200905 =>'很正确，删除成绩成功',
        
        //导师相关 300 开头的
        300200 =>'恭喜您，新增导师成功',
        300400 =>'很抱歉，新增导师失败',
        300500 =>'很正确，删除导师成功',
        300300 =>'恭喜您，修改导师成功',
        300600 =>'很抱歉，修改导师失败',
        
        //教师相关 400开头的
        400200 =>'恭喜您，新增教师成功',
        400400 =>'很抱歉，新增教师失败',
        400500 =>'很正确，删除教师成功',
        400300 =>'恭喜您，修改教师成功',
        400600 =>'很抱歉，修改教师失败',
        
        //课程相关 500 开头
        500200 =>'恭喜您，新增课程成功',
        500400 =>'很抱歉，新增课程失败',
        500500 =>'很正确，删除课程成功',
        500300 =>'恭喜您，修改课程成功',
        500600 =>'很抱歉，修改课程失败',
        500700 =>'很抱歉，安排课程失败',
        500800 =>'恭喜您，安排课程成功',
        500900 =>'很抱歉，教师已经在同一时间安排课程',
        500101 =>'很抱歉，教室已经在同一时间安排课程',
        500102 =>'恭喜您，安排课程成功',
        
        // 选课相关 600 开头
        600200 =>'恭喜您，新增选课成功',
        600400 =>'很抱歉，新增选课失败',
        600900 =>'很抱歉，学生已经选择该课程',
        600100 =>'很抱歉，请勿擅自修改信息',
        600101 =>'恭喜您，该学生已经通过答辩',
        
        
        
        // 开题相关 700 开头
        700200 =>'恭喜您，新增题目成功',
        700400 =>'很抱歉，新增题目失败',
        700500 =>'很正确，删除题目成功',
        700300 =>'恭喜您，修改题目成功',
        700600 =>'很抱歉，修改题目失败',
        700700 =>'恭喜您，操作题目成功',
        700900 =>'很遗憾，学生已经存在该题目',
        
         // 开题相关 800 开头
        800200 =>'恭喜您，新增答辩成功',
        800400 =>'很抱歉，新增答辩失败',
        800500 =>'很正确，删除答辩成功',
        800300 =>'恭喜您，修改答辩成功',
        800600 =>'很抱歉，修改答辩失败',
        800700 =>'恭喜您，操作答辩成功',
        800900 =>'很遗憾，学生已经存在该答辩题目',
        
         // 权限相关 800 开头
        900200 =>'恭喜您，新增权限成功',
        900400 =>'很抱歉，新增权限失败',
        900500 =>'很正确，删除权限成功',
        900300 =>'恭喜您，修改权限成功',
        900600 =>'很抱歉，修改权限失败',
        900700 =>'恭喜您，操作权限成功',
        900900 =>'很遗憾，已经存在该权限',
        900901 =>'恭喜您，角色授权成功',
        900902 =>'很抱歉，角色授权失败',
        
        //角色相关  101 开头
        101400 =>'恭喜您，新增角色成功',
        101500 =>'很抱歉，新增角色失败',
        101600 =>'恭喜您，角色修改成功',
        101500 =>'很抱歉，角色修改失败',
        101700 =>'很抱歉，角色您未修改',
        101800 =>'很正确，角色删除成功',
        
         //菜单相关  102 开头
        102200 =>'恭喜您，新增菜单成功',
        102400 =>'很抱歉，新增菜单失败',
        102600 =>'恭喜您，菜单修改成功',
        102500 =>'很抱歉，菜单修改失败',
        102700 =>'很抱歉，菜单您未修改',
        102800 =>'很正确，菜单删除成功',
        
        // 网站信息 103 开头
        103200 =>'恭喜您，新增配置成功',
        103400 =>'很抱歉，新增配置失败',
        103600 =>'恭喜您，配置修改成功',
        103500 =>'很抱歉，配置修改失败',
        103700 =>'很抱歉，配置您未修改',
        103800 =>'很正确，配置删除成功',
        
        // 学期信息 104 开头
        104200 =>'恭喜您，新增学期成功',
        104400 =>'很抱歉，新增学期失败',
        104600 =>'恭喜您，学期修改成功',
        104500 =>'很抱歉，学期修改失败',
        104700 =>'很抱歉，学期您未修改',
        104800 =>'很正确，学期删除成功',
        
         // 导师类型信息 104 开头
        106200 =>'恭喜您，新增导师类型成功',
        106300 =>'很抱歉，新增导师类型失败',
        106400 =>'恭喜您，导师类型修改成功',
        106500 =>'很抱歉，导师类型修改失败',
        106600 =>'很抱歉，导师类型您未修改',
        106700 =>'很正确，导师类型删除成功',
        
        // 课程相关 105 开头
        105200 =>'恭喜您，操作成功',
        105400 =>'很抱歉，操作失败',
        105800 =>'很正确，删除成功',
    ];
    
    /**
     * @param int $code 状态码
     */
    static function getMessage(int $code){
        if($code){
            $message = self::$codeMessage;
            return $message[$code];
        }else{
            throw new \Exception("Code 404 Not Found");
        }
       
    }
    
}