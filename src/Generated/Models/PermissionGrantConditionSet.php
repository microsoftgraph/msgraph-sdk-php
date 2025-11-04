<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PermissionGrantConditionSet extends Entity implements Parsable 
{
    /**
     * Instantiates a new PermissionGrantConditionSet and sets the default values.
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
        $val = $this->getBackingStore()->get('clientApplicationIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clientApplicationIds'");
    }

    /**
     * Gets the clientApplicationPublisherIds property value. A list of Microsoft Partner Network (MPN) IDs for verified publishers of the client application, or a list with the single value all to match with client apps from any publisher. Default is the single value all.
     * @return array<string>|null
    */
    public function getClientApplicationPublisherIds(): ?array {
        $val = $this->getBackingStore()->get('clientApplicationPublisherIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clientApplicationPublisherIds'");
    }

    /**
     * Gets the clientApplicationsFromVerifiedPublisherOnly property value. Set to true to only match on client applications with a verified publisher. Set to false to match on any client app, even if it doesn't have a verified publisher. Default is false.
     * @return bool|null
    */
    public function getClientApplicationsFromVerifiedPublisherOnly(): ?bool {
        $val = $this->getBackingStore()->get('clientApplicationsFromVerifiedPublisherOnly');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clientApplicationsFromVerifiedPublisherOnly'");
    }

    /**
     * Gets the clientApplicationTenantIds property value. A list of Microsoft Entra tenant IDs in which the client application is registered, or a list with the single value all to match with client apps registered in any tenant. Default is the single value all.
     * @return array<string>|null
    */
    public function getClientApplicationTenantIds(): ?array {
        $val = $this->getBackingStore()->get('clientApplicationTenantIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clientApplicationTenantIds'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'clientApplicationIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setClientApplicationIds($val);
            },
            'clientApplicationPublisherIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setClientApplicationPublisherIds($val);
            },
            'clientApplicationsFromVerifiedPublisherOnly' => fn(ParseNode $n) => $o->setClientApplicationsFromVerifiedPublisherOnly($n->getBooleanValue()),
            'clientApplicationTenantIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setClientApplicationTenantIds($val);
            },
            'permissionClassification' => fn(ParseNode $n) => $o->setPermissionClassification($n->getStringValue()),
            'permissions' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPermissions($val);
            },
            'permissionType' => fn(ParseNode $n) => $o->setPermissionType($n->getEnumValue(PermissionType::class)),
            'resourceApplication' => fn(ParseNode $n) => $o->setResourceApplication($n->getStringValue()),
        ]);
    }

    /**
     * Gets the permissionClassification property value. The permission classification for the permission being granted, or all to match with any permission classification (including permissions that aren't classified). Default is all.
     * @return string|null
    */
    public function getPermissionClassification(): ?string {
        $val = $this->getBackingStore()->get('permissionClassification');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'permissionClassification'");
    }

    /**
     * Gets the permissions property value. The list of id values for the specific permissions to match with, or a list with the single value all to match with any permission. The id of delegated permissions can be found in the oauth2PermissionScopes property of the API's servicePrincipal object. The id of application permissions can be found in the appRoles property of the API's servicePrincipal object. The id of resource-specific application permissions can be found in the resourceSpecificApplicationPermissions property of the API's servicePrincipal object. Default is the single value all.
     * @return array<string>|null
    */
    public function getPermissions(): ?array {
        $val = $this->getBackingStore()->get('permissions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'permissions'");
    }

    /**
     * Gets the permissionType property value. The permission type of the permission being granted. Possible values: application for application permissions (for example app roles), or delegated for delegated permissions. The value delegatedUserConsentable indicates delegated permissions that haven't been configured by the API publisher to require admin consent—this value may be used in built-in permission grant policies, but can't be used in custom permission grant policies. Required.
     * @return PermissionType|null
    */
    public function getPermissionType(): ?PermissionType {
        $val = $this->getBackingStore()->get('permissionType');
        if (is_null($val) || $val instanceof PermissionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'permissionType'");
    }

    /**
     * Gets the resourceApplication property value. The appId of the resource application (for example the API) for which a permission is being granted, or any to match with any resource application or API. Default is any.
     * @return string|null
    */
    public function getResourceApplication(): ?string {
        $val = $this->getBackingStore()->get('resourceApplication');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceApplication'");
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
     * Sets the clientApplicationsFromVerifiedPublisherOnly property value. Set to true to only match on client applications with a verified publisher. Set to false to match on any client app, even if it doesn't have a verified publisher. Default is false.
     * @param bool|null $value Value to set for the clientApplicationsFromVerifiedPublisherOnly property.
    */
    public function setClientApplicationsFromVerifiedPublisherOnly(?bool $value): void {
        $this->getBackingStore()->set('clientApplicationsFromVerifiedPublisherOnly', $value);
    }

    /**
     * Sets the clientApplicationTenantIds property value. A list of Microsoft Entra tenant IDs in which the client application is registered, or a list with the single value all to match with client apps registered in any tenant. Default is the single value all.
     * @param array<string>|null $value Value to set for the clientApplicationTenantIds property.
    */
    public function setClientApplicationTenantIds(?array $value): void {
        $this->getBackingStore()->set('clientApplicationTenantIds', $value);
    }

    /**
     * Sets the permissionClassification property value. The permission classification for the permission being granted, or all to match with any permission classification (including permissions that aren't classified). Default is all.
     * @param string|null $value Value to set for the permissionClassification property.
    */
    public function setPermissionClassification(?string $value): void {
        $this->getBackingStore()->set('permissionClassification', $value);
    }

    /**
     * Sets the permissions property value. The list of id values for the specific permissions to match with, or a list with the single value all to match with any permission. The id of delegated permissions can be found in the oauth2PermissionScopes property of the API's servicePrincipal object. The id of application permissions can be found in the appRoles property of the API's servicePrincipal object. The id of resource-specific application permissions can be found in the resourceSpecificApplicationPermissions property of the API's servicePrincipal object. Default is the single value all.
     * @param array<string>|null $value Value to set for the permissions property.
    */
    public function setPermissions(?array $value): void {
        $this->getBackingStore()->set('permissions', $value);
    }

    /**
     * Sets the permissionType property value. The permission type of the permission being granted. Possible values: application for application permissions (for example app roles), or delegated for delegated permissions. The value delegatedUserConsentable indicates delegated permissions that haven't been configured by the API publisher to require admin consent—this value may be used in built-in permission grant policies, but can't be used in custom permission grant policies. Required.
     * @param PermissionType|null $value Value to set for the permissionType property.
    */
    public function setPermissionType(?PermissionType $value): void {
        $this->getBackingStore()->set('permissionType', $value);
    }

    /**
     * Sets the resourceApplication property value. The appId of the resource application (for example the API) for which a permission is being granted, or any to match with any resource application or API. Default is any.
     * @param string|null $value Value to set for the resourceApplication property.
    */
    public function setResourceApplication(?string $value): void {
        $this->getBackingStore()->set('resourceApplication', $value);
    }

}
