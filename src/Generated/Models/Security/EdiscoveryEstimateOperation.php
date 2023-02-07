<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EdiscoveryEstimateOperation extends CaseOperation implements Parsable 
{
    /**
     * Instantiates a new ediscoveryEstimateOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EdiscoveryEstimateOperation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EdiscoveryEstimateOperation {
        return new EdiscoveryEstimateOperation();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'indexedItemCount' => fn(ParseNode $n) => $o->setIndexedItemCount($n->getIntegerValue()),
            'indexedItemsSize' => fn(ParseNode $n) => $o->setIndexedItemsSize($n->getIntegerValue()),
            'mailboxCount' => fn(ParseNode $n) => $o->setMailboxCount($n->getIntegerValue()),
            'search' => fn(ParseNode $n) => $o->setSearch($n->getObjectValue([EdiscoverySearch::class, 'createFromDiscriminatorValue'])),
            'siteCount' => fn(ParseNode $n) => $o->setSiteCount($n->getIntegerValue()),
            'unindexedItemCount' => fn(ParseNode $n) => $o->setUnindexedItemCount($n->getIntegerValue()),
            'unindexedItemsSize' => fn(ParseNode $n) => $o->setUnindexedItemsSize($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the indexedItemCount property value. The estimated count of items for the search that matched the content query.
     * @return int|null
    */
    public function getIndexedItemCount(): ?int {
        return $this->getBackingStore()->get('indexedItemCount');
    }

    /**
     * Gets the indexedItemsSize property value. The estimated size of items for the search that matched the content query.
     * @return int|null
    */
    public function getIndexedItemsSize(): ?int {
        return $this->getBackingStore()->get('indexedItemsSize');
    }

    /**
     * Gets the mailboxCount property value. The number of mailboxes that had search hits.
     * @return int|null
    */
    public function getMailboxCount(): ?int {
        return $this->getBackingStore()->get('mailboxCount');
    }

    /**
     * Gets the search property value. eDiscovery search.
     * @return EdiscoverySearch|null
    */
    public function getSearch(): ?EdiscoverySearch {
        return $this->getBackingStore()->get('search');
    }

    /**
     * Gets the siteCount property value. The number of mailboxes that had search hits.
     * @return int|null
    */
    public function getSiteCount(): ?int {
        return $this->getBackingStore()->get('siteCount');
    }

    /**
     * Gets the unindexedItemCount property value. The estimated count of unindexed items for the collection.
     * @return int|null
    */
    public function getUnindexedItemCount(): ?int {
        return $this->getBackingStore()->get('unindexedItemCount');
    }

    /**
     * Gets the unindexedItemsSize property value. The estimated size of unindexed items for the collection.
     * @return int|null
    */
    public function getUnindexedItemsSize(): ?int {
        return $this->getBackingStore()->get('unindexedItemsSize');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('indexedItemCount', $this->getIndexedItemCount());
        $writer->writeIntegerValue('indexedItemsSize', $this->getIndexedItemsSize());
        $writer->writeIntegerValue('mailboxCount', $this->getMailboxCount());
        $writer->writeObjectValue('search', $this->getSearch());
        $writer->writeIntegerValue('siteCount', $this->getSiteCount());
        $writer->writeIntegerValue('unindexedItemCount', $this->getUnindexedItemCount());
        $writer->writeIntegerValue('unindexedItemsSize', $this->getUnindexedItemsSize());
    }

    /**
     * Sets the indexedItemCount property value. The estimated count of items for the search that matched the content query.
     * @param int|null $value Value to set for the indexedItemCount property.
    */
    public function setIndexedItemCount(?int $value): void {
        $this->getBackingStore()->set('indexedItemCount', $value);
    }

    /**
     * Sets the indexedItemsSize property value. The estimated size of items for the search that matched the content query.
     * @param int|null $value Value to set for the indexedItemsSize property.
    */
    public function setIndexedItemsSize(?int $value): void {
        $this->getBackingStore()->set('indexedItemsSize', $value);
    }

    /**
     * Sets the mailboxCount property value. The number of mailboxes that had search hits.
     * @param int|null $value Value to set for the mailboxCount property.
    */
    public function setMailboxCount(?int $value): void {
        $this->getBackingStore()->set('mailboxCount', $value);
    }

    /**
     * Sets the search property value. eDiscovery search.
     * @param EdiscoverySearch|null $value Value to set for the search property.
    */
    public function setSearch(?EdiscoverySearch $value): void {
        $this->getBackingStore()->set('search', $value);
    }

    /**
     * Sets the siteCount property value. The number of mailboxes that had search hits.
     * @param int|null $value Value to set for the siteCount property.
    */
    public function setSiteCount(?int $value): void {
        $this->getBackingStore()->set('siteCount', $value);
    }

    /**
     * Sets the unindexedItemCount property value. The estimated count of unindexed items for the collection.
     * @param int|null $value Value to set for the unindexedItemCount property.
    */
    public function setUnindexedItemCount(?int $value): void {
        $this->getBackingStore()->set('unindexedItemCount', $value);
    }

    /**
     * Sets the unindexedItemsSize property value. The estimated size of unindexed items for the collection.
     * @param int|null $value Value to set for the unindexedItemsSize property.
    */
    public function setUnindexedItemsSize(?int $value): void {
        $this->getBackingStore()->set('unindexedItemsSize', $value);
    }

}
