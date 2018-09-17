<?php
/**
 * Interface Sellable
 * @author nml
 * example from textbook, Doyle, 2010
 */
interface Sellable {
    public function addStock( $numItems );
    public function sellItem();
    public function getStockLevel();
}
