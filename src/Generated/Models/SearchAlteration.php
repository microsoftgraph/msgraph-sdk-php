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

class SearchAlteration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SearchAlteration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SearchAlteration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SearchAlteration {
        return new SearchAlteration();
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
     * Gets the alteredHighlightedQueryString property value. Defines the altered highlighted query string with spelling correction. The annotation around the corrected segment is: /ue000, /ue001.
     * @return string|null
    */
    public function getAlteredHighlightedQueryString(): ?string {
        $val = $this->getBackingStore()->get('alteredHighlightedQueryString');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alteredHighlightedQueryString'");
    }

    /**
     * Gets the alteredQueryString property value. Defines the altered query string with spelling correction.
     * @return string|null
    */
    public function getAlteredQueryString(): ?string {
        $val = $this->getBackingStore()->get('alteredQueryString');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alteredQueryString'");
    }

    /**
     * Gets the alteredQueryTokens property value. Represents changed segments related to an original user query.
     * @return array<AlteredQueryToken>|null
    */
    public function getAlteredQueryTokens(): ?array {
        $val = $this->getBackingStore()->get('alteredQueryTokens');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AlteredQueryToken::class);
            /** @var array<AlteredQueryToken>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alteredQueryTokens'");
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
            'alteredHighlightedQueryString' => fn(ParseNode $n) => $o->setAlteredHighlightedQueryString($n->getStringValue()),
            'alteredQueryString' => fn(ParseNode $n) => $o->setAlteredQueryString($n->getStringValue()),
            'alteredQueryTokens' => fn(ParseNode $n) => $o->setAlteredQueryTokens($n->getCollectionOfObjectValues([AlteredQueryToken::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('alteredHighlightedQueryString', $this->getAlteredHighlightedQueryString());
        $writer->writeStringValue('alteredQueryString', $this->getAlteredQueryString());
        $writer->writeCollectionOfObjectValues('alteredQueryTokens', $this->getAlteredQueryTokens());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the alteredHighlightedQueryString property value. Defines the altered highlighted query string with spelling correction. The annotation around the corrected segment is: /ue000, /ue001.
     * @param string|null $value Value to set for the alteredHighlightedQueryString property.
    */
    public function setAlteredHighlightedQueryString(?string $value): void {
        $this->getBackingStore()->set('alteredHighlightedQueryString', $value);
    }

    /**
     * Sets the alteredQueryString property value. Defines the altered query string with spelling correction.
     * @param string|null $value Value to set for the alteredQueryString property.
    */
    public function setAlteredQueryString(?string $value): void {
        $this->getBackingStore()->set('alteredQueryString', $value);
    }

    /**
     * Sets the alteredQueryTokens property value. Represents changed segments related to an original user query.
     * @param array<AlteredQueryToken>|null $value Value to set for the alteredQueryTokens property.
    */
    public function setAlteredQueryTokens(?array $value): void {
        $this->getBackingStore()->set('alteredQueryTokens', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
