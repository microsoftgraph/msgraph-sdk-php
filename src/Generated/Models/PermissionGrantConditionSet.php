<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PermissionGrantConditionSet extends Entity implements Parsable 
{
    /**
     * Instantiates a new permissionGrantConditionSet and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PermissionGrantConditionSet
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PermissionGrantConditionSet {
        return new PermissionGrantConditionSet();
    }

    /**
     * Gets the clientApplicationIds property value. A list of appId values for the client applications to match with, or a list with the single value all to match any client application. Default is the single value all.
     * @return array<string>|null
    */
    public function getClientApplicationIds(): ?array {
        return $this->getBackingStore()->get('clientApplicationIds');
    }

    /**
     * Gets the clientApplicationPublisherIds property value. A list of Microsoft Partner Network (MPN) IDs for verified publishers of the client application, or a list with the single value all to match with client apps from any publisher. Default is the single value all.
     * @return array<string>|null
    */
    public function getClientApplicationPublisherIds(): ?array {
        return $this->getBackingStore()->get('clientApplicationPublisherIds');
    }

    /**
     * Gets the clientApplicationsFromVerifiedPublisherOnly property value. Set to true to only match on client applications with a verified publisher. Set to false to match on any client app, even if it does not have a verified publisher. Default is false.
     * @return bool|null
    */
    public function getClientApplicationsFromVerifiedPublisherOnly(): ?bool {
        return $this->getBackingStore()->get('clientApplicationsFromVerifiedPublisherOnly');
    }

    /**
     * Gets the clientApplicationTenantIds property value. A list of Azure Active Directory tenant IDs in which the client application is registered, or a list with the single value all to match with client apps registered in any tenant. Default is the single value all.
     * @return array<string>|null
    */
    public function getClientApplicationTenantIds(): ?array {
        return $this->getBackingStore()->get('clientApplicationTenantIds');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'clientApplicationIds' => fn(ParseNode $n) => $o->setClientApplicationIds($n->getCollectionOfPrimitiveValues()),
            'clientApplicationPublisherIds' => fn(ParseNode $n) => $o->setClientApplicationPublisherIds($n->getCollectionOfPrimitiveValues()),
            'clientApplicationsFromVerifiedPublisherOnly' => fn(ParseNode $n) => $o->setClientApplicationsFromVerifiedPublisherOnly($n->getBooleanValue()),
            'clientApplicationTenantIds' => fn(ParseNode $n) => $o->setClientApplicationTenantIds($n->getCollectionOfPrimitiveValues()),
            'permissionClassification' => fn(ParseNode $n) => $o->setPermissionClassification($n->getStringValue()),
            'permissions' => fn(ParseNode $n) => $o->setPermissions($n->getCollectionOfPrimitiveValues()),
            'permissionType' => fn(ParseNode $n) => $o->setPermissionType($n->getEnumValue(PermissionType::class)),
            'resourceApplication' => fn(ParseNode $n) => $o->setResourceApplication($n->getStringValue()),
        ]);
    }

    /**
     * Gets the permissionClassification property value. The permission classification for the permission being granted, or all to match with any permission classification (including permissions which are not classified). Default is all.
     * @return string|null
    */
    public function getPermissionClassification(): ?string {
        return $this->getBackingStore()->get('permissionClassification');
    }

    /**
     * Gets the permissions property value. The list of id values for the specific permissions to match with, or a list with the single value all to match with any permission. The id of delegated permissions can be found in the oauth2PermissionScopes property of the API's **servicePrincipal** object. The id of application permissions can be found in the appRoles property of the API's **servicePrincipal** object. The id of resource-specific application permissions can be found in the resourceSpecificApplicationPermissions property of the API's **servicePrincipal** object. Default is the single value all.
     * @return array<string>|null
    */
    public function getPermissions(): ?array {
        return $this->getBackingStore()->get('permissions');
    }

    /**
     * Gets the permissionType property value. The permission type of the permission being granted. Possible values: application for application permissions (e.g. app roles), or delegated for delegated permissions. The value delegatedUserConsentable indicates delegated permissions which have not been configured by the API publisher to require admin consent—this value may be used in built-in permission grant policies, but cannot be used in custom permission grant policies. Required.
     * @return PermissionType|null
    */
    public function getPermissionType(): ?PermissionType {
        return $this->getBackingStore()->get('permissionType');
    }

    /**
     * Gets the resourceApplication property value. The appId of the resource application (e.g. the API) for which a permission is being granted, or any to match with any resource application or API. Default is any.
     * @return string|null
    */
    public function getResourceApplication(): ?string {
        return $this->getBackingStore()->get('resourceApplication');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('clientApplicationIds', $this->getClientApplicationIds());
        $writer->writeCollectionOfPrimitiveValues('clientApplicationPublisherIds', $this->getClientApplicationPublisherIds());
        $writer->writeBooleanValue('clientApplicationsFromVerifiedPublisherOnly', $this->getClientApplicationsFromVerifiedPublisherOnly());
        $writer->writeCollectionOfPrimitiveValues('clientApplicationTenantIds', $this->getClientApplicationTenantIds());
        $writer->writeStringValue('permissionClassification', $this->getPermissionClassification());
        $writer->writeCollectionOfPrimitiveValues('permissions', $this->getPermissions());
        $writer->writeEnumValue('permissionType', $this->getPermissionType());
        $writer->writeStringValue('resourceApplication', $this->getResourceApplication());
    }

    /**
     * Sets the clientApplicationIds property value. A list of appId values for the client applications to match with, or a list with the single value all to match any client application. Default is the single value all.
     * @param array<string>|null $value Value to set for the clientApplicationIds property.
    */
    public function setClientApplicationIds(?array $value): void {
        $this->getBackingStore()->set('clientApplicationIds', $value);
    }

    /**
     * Sets the clientApplicationPublisherIds property value. A list of Microsoft Partner Network (MPN) IDs for verified publishers of the client application, or a list with the single value all to match with client apps from any publisher. Default is the single value all.
     * @param array<string>|null $value Value to set for the clientApplicationPublisherIds property.
    */
    public function setClientApplicationPublisherIds(?array $value): void {
        $this->getBackingStore()->set('clientApplicationPublisherIds', $value);
    }

    /**
     * Sets the clientApplicationsFromVerifiedPublisherOnly property value. Set to true to only match on client applications with a verified publisher. Set to false to match on any client app, even if it does not have a verified publisher. Default is false.
     * @param bool|null $value Value to set for the clientApplicationsFromVerifiedPublisherOnly property.
    */
    public function setClientApplicationsFromVerifiedPublisherOnly(?bool $value): void {
        $this->getBackingStore()->set('clientApplicationsFromVerifiedPublisherOnly', $value);
    }

    /**
     * Sets the clientApplicationTenantIds property value. A list of Azure Active Directory tenant IDs in which the client application is registered, or a list with the single value all to match with client apps registered in any tenant. Default is the single value all.
     * @param array<string>|null $value Value to set for the clientApplicationTenantIds property.
    */
    public function setClientApplicationTenantIds(?array $value): void {
        $this->getBackingStore()->set('clientApplicationTenantIds', $value);
    }

    /**
     * Sets the permissionClassification property value. The permission classification for the permission being granted, or all to match with any permission classification (including permissions which are not classified). Default is all.
     * @param string|null $value Value to set for the permissionClassification property.
    */
    public function setPermissionClassification(?string $value): void {
        $this->getBackingStore()->set('permissionClassification', $value);
    }

    /**
     * Sets the permissions property value. The list of id values for the specific permissions to match with, or a list with the single value all to match with any permission. The id of delegated permissions can be found in the oauth2PermissionScopes property of the API's **servicePrincipal** object. The id of application permissions can be found in the appRoles property of the API's **servicePrincipal** object. The id of resource-specific application permissions can be found in the resourceSpecificApplicationPermissions property of the API's **servicePrincipal** object. Default is the single value all.
     * @param array<string>|null $value Value to set for the permissions property.
    */
    public function setPermissions(?array $value): void {
        $this->getBackingStore()->set('permissions', $value);
    }

    /**
     * Sets the permissionType property value. The permission type of the permission being granted. Possible values: application for application permissions (e.g. app roles), or delegated for delegated permissions. The value delegatedUserConsentable indicates delegated permissions which have not been configured by the API publisher to require admin consent—this value may be used in built-in permission grant policies, but cannot be used in custom permission grant policies. Required.
     * @param PermissionType|null $value Value to set for the permissionType property.
    */
    public function setPermissionType(?PermissionType $value): void {
        $this->getBackingStore()->set('permissionType', $value);
    }

    /**
     * Sets the resourceApplication property value. The appId of the resource application (e.g. the API) for which a permission is being granted, or any to match with any resource application or API. Default is any.
     * @param string|null $value Value to set for the resourceApplication property.
    */
    public function setResourceApplication(?string $value): void {
        $this->getBackingStore()->set('resourceApplication', $value);
    }

}
