<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class Fido2KeyRestrictions implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new fido2KeyRestrictions and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Fido2KeyRestrictions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Fido2KeyRestrictions {
        return new Fido2KeyRestrictions();
    }

    /**
     * Gets the aaGuids property value. A collection of Authenticator Attestation GUIDs. AADGUIDs define key types and manufacturers.
     * @return array<string>|null
    */
    public function getAaGuids(): ?array {
        return $this->getBackingStore()->get('aaGuids');
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the enforcementType property value. Enforcement type. Possible values are: allow, block.
     * @return Fido2RestrictionEnforcementType|null
    */
    public function getEnforcementType(): ?Fido2RestrictionEnforcementType {
        return $this->getBackingStore()->get('enforcementType');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'aaGuids' => fn(ParseNode $n) => $o->setAaGuids($n->getCollectionOfPrimitiveValues()),
            'enforcementType' => fn(ParseNode $n) => $o->setEnforcementType($n->getEnumValue(Fido2RestrictionEnforcementType::class)),
            'isEnforced' => fn(ParseNode $n) => $o->setIsEnforced($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the isEnforced property value. Determines if the configured key enforcement is enabled.
     * @return bool|null
    */
    public function getIsEnforced(): ?bool {
        return $this->getBackingStore()->get('isEnforced');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('aaGuids', $this->getAaGuids());
        $writer->writeEnumValue('enforcementType', $this->getEnforcementType());
        $writer->writeBooleanValue('isEnforced', $this->getIsEnforced());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the aaGuids property value. A collection of Authenticator Attestation GUIDs. AADGUIDs define key types and manufacturers.
     *  @param array<string>|null $value Value to set for the aaGuids property.
    */
    public function setAaGuids(?array $value): void {
        $this->getBackingStore()->set('aaGuids', $value);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the enforcementType property value. Enforcement type. Possible values are: allow, block.
     *  @param Fido2RestrictionEnforcementType|null $value Value to set for the enforcementType property.
    */
    public function setEnforcementType(?Fido2RestrictionEnforcementType $value): void {
        $this->getBackingStore()->set('enforcementType', $value);
    }

    /**
     * Sets the isEnforced property value. Determines if the configured key enforcement is enabled.
     *  @param bool|null $value Value to set for the isEnforced property.
    */
    public function setIsEnforced(?bool $value): void {
        $this->getBackingStore()->set('isEnforced', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
