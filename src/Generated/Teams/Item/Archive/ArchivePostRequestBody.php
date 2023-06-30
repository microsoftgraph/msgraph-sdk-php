<?php

namespace Microsoft\Graph\Generated\Teams\Item\Archive;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ArchivePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new archivePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ArchivePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ArchivePostRequestBody {
        return new ArchivePostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the backingStore property value. Stores model information.
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
            'shouldSetSpoSiteReadOnlyForMembers' => fn(ParseNode $n) => $o->setShouldSetSpoSiteReadOnlyForMembers($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the shouldSetSpoSiteReadOnlyForMembers property value. The shouldSetSpoSiteReadOnlyForMembers property
     * @return bool|null
    */
    public function getShouldSetSpoSiteReadOnlyForMembers(): ?bool {
        $val = $this->getBackingStore()->get('shouldSetSpoSiteReadOnlyForMembers');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'shouldSetSpoSiteReadOnlyForMembers'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('shouldSetSpoSiteReadOnlyForMembers', $this->getShouldSetSpoSiteReadOnlyForMembers());
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
     * Sets the shouldSetSpoSiteReadOnlyForMembers property value. The shouldSetSpoSiteReadOnlyForMembers property
     * @param bool|null $value Value to set for the shouldSetSpoSiteReadOnlyForMembers property.
    */
    public function setShouldSetSpoSiteReadOnlyForMembers(?bool $value): void {
        $this->getBackingStore()->set('shouldSetSpoSiteReadOnlyForMembers', $value);
    }

}
