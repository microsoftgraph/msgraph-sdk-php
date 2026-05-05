<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\BrowseSessions\Item\Browse;

use Microsoft\Graph\Generated\Models\BrowsableResourceType;
use Microsoft\Graph\Generated\Models\BrowseQueryOrder;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class BrowsePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new BrowsePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BrowsePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BrowsePostRequestBody {
        return new BrowsePostRequestBody();
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
     * Gets the browseLocationItemKey property value. The browseLocationItemKey property
     * @return string|null
    */
    public function getBrowseLocationItemKey(): ?string {
        $val = $this->getBackingStore()->get('browseLocationItemKey');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'browseLocationItemKey'");
    }

    /**
     * Gets the browseResourceType property value. The browseResourceType property
     * @return BrowsableResourceType|null
    */
    public function getBrowseResourceType(): ?BrowsableResourceType {
        $val = $this->getBackingStore()->get('browseResourceType');
        if (is_null($val) || $val instanceof BrowsableResourceType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'browseResourceType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'browseLocationItemKey' => fn(ParseNode $n) => $o->setBrowseLocationItemKey($n->getStringValue()),
            'browseResourceType' => fn(ParseNode $n) => $o->setBrowseResourceType($n->getEnumValue(BrowsableResourceType::class)),
            'filter' => fn(ParseNode $n) => $o->setFilter($n->getStringValue()),
            'orderBy' => fn(ParseNode $n) => $o->setOrderBy($n->getEnumValue(BrowseQueryOrder::class)),
        ];
    }

    /**
     * Gets the filter property value. The filter property
     * @return string|null
    */
    public function getFilter(): ?string {
        $val = $this->getBackingStore()->get('filter');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'filter'");
    }

    /**
     * Gets the orderBy property value. The orderBy property
     * @return BrowseQueryOrder|null
    */
    public function getOrderBy(): ?BrowseQueryOrder {
        $val = $this->getBackingStore()->get('orderBy');
        if (is_null($val) || $val instanceof BrowseQueryOrder) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'orderBy'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('browseLocationItemKey', $this->getBrowseLocationItemKey());
        $writer->writeEnumValue('browseResourceType', $this->getBrowseResourceType());
        $writer->writeStringValue('filter', $this->getFilter());
        $writer->writeEnumValue('orderBy', $this->getOrderBy());
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
     * Sets the browseLocationItemKey property value. The browseLocationItemKey property
     * @param string|null $value Value to set for the browseLocationItemKey property.
    */
    public function setBrowseLocationItemKey(?string $value): void {
        $this->getBackingStore()->set('browseLocationItemKey', $value);
    }

    /**
     * Sets the browseResourceType property value. The browseResourceType property
     * @param BrowsableResourceType|null $value Value to set for the browseResourceType property.
    */
    public function setBrowseResourceType(?BrowsableResourceType $value): void {
        $this->getBackingStore()->set('browseResourceType', $value);
    }

    /**
     * Sets the filter property value. The filter property
     * @param string|null $value Value to set for the filter property.
    */
    public function setFilter(?string $value): void {
        $this->getBackingStore()->set('filter', $value);
    }

    /**
     * Sets the orderBy property value. The orderBy property
     * @param BrowseQueryOrder|null $value Value to set for the orderBy property.
    */
    public function setOrderBy(?BrowseQueryOrder $value): void {
        $this->getBackingStore()->set('orderBy', $value);
    }

}
