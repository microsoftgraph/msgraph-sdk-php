<?php

namespace Microsoft\\Graph\\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ServicePrincipalEvidence extends AlertEvidence implements Parsable 
{
    /**
     * Instantiates a new ServicePrincipalEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.servicePrincipalEvidence');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ServicePrincipalEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ServicePrincipalEvidence {
        return new ServicePrincipalEvidence();
    }

    /**
     * Gets the appId property value. The appId property
     * @return string|null
    */
    public function getAppId(): ?string {
        $val = $this->getBackingStore()->get('appId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appId'");
    }

    /**
     * Gets the appOwnerTenantId property value. The appOwnerTenantId property
     * @return string|null
    */
    public function getAppOwnerTenantId(): ?string {
        $val = $this->getBackingStore()->get('appOwnerTenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appOwnerTenantId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appId' => fn(ParseNode $n) => $o->setAppId($n->getStringValue()),
            'appOwnerTenantId' => fn(ParseNode $n) => $o->setAppOwnerTenantId($n->getStringValue()),
            'servicePrincipalName' => fn(ParseNode $n) => $o->setServicePrincipalName($n->getStringValue()),
            'servicePrincipalObjectId' => fn(ParseNode $n) => $o->setServicePrincipalObjectId($n->getStringValue()),
            'servicePrincipalType' => fn(ParseNode $n) => $o->setServicePrincipalType($n->getEnumValue(ServicePrincipalType::class)),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
        ]);
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
     * Gets the servicePrincipalObjectId property value. The servicePrincipalObjectId property
     * @return string|null
    */
    public function getServicePrincipalObjectId(): ?string {
        $val = $this->getBackingStore()->get('servicePrincipalObjectId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'servicePrincipalObjectId'");
    }

    /**
     * Gets the servicePrincipalType property value. The servicePrincipalType property
     * @return ServicePrincipalType|null
    */
    public function getServicePrincipalType(): ?ServicePrincipalType {
        $val = $this->getBackingStore()->get('servicePrincipalType');
        if (is_null($val) || $val instanceof ServicePrincipalType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'servicePrincipalType'");
    }

    /**
     * Gets the tenantId property value. The tenantId property
     * @return string|null
    */
    public function getTenantId(): ?string {
        $val = $this->getBackingStore()->get('tenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appId', $this->getAppId());
        $writer->writeStringValue('appOwnerTenantId', $this->getAppOwnerTenantId());
        $writer->writeStringValue('servicePrincipalName', $this->getServicePrincipalName());
        $writer->writeStringValue('servicePrincipalObjectId', $this->getServicePrincipalObjectId());
        $writer->writeEnumValue('servicePrincipalType', $this->getServicePrincipalType());
        $writer->writeStringValue('tenantId', $this->getTenantId());
    }

    /**
     * Sets the appId property value. The appId property
     * @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value): void {
        $this->getBackingStore()->set('appId', $value);
    }

    /**
     * Sets the appOwnerTenantId property value. The appOwnerTenantId property
     * @param string|null $value Value to set for the appOwnerTenantId property.
    */
    public function setAppOwnerTenantId(?string $value): void {
        $this->getBackingStore()->set('appOwnerTenantId', $value);
    }

    /**
     * Sets the servicePrincipalName property value. The servicePrincipalName property
     * @param string|null $value Value to set for the servicePrincipalName property.
    */
    public function setServicePrincipalName(?string $value): void {
        $this->getBackingStore()->set('servicePrincipalName', $value);
    }

    /**
     * Sets the servicePrincipalObjectId property value. The servicePrincipalObjectId property
     * @param string|null $value Value to set for the servicePrincipalObjectId property.
    */
    public function setServicePrincipalObjectId(?string $value): void {
        $this->getBackingStore()->set('servicePrincipalObjectId', $value);
    }

    /**
     * Sets the servicePrincipalType property value. The servicePrincipalType property
     * @param ServicePrincipalType|null $value Value to set for the servicePrincipalType property.
    */
    public function setServicePrincipalType(?ServicePrincipalType $value): void {
        $this->getBackingStore()->set('servicePrincipalType', $value);
    }

    /**
     * Sets the tenantId property value. The tenantId property
     * @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

}
