<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TunnelConfiguration File
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
* TunnelConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TunnelConfiguration extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the preSharedKey
    *
    * @return string|null The preSharedKey
    */
    public function getPreSharedKey()
    {
        if (array_key_exists("preSharedKey", $this->_propDict)) {
            return $this->_propDict["preSharedKey"];
        } else {
            return null;
        }
    }

    /**
    * Sets the preSharedKey
    *
    * @param string $val The value of the preSharedKey
    *
    * @return TunnelConfiguration
    */
    public function setPreSharedKey($val)
    {
        $this->_propDict["preSharedKey"] = $val;
        return $this;
    }
}
