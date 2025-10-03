<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SharepointIds implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SharepointIds and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharepointIds
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharepointIds {
        return new SharepointIds();
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
            'listId' => fn(ParseNode $n) => $o->setListId($n->getStringValue()),
            'listItemId' => fn(ParseNode $n) => $o->setListItemId($n->getStringValue()),
            'listItemUniqueId' => fn(ParseNode $n) => $o->setListItemUniqueId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'siteId' => fn(ParseNode $n) => $o->setSiteId($n->getStringValue()),
            'siteUrl' => fn(ParseNode $n) => $o->setSiteUrl($n->getStringValue()),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
            'webId' => fn(ParseNode $n) => $o->setWebId($n->getStringValue()),
        ];
    }

    /**
     * Gets the listId property value. The unique identifier (guid) for the item's list in SharePoint.
     * @return string|null
    */
    public function getListId(): ?string {
        $val = $this->getBackingStore()->get('listId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'listId'");
    }

    /**
     * Gets the listItemId property value. An integer identifier for the item within the containing list.
     * @return string|null
    */
    public function getListItemId(): ?string {
        $val = $this->getBackingStore()->get('listItemId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'listItemId'");
    }

    /**
     * Gets the listItemUniqueId property value. The unique identifier (guid) for the item within OneDrive for Business or a SharePoint site.
     * @return string|null
    */
    public function getListItemUniqueId(): ?string {
        $val = $this->getBackingStore()->get('listItemUniqueId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'listItemUniqueId'");
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
     * Gets the siteId property value. The unique identifier (guid) for the item's site collection (SPSite).
     * @return string|null
    */
    public function getSiteId(): ?string {
        $val = $this->getBackingStore()->get('siteId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'siteId'");
    }

    /**
     * Gets the siteUrl property value. The SharePoint URL for the site that contains the item.
     * @return string|null
    */
    public function getSiteUrl(): ?string {
        $val = $this->getBackingStore()->get('siteUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'siteUrl'");
    }

    /**
     * Gets the tenantId property value. The unique identifier (guid) for the tenancy.
     * @return string|null
    */
    public function getTenantId(): ?string {
        $val = $this->getBackingStore()->get('tenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantId'");
    }

    /**
     * Gets the webId property value. The unique identifier (guid) for the item's site (SPWeb).
     * @return string|null
    */
    public function getWebId(): ?string {
        $val = $this->getBackingStore()->get('webId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'webId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('listId', $this->getListId());
        $writer->writeStringValue('listItemId', $this->getListItemId());
        $writer->writeStringValue('listItemUniqueId', $this->getListItemUniqueId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('siteId', $this->getSiteId());
        $writer->writeStringValue('siteUrl', $this->getSiteUrl());
        $writer->writeStringValue('tenantId', $this->getTenantId());
        $writer->writeStringValue('webId', $this->getWebId());
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
     * Sets the listId property value. The unique identifier (guid) for the item's list in SharePoint.
     * @param string|null $value Value to set for the listId property.
    */
    public function setListId(?string $value): void {
        $this->getBackingStore()->set('listId', $value);
    }

    /**
     * Sets the listItemId property value. An integer identifier for the item within the containing list.
     * @param string|null $value Value to set for the listItemId property.
    */
    public function setListItemId(?string $value): void {
        $this->getBackingStore()->set('listItemId', $value);
    }

    /**
     * Sets the listItemUniqueId property value. The unique identifier (guid) for the item within OneDrive for Business or a SharePoint site.
     * @param string|null $value Value to set for the listItemUniqueId property.
    */
    public function setListItemUniqueId(?string $value): void {
        $this->getBackingStore()->set('listItemUniqueId', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the siteId property value. The unique identifier (guid) for the item's site collection (SPSite).
     * @param string|null $value Value to set for the siteId property.
    */
    public function setSiteId(?string $value): void {
        $this->getBackingStore()->set('siteId', $value);
    }

    /**
     * Sets the siteUrl property value. The SharePoint URL for the site that contains the item.
     * @param string|null $value Value to set for the siteUrl property.
    */
    public function setSiteUrl(?string $value): void {
        $this->getBackingStore()->set('siteUrl', $value);
    }

    /**
     * Sets the tenantId property value. The unique identifier (guid) for the tenancy.
     * @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

    /**
     * Sets the webId property value. The unique identifier (guid) for the item's site (SPWeb).
     * @param string|null $value Value to set for the webId property.
    */
    public function setWebId(?string $value): void {
        $this->getBackingStore()->set('webId', $value);
    }

}
