<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SiteCollection implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SiteCollection and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SiteCollection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SiteCollection {
        return new SiteCollection();
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
     * Gets the archivalDetails property value. The archivalDetails property
     * @return SiteArchivalDetails|null
    */
    public function getArchivalDetails(): ?SiteArchivalDetails {
        $val = $this->getBackingStore()->get('archivalDetails');
        if (is_null($val) || $val instanceof SiteArchivalDetails) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'archivalDetails'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the dataLocationCode property value. The geographic region code for where this site collection resides. Only present for multi-geo tenants. Read-only.
     * @return string|null
    */
    public function getDataLocationCode(): ?string {
        $val = $this->getBackingStore()->get('dataLocationCode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dataLocationCode'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'archivalDetails' => fn(ParseNode $n) => $o->setArchivalDetails($n->getObjectValue([SiteArchivalDetails::class, 'createFromDiscriminatorValue'])),
            'dataLocationCode' => fn(ParseNode $n) => $o->setDataLocationCode($n->getStringValue()),
            'hostname' => fn(ParseNode $n) => $o->setHostname($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'root' => fn(ParseNode $n) => $o->setRoot($n->getObjectValue([Root::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the hostname property value. The hostname for the site collection. Read-only.
     * @return string|null
    */
    public function getHostname(): ?string {
        $val = $this->getBackingStore()->get('hostname');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hostname'");
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
     * Gets the root property value. If present, indicates that this is a root site collection in SharePoint. Read-only.
     * @return Root|null
    */
    public function getRoot(): ?Root {
        $val = $this->getBackingStore()->get('root');
        if (is_null($val) || $val instanceof Root) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'root'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('archivalDetails', $this->getArchivalDetails());
        $writer->writeStringValue('dataLocationCode', $this->getDataLocationCode());
        $writer->writeStringValue('hostname', $this->getHostname());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('root', $this->getRoot());
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
     * Sets the archivalDetails property value. The archivalDetails property
     * @param SiteArchivalDetails|null $value Value to set for the archivalDetails property.
    */
    public function setArchivalDetails(?SiteArchivalDetails $value): void {
        $this->getBackingStore()->set('archivalDetails', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the dataLocationCode property value. The geographic region code for where this site collection resides. Only present for multi-geo tenants. Read-only.
     * @param string|null $value Value to set for the dataLocationCode property.
    */
    public function setDataLocationCode(?string $value): void {
        $this->getBackingStore()->set('dataLocationCode', $value);
    }

    /**
     * Sets the hostname property value. The hostname for the site collection. Read-only.
     * @param string|null $value Value to set for the hostname property.
    */
    public function setHostname(?string $value): void {
        $this->getBackingStore()->set('hostname', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the root property value. If present, indicates that this is a root site collection in SharePoint. Read-only.
     * @param Root|null $value Value to set for the root property.
    */
    public function setRoot(?Root $value): void {
        $this->getBackingStore()->set('root', $value);
    }

}
