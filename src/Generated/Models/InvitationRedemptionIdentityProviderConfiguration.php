<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class InvitationRedemptionIdentityProviderConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new InvitationRedemptionIdentityProviderConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InvitationRedemptionIdentityProviderConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InvitationRedemptionIdentityProviderConfiguration {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.defaultInvitationRedemptionIdentityProviderConfiguration': return new DefaultInvitationRedemptionIdentityProviderConfiguration();
            }
        }
        return new InvitationRedemptionIdentityProviderConfiguration();
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
     * Gets the fallbackIdentityProvider property value. The fallback identity provider to be used in case no primary identity provider can be used for guest invitation redemption. Possible values are: defaultConfiguredIdp, emailOneTimePasscode, or microsoftAccount.
     * @return B2bIdentityProvidersType|null
    */
    public function getFallbackIdentityProvider(): ?B2bIdentityProvidersType {
        $val = $this->getBackingStore()->get('fallbackIdentityProvider');
        if (is_null($val) || $val instanceof B2bIdentityProvidersType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fallbackIdentityProvider'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'fallbackIdentityProvider' => fn(ParseNode $n) => $o->setFallbackIdentityProvider($n->getEnumValue(B2bIdentityProvidersType::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'primaryIdentityProviderPrecedenceOrder' => fn(ParseNode $n) => $o->setPrimaryIdentityProviderPrecedenceOrder($n->getCollectionOfEnumValues(B2bIdentityProvidersType::class)),
        ];
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
     * Gets the primaryIdentityProviderPrecedenceOrder property value. Collection of identity providers in priority order of preference to be used for guest invitation redemption. Possible values are: azureActiveDirectory, externalFederation, or socialIdentityProviders.
     * @return array<B2bIdentityProvidersType>|null
    */
    public function getPrimaryIdentityProviderPrecedenceOrder(): ?array {
        $val = $this->getBackingStore()->get('primaryIdentityProviderPrecedenceOrder');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, B2bIdentityProvidersType::class);
            /** @var array<B2bIdentityProvidersType>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'primaryIdentityProviderPrecedenceOrder'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('fallbackIdentityProvider', $this->getFallbackIdentityProvider());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfEnumValues('primaryIdentityProviderPrecedenceOrder', $this->getPrimaryIdentityProviderPrecedenceOrder());
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
     * Sets the fallbackIdentityProvider property value. The fallback identity provider to be used in case no primary identity provider can be used for guest invitation redemption. Possible values are: defaultConfiguredIdp, emailOneTimePasscode, or microsoftAccount.
     * @param B2bIdentityProvidersType|null $value Value to set for the fallbackIdentityProvider property.
    */
    public function setFallbackIdentityProvider(?B2bIdentityProvidersType $value): void {
        $this->getBackingStore()->set('fallbackIdentityProvider', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the primaryIdentityProviderPrecedenceOrder property value. Collection of identity providers in priority order of preference to be used for guest invitation redemption. Possible values are: azureActiveDirectory, externalFederation, or socialIdentityProviders.
     * @param array<B2bIdentityProvidersType>|null $value Value to set for the primaryIdentityProviderPrecedenceOrder property.
    */
    public function setPrimaryIdentityProviderPrecedenceOrder(?array $value): void {
        $this->getBackingStore()->set('primaryIdentityProviderPrecedenceOrder', $value);
    }

}
