<?php

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2012-11-07 at 11:21:03.
 */
require_once '../calculator.php';
class calculatorTest extends PHPUnit_Framework_TestCase {

    /**
     * @var calculator
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new calculator;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }
    
    public function testSub() {
        $this->assertEquals(
                0,
                $this->object->sub(0,0)
        );
    }

    public function testSub1() {
        $this->assertEquals(
                1,
                $this->object->sub(2,1)
        );
    }
    
    public function testSub2() {
        $this->assertEquals(
                -1,
                $this->object->sub(1,2)
        );
    }
    
    /**
     * Generated from @assert (0, 0) == 0.
     *
     * @covers calculator::add
     */
    public function testAdd() {
        $this->assertEquals(
                0
                , $this->object->add( 0, 0)
        );
        }

        /**
         * Generated from @assert (0, 1) == 1.
         *
         * @covers calculator::add
         */
        public function testAdd2() {
            $this->assertEquals(
                     1
                    ,
                    $this->object->add (0, 1)
            );
            }

            /**
             * Generated from @assert (1, 0) == 1.
             *
             * @covers calculator::add
             */
            public function testAdd3() {
                $this->assertEquals(
                         1
                        ,
                        $this->object->add (1, 0)
                );
                }

                /**
                 * Generated from @assert (1, 1) == 2.
                 *
                 * @covers calculator::add
                 */
                public function testAdd4() {
                    $this->assertEquals(
                             2
                            ,
                            $this->object-> add(1, 1)
                    );
                    }

                    /**
                     * Generated from @assert (1, 2) == 3.
                     *
                     * @covers calculator::add
                     */
                    public function testAdd5() {
                        $this->assertEquals(
                                 3
                                ,
                                $this->object-> add(1, 2)
                        );
                        }
}
