<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PublicErrorResponse File
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
* PublicErrorResponse class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PublicErrorResponse extends Entity
{

    /**
    * Gets the error
    *
    * @return PublicError The error
    */
    public function getError()
    {
        if (array_key_exists("error", $this->_propDict)) {
            if (is_a($this->_propDict["error"], "Beta\Microsoft\Graph\Model\PublicError")) {
                return $this->_propDict["error"];
            } else {
                $this->_propDict["error"] = new PublicError($this->_propDict["error"]);
                return $this->_propDict["error"];
            }
        }
        return null;
    }

    /**
    * Sets the error
    *
    * @param PublicError $val The value to assign to the error
    *
    * @return PublicErrorResponse The PublicErrorResponse
    */
    public function setError($val)
    {
        $this->_propDict["error"] = $val;
         return $this;
    }
}
