<?php namespace Bantenprov\TaskManagement;

/**
 * The TaskManagement class.
 *
 * @package Bantenprov\TaskManagement
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class TaskManagement
{    

    public function staf($method,$data,$data2)
    {
        $class = config('task-management.controller.staf');
        $controller = new $class;        

        if(is_array($data) && is_array($data2)){
            if(empty($data) && empty($data2)){
                return $controller->$method();
            }else{
                if(empty($data) && !empty($data2)){
                    return $controller->$method($data,$data2);
                }else{
                    return $controller->$method($data);
                }
                
            }
        }else{
            if(empty($data) && empty($data2)){
                return $controller->$method();
            }else{
                if(!empty($data) && !empty($data2)){                    
                    return $controller->$method($data,$data2);
                }else{                    
                    return $controller->$method($data);
                }
                
            }
        }
        
    }

    public function member($method,$data,$data2)
    {
        $class = config('task-management.controller.member');
        $controller = new $class;
        if(is_array($data) && is_array($data2)){
            if(empty($data) && empty($data2)){
                return $controller->$method();
            }else{
                if(empty($data) && !empty($data2)){
                    return $controller->$method($data,$data2);
                }else{
                    return $controller->$method($data);
                }
                
            }
        }else{
            if(empty($data) && empty($data2)){
                return $controller->$method();
            }else{
                if(!empty($data) && !empty($data2)){                    
                    return $controller->$method($data,$data2);
                }else{                    
                    return $controller->$method($data);
                }
                
            }
        }
        
    }

    public function project($method,$data,$data2)
    {
        $class = config('task-management.controller.project');
        $controller = new $class;
        if(is_array($data) && is_array($data2)){
            if(empty($data) && empty($data2)){
                return $controller->$method();
            }else{
                if(empty($data) && !empty($data2)){
                    return $controller->$method($data,$data2);
                }else{
                    return $controller->$method($data);
                }
                
            }
        }else{
            if(empty($data) && empty($data2)){
                return $controller->$method();
            }else{
                if(!empty($data) && !empty($data2)){                    
                    return $controller->$method($data,$data2);
                }else{                    
                    return $controller->$method($data);
                }
                
            }
        }
        
    }

    public function comment($method,$data,$data2)
    {
        $class = config('task-management.controller.comment');
        $controller = new $class;

        if(is_array($data) && is_array($data2)){
            if(empty($data) && empty($data2)){
                return $controller->$method();
            }else{
                if(empty($data) && !empty($data2)){
                    return $controller->$method($data,$data2);
                }else{
                    return $controller->$method($data);
                }
                
            }
        }else{
            if(empty($data) && empty($data2)){
                return $controller->$method();
            }else{
                if(!empty($data) && !empty($data2)){                    
                    return $controller->$method($data,$data2);
                }else{                    
                    return $controller->$method($data);
                }
                
            }
        }
        
    }

    public function task($method,$data,$data2)
    {
        $class = config('task-management.controller.task');
        $controller = new $class;

        if(is_array($data) && is_array($data2)){
            if(empty($data) && empty($data2)){
                return $controller->$method();
            }else{
                if(empty($data) && !empty($data2)){
                    return $controller->$method($data,$data2);
                }else{
                    return $controller->$method($data);
                }
                
            }
        }else{
            if(empty($data) && empty($data2)){
                return $controller->$method();
            }else{
                if(!empty($data) && !empty($data2)){                    
                    return $controller->$method($data,$data2);
                }else{                    
                    return $controller->$method($data);
                }
                
            }
        }

        
        
    }

    public function welcome()
    {
        return 'Welcome to Bantenprov\TaskManagement package';
    }
}
