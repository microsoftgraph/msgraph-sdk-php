<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationAssignmentPointsGrade File
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
* EducationAssignmentPointsGrade class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class EducationAssignmentPointsGrade extends EducationAssignmentGrade
{

    /**
    * Gets the points
    *
    * @return Single The points
    */
    public function getPoints()
    {
        if (array_key_exists("points", $this->_propDict)) {
            if (is_a($this->_propDict["points"], "Microsoft\Graph\Model\Single")) {
                return $this->_propDict["points"];
            } else {
                $this->_propDict["points"] = new Single($this->_propDict["points"]);
                return $this->_propDict["points"];
            }
        }
        return null;
    }

    /**
    * Sets the points
    *
    * @param Single $val The value to assign to the points
    *
    * @return EducationAssignmentPointsGrade The EducationAssignmentPointsGrade
    */
    public function setPoints($val)
    {
        $this->_propDict["points"] = $val;
         return $this;
    }
}
