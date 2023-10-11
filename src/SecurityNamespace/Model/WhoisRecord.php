<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WhoisRecord File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\SecurityNamespace\Model;

/**
* WhoisRecord class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WhoisRecord extends WhoisBaseRecord
{

     /**
     * Gets the history
    * The collection of historical records associated to this WHOIS object.
     *
     * @return array|null The history
     */
    public function getHistory()
    {
        if (array_key_exists("history", $this->_propDict)) {
           return $this->_propDict["history"];
        } else {
            return null;
        }
    }

    /**
    * Sets the history
    * The collection of historical records associated to this WHOIS object.
    *
    * @param WhoisHistoryRecord[] $val The history
    *
    * @return WhoisRecord
    */
    public function setHistory($val)
    {
        $this->_propDict["history"] = $val;
        return $this;
    }

}
