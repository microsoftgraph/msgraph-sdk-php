<?php

namespace Microsoft\Graph\Generated\Admin\Edge\InternetExplorerMode\SiteLists\Item\Publish;

use Microsoft\Graph\Generated\Models\BrowserSharedCookie;
use Microsoft\Graph\Generated\Models\BrowserSite;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class PublishPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new publishPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PublishPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PublishPostRequestBody {
        return new PublishPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'revision' => fn(ParseNode $n) => $o->setRevision($n->getStringValue()),
            'sharedCookies' => fn(ParseNode $n) => $o->setSharedCookies($n->getCollectionOfObjectValues([BrowserSharedCookie::class, 'createFromDiscriminatorValue'])),
            'sites' => fn(ParseNode $n) => $o->setSites($n->getCollectionOfObjectValues([BrowserSite::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the revision property value. The revision property
     * @return string|null
    */
    public function getRevision(): ?string {
        return $this->getBackingStore()->get('revision');
    }

    /**
     * Gets the sharedCookies property value. The sharedCookies property
     * @return array<BrowserSharedCookie>|null
    */
    public function getSharedCookies(): ?array {
        return $this->getBackingStore()->get('sharedCookies');
    }

    /**
     * Gets the sites property value. The sites property
     * @return array<BrowserSite>|null
    */
    public function getSites(): ?array {
        return $this->getBackingStore()->get('sites');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('revision', $this->getRevision());
        $writer->writeCollectionOfObjectValues('sharedCookies', $this->getSharedCookies());
        $writer->writeCollectionOfObjectValues('sites', $this->getSites());
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
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the revision property value. The revision property
     * @param string|null $value Value to set for the revision property.
    */
    public function setRevision(?string $value): void {
        $this->getBackingStore()->set('revision', $value);
    }

    /**
     * Sets the sharedCookies property value. The sharedCookies property
     * @param array<BrowserSharedCookie>|null $value Value to set for the sharedCookies property.
    */
    public function setSharedCookies(?array $value): void {
        $this->getBackingStore()->set('sharedCookies', $value);
    }

    /**
     * Sets the sites property value. The sites property
     * @param array<BrowserSite>|null $value Value to set for the sites property.
    */
    public function setSites(?array $value): void {
        $this->getBackingStore()->set('sites', $value);
    }

}
