<?php

class GolfBall implements Sellable {
    private $_color;
    private $_noinstock;
    private $_indents;

    public function getColor() {
        return $this->_color;
    }

    public function setColor( $color ) {
        $this->_color = $color;
    }

    public function addStock( $numItems ) {
        $this->_noinstock += $numItems;
    }

    public function sellItem() {
        $returnVal = false;
        if ( $this->_noinstock > 0 ) {
            $this->_noinstock--;
            $returnVal = true;
        }
        return $returnVal;
    }

    public function getStockLevel() {
        return $this->_noinstock;
    }
}
