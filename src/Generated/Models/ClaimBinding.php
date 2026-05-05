<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ClaimBinding implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ClaimBinding and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ClaimBinding
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ClaimBinding {
        return new ClaimBinding();
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
            'matchConfidenceLevel' => fn(ParseNode $n) => $o->setMatchConfidenceLevel($n->getEnumValue(MatchConfidenceLevel::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'sourceAttribute' => fn(ParseNode $n) => $o->setSourceAttribute($n->getStringValue()),
            'verifiedIdClaim' => fn(ParseNode $n) => $o->setVerifiedIdClaim($n->getStringValue()),
        ];
    }

    /**
     * Gets the matchConfidenceLevel property value. The matchConfidenceLevel property
     * @return MatchConfidenceLevel|null
    */
    public function getMatchConfidenceLevel(): ?MatchConfidenceLevel {
        $val = $this->getBackingStore()->get('matchConfidenceLevel');
        if (is_null($val) || $val instanceof MatchConfidenceLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'matchConfidenceLevel'");
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
     * Gets the sourceAttribute property value. Source attribute name from the source system, for example a directory attribute.
     * @return string|null
    */
    public function getSourceAttribute(): ?string {
        $val = $this->getBackingStore()->get('sourceAttribute');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceAttribute'");
    }

    /**
     * Gets the verifiedIdClaim property value. Verified ID claim name or path, for example vc.credentialSubject.firstName.
     * @return string|null
    */
    public function getVerifiedIdClaim(): ?string {
        $val = $this->getBackingStore()->get('verifiedIdClaim');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'verifiedIdClaim'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('matchConfidenceLevel', $this->getMatchConfidenceLevel());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('sourceAttribute', $this->getSourceAttribute());
        $writer->writeStringValue('verifiedIdClaim', $this->getVerifiedIdClaim());
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
     * Sets the matchConfidenceLevel property value. The matchConfidenceLevel property
     * @param MatchConfidenceLevel|null $value Value to set for the matchConfidenceLevel property.
    */
    public function setMatchConfidenceLevel(?MatchConfidenceLevel $value): void {
        $this->getBackingStore()->set('matchConfidenceLevel', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the sourceAttribute property value. Source attribute name from the source system, for example a directory attribute.
     * @param string|null $value Value to set for the sourceAttribute property.
    */
    public function setSourceAttribute(?string $value): void {
        $this->getBackingStore()->set('sourceAttribute', $value);
    }

    /**
     * Sets the verifiedIdClaim property value. Verified ID claim name or path, for example vc.credentialSubject.firstName.
     * @param string|null $value Value to set for the verifiedIdClaim property.
    */
    public function setVerifiedIdClaim(?string $value): void {
        $this->getBackingStore()->set('verifiedIdClaim', $value);
    }

}
