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
     * Instantiates a new siteCollection and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.siteCollection');
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
     * Gets the dataLocationCode property value. The geographic region code for where this site collection resides. Read-only.
     * @return string|null
    */
    public function getDataLocationCode(): ?string {
        return $this->getBackingStore()->get('dataLocationCode');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
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
        return $this->getBackingStore()->get('hostname');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the root property value. If present, indicates that this is a root site collection in SharePoint. Read-only.
     * @return Root|null
    */
    public function getRoot(): ?Root {
        return $this->getBackingStore()->get('root');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('dataLocationCode', $this->getDataLocationCode());
        $writer->writeStringValue('hostname', $this->getHostname());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('root', $this->getRoot());
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
     * Sets the dataLocationCode property value. The geographic region code for where this site collection resides. Read-only.
     *  @param string|null $value Value to set for the dataLocationCode property.
    */
    public function setDataLocationCode(?string $value): void {
        $this->getBackingStore()->set('dataLocationCode', $value);
    }

    /**
     * Sets the hostname property value. The hostname for the site collection. Read-only.
     *  @param string|null $value Value to set for the hostname property.
    */
    public function setHostname(?string $value): void {
        $this->getBackingStore()->set('hostname', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the root property value. If present, indicates that this is a root site collection in SharePoint. Read-only.
     *  @param Root|null $value Value to set for the root property.
    */
    public function setRoot(?Root $value): void {
        $this->getBackingStore()->set('root', $value);
    }

}
