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

class RestorePointSearchResponse implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new RestorePointSearchResponse and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RestorePointSearchResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RestorePointSearchResponse {
        return new RestorePointSearchResponse();
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
            'noResultProtectionUnitIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setNoResultProtectionUnitIds($val);
            },
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'searchResponseId' => fn(ParseNode $n) => $o->setSearchResponseId($n->getStringValue()),
            'searchResults' => fn(ParseNode $n) => $o->setSearchResults($n->getCollectionOfObjectValues([RestorePointSearchResult::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the noResultProtectionUnitIds property value. Contains  alist of protection units with no restore points.
     * @return array<string>|null
    */
    public function getNoResultProtectionUnitIds(): ?array {
        $val = $this->getBackingStore()->get('noResultProtectionUnitIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'noResultProtectionUnitIds'");
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
     * Gets the searchResponseId property value. The unique identifier of the search response.
     * @return string|null
    */
    public function getSearchResponseId(): ?string {
        $val = $this->getBackingStore()->get('searchResponseId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'searchResponseId'");
    }

    /**
     * Gets the searchResults property value. Contains a collection of restore points.
     * @return array<RestorePointSearchResult>|null
    */
    public function getSearchResults(): ?array {
        $val = $this->getBackingStore()->get('searchResults');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RestorePointSearchResult::class);
            /** @var array<RestorePointSearchResult>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'searchResults'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('noResultProtectionUnitIds', $this->getNoResultProtectionUnitIds());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('searchResponseId', $this->getSearchResponseId());
        $writer->writeCollectionOfObjectValues('searchResults', $this->getSearchResults());
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
     * Sets the noResultProtectionUnitIds property value. Contains  alist of protection units with no restore points.
     * @param array<string>|null $value Value to set for the noResultProtectionUnitIds property.
    */
    public function setNoResultProtectionUnitIds(?array $value): void {
        $this->getBackingStore()->set('noResultProtectionUnitIds', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the searchResponseId property value. The unique identifier of the search response.
     * @param string|null $value Value to set for the searchResponseId property.
    */
    public function setSearchResponseId(?string $value): void {
        $this->getBackingStore()->set('searchResponseId', $value);
    }

    /**
     * Sets the searchResults property value. Contains a collection of restore points.
     * @param array<RestorePointSearchResult>|null $value Value to set for the searchResults property.
    */
    public function setSearchResults(?array $value): void {
        $this->getBackingStore()->set('searchResults', $value);
    }

}
