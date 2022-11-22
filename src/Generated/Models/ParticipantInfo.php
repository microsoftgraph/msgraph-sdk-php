<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ParticipantInfo implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new participantInfo and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ParticipantInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ParticipantInfo {
        return new ParticipantInfo();
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
     * Gets the countryCode property value. The ISO 3166-1 Alpha-2 country code of the participant's best estimated physical location at the start of the call. Read-only.
     * @return string|null
    */
    public function getCountryCode(): ?string {
        return $this->getBackingStore()->get('countryCode');
    }

    /**
     * Gets the endpointType property value. The type of endpoint the participant is using. Possible values are: default, skypeForBusiness, or skypeForBusinessVoipPhone. Read-only.
     * @return EndpointType|null
    */
    public function getEndpointType(): ?EndpointType {
        return $this->getBackingStore()->get('endpointType');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'countryCode' => fn(ParseNode $n) => $o->setCountryCode($n->getStringValue()),
            'endpointType' => fn(ParseNode $n) => $o->setEndpointType($n->getEnumValue(EndpointType::class)),
            'identity' => fn(ParseNode $n) => $o->setIdentity($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'languageId' => fn(ParseNode $n) => $o->setLanguageId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'participantId' => fn(ParseNode $n) => $o->setParticipantId($n->getStringValue()),
            'region' => fn(ParseNode $n) => $o->setRegion($n->getStringValue()),
        ];
    }

    /**
     * Gets the identity property value. The identity property
     * @return IdentitySet|null
    */
    public function getIdentity(): ?IdentitySet {
        return $this->getBackingStore()->get('identity');
    }

    /**
     * Gets the languageId property value. The language culture string. Read-only.
     * @return string|null
    */
    public function getLanguageId(): ?string {
        return $this->getBackingStore()->get('languageId');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the participantId property value. The participant ID of the participant. Read-only.
     * @return string|null
    */
    public function getParticipantId(): ?string {
        return $this->getBackingStore()->get('participantId');
    }

    /**
     * Gets the region property value. The home region of the participant. This can be a country, a continent, or a larger geographic region. This does not change based on the participant's current physical location. Read-only.
     * @return string|null
    */
    public function getRegion(): ?string {
        return $this->getBackingStore()->get('region');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('countryCode', $this->getCountryCode());
        $writer->writeEnumValue('endpointType', $this->getEndpointType());
        $writer->writeObjectValue('identity', $this->getIdentity());
        $writer->writeStringValue('languageId', $this->getLanguageId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('participantId', $this->getParticipantId());
        $writer->writeStringValue('region', $this->getRegion());
        $writer->writeAdditionalData($this->getAdditionalData());
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
     * Sets the countryCode property value. The ISO 3166-1 Alpha-2 country code of the participant's best estimated physical location at the start of the call. Read-only.
     *  @param string|null $value Value to set for the countryCode property.
    */
    public function setCountryCode(?string $value): void {
        $this->getBackingStore()->set('countryCode', $value);
    }

    /**
     * Sets the endpointType property value. The type of endpoint the participant is using. Possible values are: default, skypeForBusiness, or skypeForBusinessVoipPhone. Read-only.
     *  @param EndpointType|null $value Value to set for the endpointType property.
    */
    public function setEndpointType(?EndpointType $value): void {
        $this->getBackingStore()->set('endpointType', $value);
    }

    /**
     * Sets the identity property value. The identity property
     *  @param IdentitySet|null $value Value to set for the identity property.
    */
    public function setIdentity(?IdentitySet $value): void {
        $this->getBackingStore()->set('identity', $value);
    }

    /**
     * Sets the languageId property value. The language culture string. Read-only.
     *  @param string|null $value Value to set for the languageId property.
    */
    public function setLanguageId(?string $value): void {
        $this->getBackingStore()->set('languageId', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the participantId property value. The participant ID of the participant. Read-only.
     *  @param string|null $value Value to set for the participantId property.
    */
    public function setParticipantId(?string $value): void {
        $this->getBackingStore()->set('participantId', $value);
    }

    /**
     * Sets the region property value. The home region of the participant. This can be a country, a continent, or a larger geographic region. This does not change based on the participant's current physical location. Read-only.
     *  @param string|null $value Value to set for the region property.
    */
    public function setRegion(?string $value): void {
        $this->getBackingStore()->set('region', $value);
    }

}
