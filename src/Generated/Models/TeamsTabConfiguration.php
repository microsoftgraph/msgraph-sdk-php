<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TeamsTabConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new teamsTabConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.teamsTabConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamsTabConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamsTabConfiguration {
        return new TeamsTabConfiguration();
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
     * Gets the contentUrl property value. Url used for rendering tab contents in Teams. Required.
     * @return string|null
    */
    public function getContentUrl(): ?string {
        return $this->getBackingStore()->get('contentUrl');
    }

    /**
     * Gets the entityId property value. Identifier for the entity hosted by the tab provider.
     * @return string|null
    */
    public function getEntityId(): ?string {
        return $this->getBackingStore()->get('entityId');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'contentUrl' => fn(ParseNode $n) => $o->setContentUrl($n->getStringValue()),
            'entityId' => fn(ParseNode $n) => $o->setEntityId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'removeUrl' => fn(ParseNode $n) => $o->setRemoveUrl($n->getStringValue()),
            'websiteUrl' => fn(ParseNode $n) => $o->setWebsiteUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the removeUrl property value. Url called by Teams client when a Tab is removed using the Teams Client.
     * @return string|null
    */
    public function getRemoveUrl(): ?string {
        return $this->getBackingStore()->get('removeUrl');
    }

    /**
     * Gets the websiteUrl property value. Url for showing tab contents outside of Teams.
     * @return string|null
    */
    public function getWebsiteUrl(): ?string {
        return $this->getBackingStore()->get('websiteUrl');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('contentUrl', $this->getContentUrl());
        $writer->writeStringValue('entityId', $this->getEntityId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('removeUrl', $this->getRemoveUrl());
        $writer->writeStringValue('websiteUrl', $this->getWebsiteUrl());
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
     * Sets the contentUrl property value. Url used for rendering tab contents in Teams. Required.
     *  @param string|null $value Value to set for the contentUrl property.
    */
    public function setContentUrl(?string $value): void {
        $this->getBackingStore()->set('contentUrl', $value);
    }

    /**
     * Sets the entityId property value. Identifier for the entity hosted by the tab provider.
     *  @param string|null $value Value to set for the entityId property.
    */
    public function setEntityId(?string $value): void {
        $this->getBackingStore()->set('entityId', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the removeUrl property value. Url called by Teams client when a Tab is removed using the Teams Client.
     *  @param string|null $value Value to set for the removeUrl property.
    */
    public function setRemoveUrl(?string $value): void {
        $this->getBackingStore()->set('removeUrl', $value);
    }

    /**
     * Sets the websiteUrl property value. Url for showing tab contents outside of Teams.
     *  @param string|null $value Value to set for the websiteUrl property.
    */
    public function setWebsiteUrl(?string $value): void {
        $this->getBackingStore()->set('websiteUrl', $value);
    }

}
