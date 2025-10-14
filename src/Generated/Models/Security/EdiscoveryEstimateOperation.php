<?php

namespace Microsoft\\Graph\\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class EdiscoveryEstimateOperation extends CaseOperation implements Parsable 
{
    /**
     * Instantiates a new EdiscoveryEstimateOperation and sets the default values.
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
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'indexedItemCount' => fn(ParseNode $n) => $o->setIndexedItemCount($n->getIntegerValue()),
            'indexedItemsSize' => fn(ParseNode $n) => $o->setIndexedItemsSize($n->getIntegerValue()),
            'mailboxCount' => fn(ParseNode $n) => $o->setMailboxCount($n->getIntegerValue()),
            'reportFileMetadata' => fn(ParseNode $n) => $o->setReportFileMetadata($n->getCollectionOfObjectValues([ReportFileMetadata::class, 'createFromDiscriminatorValue'])),
            'search' => fn(ParseNode $n) => $o->setSearch($n->getObjectValue([EdiscoverySearch::class, 'createFromDiscriminatorValue'])),
            'siteCount' => fn(ParseNode $n) => $o->setSiteCount($n->getIntegerValue()),
            'statisticsOptions' => fn(ParseNode $n) => $o->setStatisticsOptions($n->getEnumValue(StatisticsOptions::class)),
            'unindexedItemCount' => fn(ParseNode $n) => $o->setUnindexedItemCount($n->getIntegerValue()),
            'unindexedItemsSize' => fn(ParseNode $n) => $o->setUnindexedItemsSize($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the indexedItemCount property value. The estimated count of items for the search that matched the content query.
     * @return int|null
    */
    public function getIndexedItemCount(): ?int {
        $val = $this->getBackingStore()->get('indexedItemCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'indexedItemCount'");
    }

    /**
     * Gets the indexedItemsSize property value. The estimated size of items for the search that matched the content query.
     * @return int|null
    */
    public function getIndexedItemsSize(): ?int {
        $val = $this->getBackingStore()->get('indexedItemsSize');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'indexedItemsSize'");
    }

    /**
     * Gets the mailboxCount property value. The number of mailboxes that had search hits.
     * @return int|null
    */
    public function getMailboxCount(): ?int {
        $val = $this->getBackingStore()->get('mailboxCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mailboxCount'");
    }

    /**
     * Gets the reportFileMetadata property value. Contains the properties for report file metadata, including downloadUrl, fileName, and size.
     * @return array<ReportFileMetadata>|null
    */
    public function getReportFileMetadata(): ?array {
        $val = $this->getBackingStore()->get('reportFileMetadata');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ReportFileMetadata::class);
            /** @var array<ReportFileMetadata>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reportFileMetadata'");
    }

    /**
     * Gets the search property value. eDiscovery search.
     * @return EdiscoverySearch|null
    */
    public function getSearch(): ?EdiscoverySearch {
        $val = $this->getBackingStore()->get('search');
        if (is_null($val) || $val instanceof EdiscoverySearch) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'search'");
    }

    /**
     * Gets the siteCount property value. The number of mailboxes that had search hits.
     * @return int|null
    */
    public function getSiteCount(): ?int {
        $val = $this->getBackingStore()->get('siteCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'siteCount'");
    }

    /**
     * Gets the statisticsOptions property value. The options to generate statistics. Possible values are: includeRefiners, includeQueryStats, includeUnindexedStats, advancedIndexing, locationsWithoutHits, unknownFutureValue.
     * @return StatisticsOptions|null
    */
    public function getStatisticsOptions(): ?StatisticsOptions {
        $val = $this->getBackingStore()->get('statisticsOptions');
        if (is_null($val) || $val instanceof StatisticsOptions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'statisticsOptions'");
    }

    /**
     * Gets the unindexedItemCount property value. The estimated count of unindexed items for the collection.
     * @return int|null
    */
    public function getUnindexedItemCount(): ?int {
        $val = $this->getBackingStore()->get('unindexedItemCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unindexedItemCount'");
    }

    /**
     * Gets the unindexedItemsSize property value. The estimated size of unindexed items for the collection.
     * @return int|null
    */
    public function getUnindexedItemsSize(): ?int {
        $val = $this->getBackingStore()->get('unindexedItemsSize');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unindexedItemsSize'");
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
        $writer->writeCollectionOfObjectValues('reportFileMetadata', $this->getReportFileMetadata());
        $writer->writeObjectValue('search', $this->getSearch());
        $writer->writeIntegerValue('siteCount', $this->getSiteCount());
        $writer->writeEnumValue('statisticsOptions', $this->getStatisticsOptions());
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
     * Sets the reportFileMetadata property value. Contains the properties for report file metadata, including downloadUrl, fileName, and size.
     * @param array<ReportFileMetadata>|null $value Value to set for the reportFileMetadata property.
    */
    public function setReportFileMetadata(?array $value): void {
        $this->getBackingStore()->set('reportFileMetadata', $value);
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
     * Sets the statisticsOptions property value. The options to generate statistics. Possible values are: includeRefiners, includeQueryStats, includeUnindexedStats, advancedIndexing, locationsWithoutHits, unknownFutureValue.
     * @param StatisticsOptions|null $value Value to set for the statisticsOptions property.
    */
    public function setStatisticsOptions(?StatisticsOptions $value): void {
        $this->getBackingStore()->set('statisticsOptions', $value);
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
