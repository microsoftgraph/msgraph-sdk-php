<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationAssignmentPointsGrade File
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
* EducationAssignmentPointsGrade class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class EducationAssignmentPointsGrade extends EducationAssignmentGrade
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.educationAssignmentPointsGrade");
    }


    /**
    * Gets the points
    *
    * @return Single The points
    */
    public function getPoints()
    {
        if (array_key_exists("points", $this->_propDict)) {
            if (is_a($this->_propDict["points"], "Microsoft\Graph\Beta\Model\Single")) {
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
