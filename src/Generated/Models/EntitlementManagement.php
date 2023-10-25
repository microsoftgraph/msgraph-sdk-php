<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class EntitlementManagement extends Entity implements Parsable 
{
    /**
     * Instantiates a new entitlementManagement and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EntitlementManagement
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EntitlementManagement {
        return new EntitlementManagement();
    }

    /**
     * Gets the accessPackageAssignmentApprovals property value. Approval stages for decisions associated with access package assignment requests.
     * @return array<Approval>|null
    */
    public function getAccessPackageAssignmentApprovals(): ?array {
        $val = $this->getBackingStore()->get('accessPackageAssignmentApprovals');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Approval::class);
            /** @var array<Approval>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackageAssignmentApprovals'");
    }

    /**
     * Gets the accessPackages property value. Access packages define the collection of resource roles and the policies for which subjects can request or be assigned access to those resources.
     * @return array<AccessPackage>|null
    */
    public function getAccessPackages(): ?array {
        $val = $this->getBackingStore()->get('accessPackages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessPackage::class);
            /** @var array<AccessPackage>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackages'");
    }

    /**
     * Gets the assignmentPolicies property value. Access package assignment policies govern which subjects can request or be assigned an access package via an access package assignment.
     * @return array<AccessPackageAssignmentPolicy>|null
    */
    public function getAssignmentPolicies(): ?array {
        $val = $this->getBackingStore()->get('assignmentPolicies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessPackageAssignmentPolicy::class);
            /** @var array<AccessPackageAssignmentPolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignmentPolicies'");
    }

    /**
     * Gets the assignmentRequests property value. Access package assignment requests created by or on behalf of a subject.
     * @return array<AccessPackageAssignmentRequest>|null
    */
    public function getAssignmentRequests(): ?array {
        $val = $this->getBackingStore()->get('assignmentRequests');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessPackageAssignmentRequest::class);
            /** @var array<AccessPackageAssignmentRequest>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignmentRequests'");
    }

    /**
     * Gets the assignments property value. The assignment of an access package to a subject for a period of time.
     * @return array<AccessPackageAssignment>|null
    */
    public function getAssignments(): ?array {
        $val = $this->getBackingStore()->get('assignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessPackageAssignment::class);
            /** @var array<AccessPackageAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignments'");
    }

    /**
     * Gets the catalogs property value. A container for access packages.
     * @return array<AccessPackageCatalog>|null
    */
    public function getCatalogs(): ?array {
        $val = $this->getBackingStore()->get('catalogs');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessPackageCatalog::class);
            /** @var array<AccessPackageCatalog>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'catalogs'");
    }

    /**
     * Gets the connectedOrganizations property value. References to a directory or domain of another organization whose users can request access.
     * @return array<ConnectedOrganization>|null
    */
    public function getConnectedOrganizations(): ?array {
        $val = $this->getBackingStore()->get('connectedOrganizations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ConnectedOrganization::class);
            /** @var array<ConnectedOrganization>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'connectedOrganizations'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessPackageAssignmentApprovals' => fn(ParseNode $n) => $o->setAccessPackageAssignmentApprovals($n->getCollectionOfObjectValues([Approval::class, 'createFromDiscriminatorValue'])),
            'accessPackages' => fn(ParseNode $n) => $o->setAccessPackages($n->getCollectionOfObjectValues([AccessPackage::class, 'createFromDiscriminatorValue'])),
            'assignmentPolicies' => fn(ParseNode $n) => $o->setAssignmentPolicies($n->getCollectionOfObjectValues([AccessPackageAssignmentPolicy::class, 'createFromDiscriminatorValue'])),
            'assignmentRequests' => fn(ParseNode $n) => $o->setAssignmentRequests($n->getCollectionOfObjectValues([AccessPackageAssignmentRequest::class, 'createFromDiscriminatorValue'])),
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([AccessPackageAssignment::class, 'createFromDiscriminatorValue'])),
            'catalogs' => fn(ParseNode $n) => $o->setCatalogs($n->getCollectionOfObjectValues([AccessPackageCatalog::class, 'createFromDiscriminatorValue'])),
            'connectedOrganizations' => fn(ParseNode $n) => $o->setConnectedOrganizations($n->getCollectionOfObjectValues([ConnectedOrganization::class, 'createFromDiscriminatorValue'])),
            'resourceEnvironments' => fn(ParseNode $n) => $o->setResourceEnvironments($n->getCollectionOfObjectValues([AccessPackageResourceEnvironment::class, 'createFromDiscriminatorValue'])),
            'resourceRequests' => fn(ParseNode $n) => $o->setResourceRequests($n->getCollectionOfObjectValues([AccessPackageResourceRequest::class, 'createFromDiscriminatorValue'])),
            'resourceRoleScopes' => fn(ParseNode $n) => $o->setResourceRoleScopes($n->getCollectionOfObjectValues([AccessPackageResourceRoleScope::class, 'createFromDiscriminatorValue'])),
            'resources' => fn(ParseNode $n) => $o->setResources($n->getCollectionOfObjectValues([AccessPackageResource::class, 'createFromDiscriminatorValue'])),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getObjectValue([EntitlementManagementSettings::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the resourceEnvironments property value. A reference to the geolocation environments in which a resource is located.
     * @return array<AccessPackageResourceEnvironment>|null
    */
    public function getResourceEnvironments(): ?array {
        $val = $this->getBackingStore()->get('resourceEnvironments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessPackageResourceEnvironment::class);
            /** @var array<AccessPackageResourceEnvironment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceEnvironments'");
    }

    /**
     * Gets the resourceRequests property value. Represents a request to add or remove a resource to or from a catalog respectively.
     * @return array<AccessPackageResourceRequest>|null
    */
    public function getResourceRequests(): ?array {
        $val = $this->getBackingStore()->get('resourceRequests');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessPackageResourceRequest::class);
            /** @var array<AccessPackageResourceRequest>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceRequests'");
    }

    /**
     * Gets the resourceRoleScopes property value. The resourceRoleScopes property
     * @return array<AccessPackageResourceRoleScope>|null
    */
    public function getResourceRoleScopes(): ?array {
        $val = $this->getBackingStore()->get('resourceRoleScopes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessPackageResourceRoleScope::class);
            /** @var array<AccessPackageResourceRoleScope>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceRoleScopes'");
    }

    /**
     * Gets the resources property value. The resources associated with the catalogs.
     * @return array<AccessPackageResource>|null
    */
    public function getResources(): ?array {
        $val = $this->getBackingStore()->get('resources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessPackageResource::class);
            /** @var array<AccessPackageResource>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resources'");
    }

    /**
     * Gets the settings property value. The settings that control the behavior of Microsoft Entra entitlement management.
     * @return EntitlementManagementSettings|null
    */
    public function getSettings(): ?EntitlementManagementSettings {
        $val = $this->getBackingStore()->get('settings');
        if (is_null($val) || $val instanceof EntitlementManagementSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settings'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('accessPackageAssignmentApprovals', $this->getAccessPackageAssignmentApprovals());
        $writer->writeCollectionOfObjectValues('accessPackages', $this->getAccessPackages());
        $writer->writeCollectionOfObjectValues('assignmentPolicies', $this->getAssignmentPolicies());
        $writer->writeCollectionOfObjectValues('assignmentRequests', $this->getAssignmentRequests());
        $writer->writeCollectionOfObjectValues('assignments', $this->getAssignments());
        $writer->writeCollectionOfObjectValues('catalogs', $this->getCatalogs());
        $writer->writeCollectionOfObjectValues('connectedOrganizations', $this->getConnectedOrganizations());
        $writer->writeCollectionOfObjectValues('resourceEnvironments', $this->getResourceEnvironments());
        $writer->writeCollectionOfObjectValues('resourceRequests', $this->getResourceRequests());
        $writer->writeCollectionOfObjectValues('resourceRoleScopes', $this->getResourceRoleScopes());
        $writer->writeCollectionOfObjectValues('resources', $this->getResources());
        $writer->writeObjectValue('settings', $this->getSettings());
    }

    /**
     * Sets the accessPackageAssignmentApprovals property value. Approval stages for decisions associated with access package assignment requests.
     * @param array<Approval>|null $value Value to set for the accessPackageAssignmentApprovals property.
    */
    public function setAccessPackageAssignmentApprovals(?array $value): void {
        $this->getBackingStore()->set('accessPackageAssignmentApprovals', $value);
    }

    /**
     * Sets the accessPackages property value. Access packages define the collection of resource roles and the policies for which subjects can request or be assigned access to those resources.
     * @param array<AccessPackage>|null $value Value to set for the accessPackages property.
    */
    public function setAccessPackages(?array $value): void {
        $this->getBackingStore()->set('accessPackages', $value);
    }

    /**
     * Sets the assignmentPolicies property value. Access package assignment policies govern which subjects can request or be assigned an access package via an access package assignment.
     * @param array<AccessPackageAssignmentPolicy>|null $value Value to set for the assignmentPolicies property.
    */
    public function setAssignmentPolicies(?array $value): void {
        $this->getBackingStore()->set('assignmentPolicies', $value);
    }

    /**
     * Sets the assignmentRequests property value. Access package assignment requests created by or on behalf of a subject.
     * @param array<AccessPackageAssignmentRequest>|null $value Value to set for the assignmentRequests property.
    */
    public function setAssignmentRequests(?array $value): void {
        $this->getBackingStore()->set('assignmentRequests', $value);
    }

    /**
     * Sets the assignments property value. The assignment of an access package to a subject for a period of time.
     * @param array<AccessPackageAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the catalogs property value. A container for access packages.
     * @param array<AccessPackageCatalog>|null $value Value to set for the catalogs property.
    */
    public function setCatalogs(?array $value): void {
        $this->getBackingStore()->set('catalogs', $value);
    }

    /**
     * Sets the connectedOrganizations property value. References to a directory or domain of another organization whose users can request access.
     * @param array<ConnectedOrganization>|null $value Value to set for the connectedOrganizations property.
    */
    public function setConnectedOrganizations(?array $value): void {
        $this->getBackingStore()->set('connectedOrganizations', $value);
    }

    /**
     * Sets the resourceEnvironments property value. A reference to the geolocation environments in which a resource is located.
     * @param array<AccessPackageResourceEnvironment>|null $value Value to set for the resourceEnvironments property.
    */
    public function setResourceEnvironments(?array $value): void {
        $this->getBackingStore()->set('resourceEnvironments', $value);
    }

    /**
     * Sets the resourceRequests property value. Represents a request to add or remove a resource to or from a catalog respectively.
     * @param array<AccessPackageResourceRequest>|null $value Value to set for the resourceRequests property.
    */
    public function setResourceRequests(?array $value): void {
        $this->getBackingStore()->set('resourceRequests', $value);
    }

    /**
     * Sets the resourceRoleScopes property value. The resourceRoleScopes property
     * @param array<AccessPackageResourceRoleScope>|null $value Value to set for the resourceRoleScopes property.
    */
    public function setResourceRoleScopes(?array $value): void {
        $this->getBackingStore()->set('resourceRoleScopes', $value);
    }

    /**
     * Sets the resources property value. The resources associated with the catalogs.
     * @param array<AccessPackageResource>|null $value Value to set for the resources property.
    */
    public function setResources(?array $value): void {
        $this->getBackingStore()->set('resources', $value);
    }

    /**
     * Sets the settings property value. The settings that control the behavior of Microsoft Entra entitlement management.
     * @param EntitlementManagementSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?EntitlementManagementSettings $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

}
