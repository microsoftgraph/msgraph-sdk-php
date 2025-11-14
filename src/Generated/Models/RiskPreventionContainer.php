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

class RiskPreventionContainer implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new RiskPreventionContainer and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RiskPreventionContainer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RiskPreventionContainer {
        return new RiskPreventionContainer();
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
            'fraudProtectionProviders' => fn(ParseNode $n) => $o->setFraudProtectionProviders($n->getCollectionOfObjectValues([FraudProtectionProvider::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'webApplicationFirewallProviders' => fn(ParseNode $n) => $o->setWebApplicationFirewallProviders($n->getCollectionOfObjectValues([WebApplicationFirewallProvider::class, 'createFromDiscriminatorValue'])),
            'webApplicationFirewallVerifications' => fn(ParseNode $n) => $o->setWebApplicationFirewallVerifications($n->getCollectionOfObjectValues([WebApplicationFirewallVerificationModel::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the fraudProtectionProviders property value. Represents entry point for fraud protection provider configurations for Microsoft Entra External ID tenants.
     * @return array<FraudProtectionProvider>|null
    */
    public function getFraudProtectionProviders(): ?array {
        $val = $this->getBackingStore()->get('fraudProtectionProviders');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, FraudProtectionProvider::class);
            /** @var array<FraudProtectionProvider>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fraudProtectionProviders'");
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
     * Gets the webApplicationFirewallProviders property value. Collection of WAF provider configurations registered in the External ID tenant.
     * @return array<WebApplicationFirewallProvider>|null
    */
    public function getWebApplicationFirewallProviders(): ?array {
        $val = $this->getBackingStore()->get('webApplicationFirewallProviders');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WebApplicationFirewallProvider::class);
            /** @var array<WebApplicationFirewallProvider>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'webApplicationFirewallProviders'");
    }

    /**
     * Gets the webApplicationFirewallVerifications property value. Collection of verification operations performed for domains or hosts with WAF providers registered in the External ID tenant.
     * @return array<WebApplicationFirewallVerificationModel>|null
    */
    public function getWebApplicationFirewallVerifications(): ?array {
        $val = $this->getBackingStore()->get('webApplicationFirewallVerifications');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WebApplicationFirewallVerificationModel::class);
            /** @var array<WebApplicationFirewallVerificationModel>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'webApplicationFirewallVerifications'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('fraudProtectionProviders', $this->getFraudProtectionProviders());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('webApplicationFirewallProviders', $this->getWebApplicationFirewallProviders());
        $writer->writeCollectionOfObjectValues('webApplicationFirewallVerifications', $this->getWebApplicationFirewallVerifications());
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
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the fraudProtectionProviders property value. Represents entry point for fraud protection provider configurations for Microsoft Entra External ID tenants.
     * @param array<FraudProtectionProvider>|null $value Value to set for the fraudProtectionProviders property.
    */
    public function setFraudProtectionProviders(?array $value): void {
        $this->getBackingStore()->set('fraudProtectionProviders', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the webApplicationFirewallProviders property value. Collection of WAF provider configurations registered in the External ID tenant.
     * @param array<WebApplicationFirewallProvider>|null $value Value to set for the webApplicationFirewallProviders property.
    */
    public function setWebApplicationFirewallProviders(?array $value): void {
        $this->getBackingStore()->set('webApplicationFirewallProviders', $value);
    }

    /**
     * Sets the webApplicationFirewallVerifications property value. Collection of verification operations performed for domains or hosts with WAF providers registered in the External ID tenant.
     * @param array<WebApplicationFirewallVerificationModel>|null $value Value to set for the webApplicationFirewallVerifications property.
    */
    public function setWebApplicationFirewallVerifications(?array $value): void {
        $this->getBackingStore()->set('webApplicationFirewallVerifications', $value);
    }

}
