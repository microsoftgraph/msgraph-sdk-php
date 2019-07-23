<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ClassificationError File
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
* ClassificationError class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ClassificationError extends ClassifcationErrorBase
{

    /**
    * Gets the details
    *
    * @return ClassifcationErrorBase The details
    */
    public function getDetails()
    {
        if (array_key_exists("details", $this->_propDict)) {
            if (is_a($this->_propDict["details"], "Microsoft\Graph\Beta\Model\ClassifcationErrorBase")) {
                return $this->_propDict["details"];
            } else {
                $this->_propDict["details"] = new ClassifcationErrorBase($this->_propDict["details"]);
                return $this->_propDict["details"];
            }
        }
        return null;
    }

    /**
    * Sets the details
    *
    * @param ClassifcationErrorBase $val The value to assign to the details
    *
    * @return ClassificationError The ClassificationError
    */
    public function setDetails($val)
    {
        $this->_propDict["details"] = $val;
         return $this;
    }
}
