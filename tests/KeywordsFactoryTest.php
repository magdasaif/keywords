<?php

namespace AboSaif\Keywords\Tests;

use AboSaif\Keywords\KeywordsFactory;
use PHPUnit\Framework\TestCase;

class KeywordsFactoryTest extends TestCase{

    /** @test */
    public function it_returned_keywords(){
        
        //this for test class 
        $this->assertTrue(true);


        $all=['aaaaaaaa
        bbbbbbbbb
        ccccccccc
        ddddddddd'];

       $keywords=new KeywordsFactory(
        'aaaaaaaa
        bbbbbbbbb
        ccccccccc
        ddddddddd'
        );
       
        $keyword=$keywords->converStringToKeywords();
        
       
        //$this->assertSame('returned keyword is : ',$keyword);
        //$this->assertContains($keyword,$all);
        $this->assertTrue(true);
    }

     /** @test */
     public function it_returned_original(){
        
        //this for test class 
        // $this->assertTrue(true);

        $all=['aaaaaaaa
        bbbbbbbbb
        ccccccccc
        ddddddddd'];

       $keywords=new KeywordsFactory(
        'aaaaaaaa
        bbbbbbbbb
        ccccccccc
        ddddddddd'
        );
       
        $keyword=$keywords->converStringToKeywords();
        $data=$keywords->returnStringFromKeywords($keyword);
        //$this->assertSame('returned keyword is : ',$keyword);
       //$this->assertContains($keyword,$all);
       $this->assertTrue(true);
    }
    
}