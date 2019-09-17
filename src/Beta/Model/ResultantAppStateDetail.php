<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ResultantAppStateDetail File
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

use Microsoft\Graph\Core\Enum;

/**
* ResultantAppStateDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ResultantAppStateDetail extends Enum
{
    /**
    * The Enum ResultantAppStateDetail
    */
    const NO_ADDITIONAL_DETAILS = "noAdditionalDetails";
    const DEPENDENCY_FAILED_TO_INSTALL = "dependencyFailedToInstall";
    const DEPENDENCY_WITH_REQUIREMENTS_NOT_MET = "dependencyWithRequirementsNotMet";
    const DEPENDENCY_PENDING_REBOOT = "dependencyPendingReboot";
    const DEPENDENCY_WITH_AUTO_INSTALL_DISABLED = "dependencyWithAutoInstallDisabled";
    const SEE_INSTALL_ERROR_CODE = "seeInstallErrorCode";
    const AUTO_INSTALL_DISABLED = "autoInstallDisabled";
    const SEE_UNINSTALL_ERROR_CODE = "seeUninstallErrorCode";
    const PENDING_REBOOT = "pendingReboot";
    const INSTALLING_DEPENDENCIES = "installingDependencies";
    const POWER_SHELL_SCRIPT_REQUIREMENT_NOT_MET = "powerShellScriptRequirementNotMet";
    const REGISTRY_REQUIREMENT_NOT_MET = "registryRequirementNotMet";
    const FILE_SYSTEM_REQUIREMENT_NOT_MET = "fileSystemRequirementNotMet";
    const PLATFORM_NOT_APPLICABLE = "platformNotApplicable";
    const MINIMUM_CPU_SPEED_NOT_MET = "minimumCpuSpeedNotMet";
    const MINIMUM_LOGICAL_PROCESSOR_COUNT_NOT_MET = "minimumLogicalProcessorCountNotMet";
    const MINIMUM_PHYSICAL_MEMORY_NOT_MET = "minimumPhysicalMemoryNotMet";
    const MINIMUM_OS_VERSION_NOT_MET = "minimumOsVersionNotMet";
    const MINIMUM_DISK_SPACE_NOT_MET = "minimumDiskSpaceNotMet";
    const PROCESSOR_ARCHITECTURE_NOT_APPLICABLE = "processorArchitectureNotApplicable";
}