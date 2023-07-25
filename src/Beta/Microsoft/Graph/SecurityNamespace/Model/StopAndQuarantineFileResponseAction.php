<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* StopAndQuarantineFileResponseAction File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;
/**
* StopAndQuarantineFileResponseAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class StopAndQuarantineFileResponseAction extends ResponseAction
{

    /**
    * Gets the identifier
    *
    * @return StopAndQuarantineFileEntityIdentifier|null The identifier
    */
    public function getIdentifier()
    {
        if (array_key_exists("identifier", $this->_propDict)) {
            if (is_a($this->_propDict["identifier"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\StopAndQuarantineFileEntityIdentifier") || is_null($this->_propDict["identifier"])) {
                return $this->_propDict["identifier"];
            } else {
                $this->_propDict["identifier"] = new StopAndQuarantineFileEntityIdentifier($this->_propDict["identifier"]);
                return $this->_propDict["identifier"];
            }
        }
        return null;
    }

    /**
    * Sets the identifier
    *
    * @param StopAndQuarantineFileEntityIdentifier $val The value to assign to the identifier
    *
    * @return StopAndQuarantineFileResponseAction The StopAndQuarantineFileResponseAction
    */
    public function setIdentifier($val)
    {
        $this->_propDict["identifier"] = $val;
         return $this;
    }
}
