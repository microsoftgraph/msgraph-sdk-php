<?php

namespace Microsoft\Graph\Generated\Drive\EscapedList\ContentTypes\Item\AssociateWithHubSites;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AssociateWithHubSitesPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new associateWithHubSitesPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AssociateWithHubSitesPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AssociateWithHubSitesPostRequestBody {
        return new AssociateWithHubSitesPostRequestBody();
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'hubSiteUrls' => fn(ParseNode $n) => $o->setHubSiteUrls($n->getCollectionOfPrimitiveValues()),
            'propagateToExistingLists' => fn(ParseNode $n) => $o->setPropagateToExistingLists($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the hubSiteUrls property value. The hubSiteUrls property
     * @return array<string>|null
    */
    public function getHubSiteUrls(): ?array {
        return $this->getBackingStore()->get('hubSiteUrls');
    }

    /**
     * Gets the propagateToExistingLists property value. The propagateToExistingLists property
     * @return bool|null
    */
    public function getPropagateToExistingLists(): ?bool {
        return $this->getBackingStore()->get('propagateToExistingLists');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('hubSiteUrls', $this->getHubSiteUrls());
        $writer->writeBooleanValue('propagateToExistingLists', $this->getPropagateToExistingLists());
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
     * Sets the hubSiteUrls property value. The hubSiteUrls property
     *  @param array<string>|null $value Value to set for the hubSiteUrls property.
    */
    public function setHubSiteUrls(?array $value): void {
        $this->getBackingStore()->set('hubSiteUrls', $value);
    }

    /**
     * Sets the propagateToExistingLists property value. The propagateToExistingLists property
     *  @param bool|null $value Value to set for the propagateToExistingLists property.
    */
    public function setPropagateToExistingLists(?bool $value): void {
        $this->getBackingStore()->set('propagateToExistingLists', $value);
    }

}
