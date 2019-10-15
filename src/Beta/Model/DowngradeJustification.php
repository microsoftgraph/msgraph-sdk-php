<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DowngradeJustification File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* DowngradeJustification class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DowngradeJustification extends Entity
{
    /**
    * Gets the justificationMessage
    *
    * @return string The justificationMessage
    */
    public function getJustificationMessage()
    {
        if (array_key_exists("justificationMessage", $this->_propDict)) {
            return $this->_propDict["justificationMessage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the justificationMessage
    *
    * @param string $val The value of the justificationMessage
    *
    * @return DowngradeJustification
    */
    public function setJustificationMessage($val)
    {
        $this->_propDict["justificationMessage"] = $val;
        return $this;
    }
    /**
    * Gets the isDowngradeJustified
    *
    * @return bool The isDowngradeJustified
    */
    public function getIsDowngradeJustified()
    {
        if (array_key_exists("isDowngradeJustified", $this->_propDict)) {
            return $this->_propDict["isDowngradeJustified"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isDowngradeJustified
    *
    * @param bool $val The value of the isDowngradeJustified
    *
    * @return DowngradeJustification
    */
    public function setIsDowngradeJustified($val)
    {
        $this->_propDict["isDowngradeJustified"] = $val;
        return $this;
    }
}
