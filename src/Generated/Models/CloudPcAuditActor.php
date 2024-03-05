<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CloudPcAuditActor implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CloudPcAuditActor and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcAuditActor
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcAuditActor {
        return new CloudPcAuditActor();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the applicationDisplayName property value. The applicationDisplayName property
     * @return string|null
    */
    public function getApplicationDisplayName(): ?string {
        $val = $this->getBackingStore()->get('applicationDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationDisplayName'");
    }

    /**
     * Gets the applicationId property value. The applicationId property
     * @return string|null
    */
    public function getApplicationId(): ?string {
        $val = $this->getBackingStore()->get('applicationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationId'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'applicationDisplayName' => fn(ParseNode $n) => $o->setApplicationDisplayName($n->getStringValue()),
            'applicationId' => fn(ParseNode $n) => $o->setApplicationId($n->getStringValue()),
            'ipAddress' => fn(ParseNode $n) => $o->setIpAddress($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'remoteTenantId' => fn(ParseNode $n) => $o->setRemoteTenantId($n->getStringValue()),
            'remoteUserId' => fn(ParseNode $n) => $o->setRemoteUserId($n->getStringValue()),
            'servicePrincipalName' => fn(ParseNode $n) => $o->setServicePrincipalName($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
            'userPermissions' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setUserPermissions($val);
            },
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
            'userRoleScopeTags' => fn(ParseNode $n) => $o->setUserRoleScopeTags($n->getCollectionOfObjectValues([CloudPcUserRoleScopeTagInfo::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the ipAddress property value. The ipAddress property
     * @return string|null
    */
    public function getIpAddress(): ?string {
        $val = $this->getBackingStore()->get('ipAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ipAddress'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the remoteTenantId property value. The remoteTenantId property
     * @return string|null
    */
    public function getRemoteTenantId(): ?string {
        $val = $this->getBackingStore()->get('remoteTenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remoteTenantId'");
    }

    /**
     * Gets the remoteUserId property value. The remoteUserId property
     * @return string|null
    */
    public function getRemoteUserId(): ?string {
        $val = $this->getBackingStore()->get('remoteUserId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remoteUserId'");
    }

    /**
     * Gets the servicePrincipalName property value. The servicePrincipalName property
     * @return string|null
    */
    public function getServicePrincipalName(): ?string {
        $val = $this->getBackingStore()->get('servicePrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'servicePrincipalName'");
    }

    /**
     * Gets the userId property value. The userId property
     * @return string|null
    */
    public function getUserId(): ?string {
        $val = $this->getBackingStore()->get('userId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userId'");
    }

    /**
     * Gets the userPermissions property value. The userPermissions property
     * @return array<string>|null
    */
    public function getUserPermissions(): ?array {
        $val = $this->getBackingStore()->get('userPermissions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userPermissions'");
    }

    /**
     * Gets the userPrincipalName property value. The userPrincipalName property
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        $val = $this->getBackingStore()->get('userPrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userPrincipalName'");
    }

    /**
     * Gets the userRoleScopeTags property value. The userRoleScopeTags property
     * @return array<CloudPcUserRoleScopeTagInfo>|null
    */
    public function getUserRoleScopeTags(): ?array {
        $val = $this->getBackingStore()->get('userRoleScopeTags');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudPcUserRoleScopeTagInfo::class);
            /** @var array<CloudPcUserRoleScopeTagInfo>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userRoleScopeTags'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('applicationDisplayName', $this->getApplicationDisplayName());
        $writer->writeStringValue('applicationId', $this->getApplicationId());
        $writer->writeStringValue('ipAddress', $this->getIpAddress());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('remoteTenantId', $this->getRemoteTenantId());
        $writer->writeStringValue('remoteUserId', $this->getRemoteUserId());
        $writer->writeStringValue('servicePrincipalName', $this->getServicePrincipalName());
        $writer->writeStringValue('userId', $this->getUserId());
        $writer->writeCollectionOfPrimitiveValues('userPermissions', $this->getUserPermissions());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
        $writer->writeCollectionOfObjectValues('userRoleScopeTags', $this->getUserRoleScopeTags());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the applicationDisplayName property value. The applicationDisplayName property
     * @param string|null $value Value to set for the applicationDisplayName property.
    */
    public function setApplicationDisplayName(?string $value): void {
        $this->getBackingStore()->set('applicationDisplayName', $value);
    }

    /**
     * Sets the applicationId property value. The applicationId property
     * @param string|null $value Value to set for the applicationId property.
    */
    public function setApplicationId(?string $value): void {
        $this->getBackingStore()->set('applicationId', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the ipAddress property value. The ipAddress property
     * @param string|null $value Value to set for the ipAddress property.
    */
    public function setIpAddress(?string $value): void {
        $this->getBackingStore()->set('ipAddress', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the remoteTenantId property value. The remoteTenantId property
     * @param string|null $value Value to set for the remoteTenantId property.
    */
    public function setRemoteTenantId(?string $value): void {
        $this->getBackingStore()->set('remoteTenantId', $value);
    }

    /**
     * Sets the remoteUserId property value. The remoteUserId property
     * @param string|null $value Value to set for the remoteUserId property.
    */
    public function setRemoteUserId(?string $value): void {
        $this->getBackingStore()->set('remoteUserId', $value);
    }

    /**
     * Sets the servicePrincipalName property value. The servicePrincipalName property
     * @param string|null $value Value to set for the servicePrincipalName property.
    */
    public function setServicePrincipalName(?string $value): void {
        $this->getBackingStore()->set('servicePrincipalName', $value);
    }

    /**
     * Sets the userId property value. The userId property
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

    /**
     * Sets the userPermissions property value. The userPermissions property
     * @param array<string>|null $value Value to set for the userPermissions property.
    */
    public function setUserPermissions(?array $value): void {
        $this->getBackingStore()->set('userPermissions', $value);
    }

    /**
     * Sets the userPrincipalName property value. The userPrincipalName property
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

    /**
     * Sets the userRoleScopeTags property value. The userRoleScopeTags property
     * @param array<CloudPcUserRoleScopeTagInfo>|null $value Value to set for the userRoleScopeTags property.
    */
    public function setUserRoleScopeTags(?array $value): void {
        $this->getBackingStore()->set('userRoleScopeTags', $value);
    }

}
