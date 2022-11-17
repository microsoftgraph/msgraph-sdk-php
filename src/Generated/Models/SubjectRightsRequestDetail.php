<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SubjectRightsRequestDetail implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new subjectRightsRequestDetail and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.subjectRightsRequestDetail');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SubjectRightsRequestDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SubjectRightsRequestDetail {
        return new SubjectRightsRequestDetail();
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
     * Gets the excludedItemCount property value. Count of items that are excluded from the request.
     * @return int|null
    */
    public function getExcludedItemCount(): ?int {
        return $this->getBackingStore()->get('excludedItemCount');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'excludedItemCount' => fn(ParseNode $n) => $o->setExcludedItemCount($n->getIntegerValue()),
            'insightCounts' => fn(ParseNode $n) => $o->setInsightCounts($n->getCollectionOfObjectValues([KeyValuePair::class, 'createFromDiscriminatorValue'])),
            'itemCount' => fn(ParseNode $n) => $o->setItemCount($n->getIntegerValue()),
            'itemNeedReview' => fn(ParseNode $n) => $o->setItemNeedReview($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'productItemCounts' => fn(ParseNode $n) => $o->setProductItemCounts($n->getCollectionOfObjectValues([KeyValuePair::class, 'createFromDiscriminatorValue'])),
            'signedOffItemCount' => fn(ParseNode $n) => $o->setSignedOffItemCount($n->getIntegerValue()),
            'totalItemSize' => fn(ParseNode $n) => $o->setTotalItemSize($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the insightCounts property value. Count of items per insight.
     * @return array<KeyValuePair>|null
    */
    public function getInsightCounts(): ?array {
        return $this->getBackingStore()->get('insightCounts');
    }

    /**
     * Gets the itemCount property value. Count of items found.
     * @return int|null
    */
    public function getItemCount(): ?int {
        return $this->getBackingStore()->get('itemCount');
    }

    /**
     * Gets the itemNeedReview property value. Count of item that need review.
     * @return int|null
    */
    public function getItemNeedReview(): ?int {
        return $this->getBackingStore()->get('itemNeedReview');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the productItemCounts property value. Count of items per product, such as Exchange, SharePoint, OneDrive, and Teams.
     * @return array<KeyValuePair>|null
    */
    public function getProductItemCounts(): ?array {
        return $this->getBackingStore()->get('productItemCounts');
    }

    /**
     * Gets the signedOffItemCount property value. Count of items signed off by the administrator.
     * @return int|null
    */
    public function getSignedOffItemCount(): ?int {
        return $this->getBackingStore()->get('signedOffItemCount');
    }

    /**
     * Gets the totalItemSize property value. Total item size in bytes.
     * @return int|null
    */
    public function getTotalItemSize(): ?int {
        return $this->getBackingStore()->get('totalItemSize');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('excludedItemCount', $this->getExcludedItemCount());
        $writer->writeCollectionOfObjectValues('insightCounts', $this->getInsightCounts());
        $writer->writeIntegerValue('itemCount', $this->getItemCount());
        $writer->writeIntegerValue('itemNeedReview', $this->getItemNeedReview());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('productItemCounts', $this->getProductItemCounts());
        $writer->writeIntegerValue('signedOffItemCount', $this->getSignedOffItemCount());
        $writer->writeIntegerValue('totalItemSize', $this->getTotalItemSize());
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
     * Sets the excludedItemCount property value. Count of items that are excluded from the request.
     *  @param int|null $value Value to set for the excludedItemCount property.
    */
    public function setExcludedItemCount(?int $value): void {
        $this->getBackingStore()->set('excludedItemCount', $value);
    }

    /**
     * Sets the insightCounts property value. Count of items per insight.
     *  @param array<KeyValuePair>|null $value Value to set for the insightCounts property.
    */
    public function setInsightCounts(?array $value): void {
        $this->getBackingStore()->set('insightCounts', $value);
    }

    /**
     * Sets the itemCount property value. Count of items found.
     *  @param int|null $value Value to set for the itemCount property.
    */
    public function setItemCount(?int $value): void {
        $this->getBackingStore()->set('itemCount', $value);
    }

    /**
     * Sets the itemNeedReview property value. Count of item that need review.
     *  @param int|null $value Value to set for the itemNeedReview property.
    */
    public function setItemNeedReview(?int $value): void {
        $this->getBackingStore()->set('itemNeedReview', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the productItemCounts property value. Count of items per product, such as Exchange, SharePoint, OneDrive, and Teams.
     *  @param array<KeyValuePair>|null $value Value to set for the productItemCounts property.
    */
    public function setProductItemCounts(?array $value): void {
        $this->getBackingStore()->set('productItemCounts', $value);
    }

    /**
     * Sets the signedOffItemCount property value. Count of items signed off by the administrator.
     *  @param int|null $value Value to set for the signedOffItemCount property.
    */
    public function setSignedOffItemCount(?int $value): void {
        $this->getBackingStore()->set('signedOffItemCount', $value);
    }

    /**
     * Sets the totalItemSize property value. Total item size in bytes.
     *  @param int|null $value Value to set for the totalItemSize property.
    */
    public function setTotalItemSize(?int $value): void {
        $this->getBackingStore()->set('totalItemSize', $value);
    }

}
