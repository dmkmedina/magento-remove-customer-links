<?php
/*
 * Simple class to add the functionality to remove a customer account link from the sidebar
 * through the local.xml rather then editing the core files.
 */
class Developmint_CustomerLinks_Block_Account_Navigation extends Mage_Customer_Block_Account_Navigation
{

    public function removeLinkByName($name)
    {
        unset($this->_links[$name]);
    }
}
