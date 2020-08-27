<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BookingCurrency File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* BookingCurrency class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BookingCurrency extends Entity
{
    /**
    * Gets the symbol
    *
    * @return string The symbol
    */
    public function getSymbol()
    {
        if (array_key_exists("symbol", $this->_propDict)) {
            return $this->_propDict["symbol"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the symbol
    *
    * @param string $val The symbol
    *
    * @return BookingCurrency
    */
    public function setSymbol($val)
    {
        $this->_propDict["symbol"] = $val;
        return $this;
    }
    
}