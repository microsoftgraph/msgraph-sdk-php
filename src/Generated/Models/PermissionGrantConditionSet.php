<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PermissionGrantConditionSet extends Entity implements Parsable 
{
    /**
     * @var array<string>|null $clientApplicationIds A list of appId values for the client applications to match with, or a list with the single value all to match any client application. Default is the single value all.
    */
    private ?array $clientApplicationIds = null;
    
    /**
     * @var array<string>|null $clientApplicationPublisherIds A list of Microsoft Partner Network (MPN) IDs for verified publishers of the client application, or a list with the single value all to match with client apps from any publisher. Default is the single value all.
    */
    private ?array $clientApplicationPublisherIds = null;
    
    /**
     * @var bool|null $clientApplicationsFromVerifiedPublisherOnly Set to true to only match on client applications with a verified publisher. Set to false to match on any client app, even if it does not have a verified publisher. Default is false.
    */
    private ?bool $clientApplicationsFromVerifiedPublisherOnly = null;
    
    /**
     * @var array<string>|null $clientApplicationTenantIds A list of Azure Active Directory tenant IDs in which the client application is registered, or a list with the single value all to match with client apps registered in any tenant. Default is the single value all.
    */
    private ?array $clientApplicationTenantIds = null;
    
    /**
     * @var string|null $permissionClassification The permission classification for the permission being granted, or all to match with any permission classification (including permissions which are not classified). Default is all.
    */
    private ?string $permissionClassification = null;
    
    /**
     * @var array<string>|null $permissions The list of id values for the specific permissions to match with, or a list with the single value all to match with any permission. The id of delegated permissions can be found in the publishedPermissionScopes property of the API's **servicePrincipal** object. The id of application permissions can be found in the appRoles property of the API's **servicePrincipal** object. The id of resource-specific application permissions can be found in the resourceSpecificApplicationPermissions property of the API's **servicePrincipal** object. Default is the single value all.
    */
    private ?array $permissions = null;
    
    /**
     * @var PermissionType|null $permissionType The permission type of the permission being granted. Possible values: application for application permissions (e.g. app roles), or delegated for delegated permissions. The value delegatedUserConsentable indicates delegated permissions which have not been configured by the API publisher to require admin consent—this value may be used in built-in permission grant policies, but cannot be used in custom permission grant policies. Required.
    */
    private ?PermissionType $permissionType = null;
    
    /**
     * @var string|null $resourceApplication The appId of the resource application (e.g. the API) for which a permission is being granted, or any to match with any resource application or API. Default is any.
    */
    private ?string $resourceApplication = null;
    
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
        return $this->clientApplicationIds;
    }

    /**
     * Gets the clientApplicationPublisherIds property value. A list of Microsoft Partner Network (MPN) IDs for verified publishers of the client application, or a list with the single value all to match with client apps from any publisher. Default is the single value all.
     * @return array<string>|null
    */
    public function getClientApplicationPublisherIds(): ?array {
        return $this->clientApplicationPublisherIds;
    }

    /**
     * Gets the clientApplicationsFromVerifiedPublisherOnly property value. Set to true to only match on client applications with a verified publisher. Set to false to match on any client app, even if it does not have a verified publisher. Default is false.
     * @return bool|null
    */
    public function getClientApplicationsFromVerifiedPublisherOnly(): ?bool {
        return $this->clientApplicationsFromVerifiedPublisherOnly;
    }

    /**
     * Gets the clientApplicationTenantIds property value. A list of Azure Active Directory tenant IDs in which the client application is registered, or a list with the single value all to match with client apps registered in any tenant. Default is the single value all.
     * @return array<string>|null
    */
    public function getClientApplicationTenantIds(): ?array {
        return $this->clientApplicationTenantIds;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'clientApplicationIds' => function (ParseNode $n) use ($o) { $o->setClientApplicationIds($n->getCollectionOfPrimitiveValues()); },
            'clientApplicationPublisherIds' => function (ParseNode $n) use ($o) { $o->setClientApplicationPublisherIds($n->getCollectionOfPrimitiveValues()); },
            'clientApplicationsFromVerifiedPublisherOnly' => function (ParseNode $n) use ($o) { $o->setClientApplicationsFromVerifiedPublisherOnly($n->getBooleanValue()); },
            'clientApplicationTenantIds' => function (ParseNode $n) use ($o) { $o->setClientApplicationTenantIds($n->getCollectionOfPrimitiveValues()); },
            'permissionClassification' => function (ParseNode $n) use ($o) { $o->setPermissionClassification($n->getStringValue()); },
            'permissions' => function (ParseNode $n) use ($o) { $o->setPermissions($n->getCollectionOfPrimitiveValues()); },
            'permissionType' => function (ParseNode $n) use ($o) { $o->setPermissionType($n->getEnumValue(PermissionType::class)); },
            'resourceApplication' => function (ParseNode $n) use ($o) { $o->setResourceApplication($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the permissionClassification property value. The permission classification for the permission being granted, or all to match with any permission classification (including permissions which are not classified). Default is all.
     * @return string|null
    */
    public function getPermissionClassification(): ?string {
        return $this->permissionClassification;
    }

    /**
     * Gets the permissions property value. The list of id values for the specific permissions to match with, or a list with the single value all to match with any permission. The id of delegated permissions can be found in the publishedPermissionScopes property of the API's **servicePrincipal** object. The id of application permissions can be found in the appRoles property of the API's **servicePrincipal** object. The id of resource-specific application permissions can be found in the resourceSpecificApplicationPermissions property of the API's **servicePrincipal** object. Default is the single value all.
     * @return array<string>|null
    */
    public function getPermissions(): ?array {
        return $this->permissions;
    }

    /**
     * Gets the permissionType property value. The permission type of the permission being granted. Possible values: application for application permissions (e.g. app roles), or delegated for delegated permissions. The value delegatedUserConsentable indicates delegated permissions which have not been configured by the API publisher to require admin consent—this value may be used in built-in permission grant policies, but cannot be used in custom permission grant policies. Required.
     * @return PermissionType|null
    */
    public function getPermissionType(): ?PermissionType {
        return $this->permissionType;
    }

    /**
     * Gets the resourceApplication property value. The appId of the resource application (e.g. the API) for which a permission is being granted, or any to match with any resource application or API. Default is any.
     * @return string|null
    */
    public function getResourceApplication(): ?string {
        return $this->resourceApplication;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('clientApplicationIds', $this->clientApplicationIds);
        $writer->writeCollectionOfPrimitiveValues('clientApplicationPublisherIds', $this->clientApplicationPublisherIds);
        $writer->writeBooleanValue('clientApplicationsFromVerifiedPublisherOnly', $this->clientApplicationsFromVerifiedPublisherOnly);
        $writer->writeCollectionOfPrimitiveValues('clientApplicationTenantIds', $this->clientApplicationTenantIds);
        $writer->writeStringValue('permissionClassification', $this->permissionClassification);
        $writer->writeCollectionOfPrimitiveValues('permissions', $this->permissions);
        $writer->writeEnumValue('permissionType', $this->permissionType);
        $writer->writeStringValue('resourceApplication', $this->resourceApplication);
    }

    /**
     * Sets the clientApplicationIds property value. A list of appId values for the client applications to match with, or a list with the single value all to match any client application. Default is the single value all.
     *  @param array<string>|null $value Value to set for the clientApplicationIds property.
    */
    public function setClientApplicationIds(?array $value ): void {
        $this->clientApplicationIds = $value;
    }

    /**
     * Sets the clientApplicationPublisherIds property value. A list of Microsoft Partner Network (MPN) IDs for verified publishers of the client application, or a list with the single value all to match with client apps from any publisher. Default is the single value all.
     *  @param array<string>|null $value Value to set for the clientApplicationPublisherIds property.
    */
    public function setClientApplicationPublisherIds(?array $value ): void {
        $this->clientApplicationPublisherIds = $value;
    }

    /**
     * Sets the clientApplicationsFromVerifiedPublisherOnly property value. Set to true to only match on client applications with a verified publisher. Set to false to match on any client app, even if it does not have a verified publisher. Default is false.
     *  @param bool|null $value Value to set for the clientApplicationsFromVerifiedPublisherOnly property.
    */
    public function setClientApplicationsFromVerifiedPublisherOnly(?bool $value ): void {
        $this->clientApplicationsFromVerifiedPublisherOnly = $value;
    }

    /**
     * Sets the clientApplicationTenantIds property value. A list of Azure Active Directory tenant IDs in which the client application is registered, or a list with the single value all to match with client apps registered in any tenant. Default is the single value all.
     *  @param array<string>|null $value Value to set for the clientApplicationTenantIds property.
    */
    public function setClientApplicationTenantIds(?array $value ): void {
        $this->clientApplicationTenantIds = $value;
    }

    /**
     * Sets the permissionClassification property value. The permission classification for the permission being granted, or all to match with any permission classification (including permissions which are not classified). Default is all.
     *  @param string|null $value Value to set for the permissionClassification property.
    */
    public function setPermissionClassification(?string $value ): void {
        $this->permissionClassification = $value;
    }

    /**
     * Sets the permissions property value. The list of id values for the specific permissions to match with, or a list with the single value all to match with any permission. The id of delegated permissions can be found in the publishedPermissionScopes property of the API's **servicePrincipal** object. The id of application permissions can be found in the appRoles property of the API's **servicePrincipal** object. The id of resource-specific application permissions can be found in the resourceSpecificApplicationPermissions property of the API's **servicePrincipal** object. Default is the single value all.
     *  @param array<string>|null $value Value to set for the permissions property.
    */
    public function setPermissions(?array $value ): void {
        $this->permissions = $value;
    }

    /**
     * Sets the permissionType property value. The permission type of the permission being granted. Possible values: application for application permissions (e.g. app roles), or delegated for delegated permissions. The value delegatedUserConsentable indicates delegated permissions which have not been configured by the API publisher to require admin consent—this value may be used in built-in permission grant policies, but cannot be used in custom permission grant policies. Required.
     *  @param PermissionType|null $value Value to set for the permissionType property.
    */
    public function setPermissionType(?PermissionType $value ): void {
        $this->permissionType = $value;
    }

    /**
     * Sets the resourceApplication property value. The appId of the resource application (e.g. the API) for which a permission is being granted, or any to match with any resource application or API. Default is any.
     *  @param string|null $value Value to set for the resourceApplication property.
    */
    public function setResourceApplication(?string $value ): void {
        $this->resourceApplication = $value;
    }

}
