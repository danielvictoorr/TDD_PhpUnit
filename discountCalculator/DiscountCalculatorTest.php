<?php

class DiscountCalculatorTest {

    public function ShouldApply_WhenValueIsAbovetheMinimumTest() {

        $discountCalculator = new DiscountCalculator();

        $totalValue =130;

        $totalWhithDiscount = $discountCalculator->apply($totalValue );
    
        $expectedValue = 110;
        $this->assertEquals($expectedValue, $totalWhithDiscount);
    }

    public function ShouldNotApply_WhenValueIsBellowtheMinimumTest() {

        $discountCalculator = new DiscountCalculator();

        $totalValue =90;

        $totalWhithDiscount = $discountCalculator->apply($totalValue );
    
        $expectedValue = 90;
        $this->assertEquals($expectedValue, $totalWhithDiscount);
    }

    public function assertEquals($expectedValue, $actualValue){
    
        if($expectedValue != $actualValue){
            $message = 'Expected ' . $expectedValue . ' but got ' . $actualValue;
            throw new \Exception($message);
        }

        echo "Test passed!\n";
    }
}