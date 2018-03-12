<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CaasError File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* CaasError class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class CaasError extends CaasChildError
{

    /**
    * Gets the details
    *
    * @return CaasChildError The details
    */
    public function getDetails()
    {
        if (array_key_exists("details", $this->_propDict)) {
            if (is_a($this->_propDict["details"], "Microsoft\Graph\Model\CaasChildError")) {
                return $this->_propDict["details"];
            } else {
                $this->_propDict["details"] = new CaasChildError($this->_propDict["details"]);
                return $this->_propDict["details"];
            }
        }
        return null;
    }

    /**
    * Sets the details
    *
    * @param CaasChildError $val The value to assign to the details
    *
    * @return CaasError The CaasError
    */
    public function setDetails($val)
    {
        $this->_propDict["details"] = $val;
         return $this;
    }
}
