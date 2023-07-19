<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ForwardingOptions File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Networkaccess\Model;

/**
* ForwardingOptions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ForwardingOptions extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the skipDnsLookupState
    * Dns lookup options. The possible values are: enabled, disabled.
    *
    * @return Status|null The skipDnsLookupState
    */
    public function getSkipDnsLookupState()
    {
        if (array_key_exists("skipDnsLookupState", $this->_propDict)) {
            if (is_a($this->_propDict["skipDnsLookupState"], "\Beta\Microsoft\Graph\Networkaccess\Model\Status") || is_null($this->_propDict["skipDnsLookupState"])) {
                return $this->_propDict["skipDnsLookupState"];
            } else {
                $this->_propDict["skipDnsLookupState"] = new Status($this->_propDict["skipDnsLookupState"]);
                return $this->_propDict["skipDnsLookupState"];
            }
        }
        return null;
    }

    /**
    * Sets the skipDnsLookupState
    * Dns lookup options. The possible values are: enabled, disabled.
    *
    * @param Status $val The skipDnsLookupState
    *
    * @return ForwardingOptions
    */
    public function setSkipDnsLookupState($val)
    {
        $this->_propDict["skipDnsLookupState"] = $val;
        return $this;
    }

}
