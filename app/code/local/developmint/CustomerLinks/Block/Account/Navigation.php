<?php
/*
 * Simple class to add the functionality to remove a customer account link from the sidebar
 * through the local.xml rather then editing the core files.
 */
class Developmint_CustomerLinks_Block_Account_Navigation extends Mage_Customer_Block_Account_Navigation
{

    /*
     * This function is called from within the Layout XML, it removes a link from the
     * customer account navigation area.
     */
    public function removeLinkByName($name)
    {
        unset($this->_links[$name]);
    }
}
