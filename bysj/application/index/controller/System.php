<?php
/**
 * Created by IntelliJ IDEA.
 * User: lyp09
 * Date: 2018/4/19
 * Time: 15:04
 */

namespace app\index\controller;


use app\commons\base;

class System extends base
{
    public function systems(){
        return $this->fetch('systems');
    }

    public function systemSection(){
        return $this->fetch('systemSection');
    }

    public function systemLogs(){
        return $this->fetch('systemLogs');
    }
}