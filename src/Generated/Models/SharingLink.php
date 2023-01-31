<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SharingLink implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new sharingLink and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharingLink
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharingLink {
        return new SharingLink();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the application property value. The app the link is associated with.
     * @return Identity|null
    */
    public function getApplication(): ?Identity {
        return $this->getBackingStore()->get('application');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'application' => fn(ParseNode $n) => $o->setApplication($n->getObjectValue([Identity::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'preventsDownload' => fn(ParseNode $n) => $o->setPreventsDownload($n->getBooleanValue()),
            'scope' => fn(ParseNode $n) => $o->setScope($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
            'webHtml' => fn(ParseNode $n) => $o->setWebHtml($n->getStringValue()),
            'webUrl' => fn(ParseNode $n) => $o->setWebUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. 
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the preventsDownload property value. If true then the user can only use this link to view the item on the web, and cannot use it to download the contents of the item. Only for OneDrive for Business and SharePoint.
     * @return bool|null
    */
    public function getPreventsDownload(): ?bool {
        return $this->getBackingStore()->get('preventsDownload');
    }

    /**
     * Gets the scope property value. The scope of the link represented by this permission. Value anonymous indicates the link is usable by anyone, organization indicates the link is only usable for users signed into the same tenant.
     * @return string|null
    */
    public function getScope(): ?string {
        return $this->getBackingStore()->get('scope');
    }

    /**
     * Gets the type property value. The type of the link created.
     * @return string|null
    */
    public function getType(): ?string {
        return $this->getBackingStore()->get('type');
    }

    /**
     * Gets the webHtml property value. For embed links, this property contains the HTML code for an <iframe> element that will embed the item in a webpage.
     * @return string|null
    */
    public function getWebHtml(): ?string {
        return $this->getBackingStore()->get('webHtml');
    }

    /**
     * Gets the webUrl property value. A URL that opens the item in the browser on the OneDrive website.
     * @return string|null
    */
    public function getWebUrl(): ?string {
        return $this->getBackingStore()->get('webUrl');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('application', $this->getApplication());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('preventsDownload', $this->getPreventsDownload());
        $writer->writeStringValue('scope', $this->getScope());
        $writer->writeStringValue('type', $this->getType());
        $writer->writeStringValue('webHtml', $this->getWebHtml());
        $writer->writeStringValue('webUrl', $this->getWebUrl());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the application property value. The app the link is associated with.
     * @param Identity|null $value Value to set for the application property.
    */
    public function setApplication(?Identity $value): void {
        $this->getBackingStore()->set('application', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. 
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the preventsDownload property value. If true then the user can only use this link to view the item on the web, and cannot use it to download the contents of the item. Only for OneDrive for Business and SharePoint.
     * @param bool|null $value Value to set for the preventsDownload property.
    */
    public function setPreventsDownload(?bool $value): void {
        $this->getBackingStore()->set('preventsDownload', $value);
    }

    /**
     * Sets the scope property value. The scope of the link represented by this permission. Value anonymous indicates the link is usable by anyone, organization indicates the link is only usable for users signed into the same tenant.
     * @param string|null $value Value to set for the scope property.
    */
    public function setScope(?string $value): void {
        $this->getBackingStore()->set('scope', $value);
    }

    /**
     * Sets the type property value. The type of the link created.
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->getBackingStore()->set('type', $value);
    }

    /**
     * Sets the webHtml property value. For embed links, this property contains the HTML code for an <iframe> element that will embed the item in a webpage.
     * @param string|null $value Value to set for the webHtml property.
    */
    public function setWebHtml(?string $value): void {
        $this->getBackingStore()->set('webHtml', $value);
    }

    /**
     * Sets the webUrl property value. A URL that opens the item in the browser on the OneDrive website.
     * @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value): void {
        $this->getBackingStore()->set('webUrl', $value);
    }

}
