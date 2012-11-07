<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of calculator
 *
 * @author Jagadees
 */
class calculator {
    //put your code heres
    /**
     * @assert (0, 0) == 0
     * @assert (0, 1) == 1
     * @assert (1, 0) == 1
     * @assert (1, 1) == 2     
     * @assert (1, 2) == 3
     */
    public function add($a, $b) {
        return $a+$b;
    }
    
    /**
     * @assert (0, 0) == 0
     * @assert (2, 1) == 1
     * @assert (1, 2) == -1
     */
    public function sub($a,$b) {
        return $a-$b;
    }
}

?>
