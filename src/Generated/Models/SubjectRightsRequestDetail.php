<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SubjectRightsRequestDetail implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $excludedItemCount Count of items that are excluded from the request.
    */
    private ?int $excludedItemCount = null;
    
    /**
     * @var array<KeyValuePair>|null $insightCounts Count of items per insight.
    */
    private ?array $insightCounts = null;
    
    /**
     * @var int|null $itemCount Count of items found.
    */
    private ?int $itemCount = null;
    
    /**
     * @var int|null $itemNeedReview Count of item that need review.
    */
    private ?int $itemNeedReview = null;
    
    /**
     * @var array<KeyValuePair>|null $productItemCounts Count of items per product, such as Exchange, SharePoint, OneDrive, and Teams.
    */
    private ?array $productItemCounts = null;
    
    /**
     * @var int|null $signedOffItemCount Count of items signed off by the administrator.
    */
    private ?int $signedOffItemCount = null;
    
    /**
     * @var int|null $totalItemSize Total item size in bytes.
    */
    private ?int $totalItemSize = null;
    
    /**
     * Instantiates a new subjectRightsRequestDetail and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
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
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the excludedItemCount property value. Count of items that are excluded from the request.
     * @return int|null
    */
    public function getExcludedItemCount(): ?int {
        return $this->excludedItemCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'excludedItemCount' => function (ParseNode $n) use ($o) { $o->setExcludedItemCount($n->getIntegerValue()); },
            'insightCounts' => function (ParseNode $n) use ($o) { $o->setInsightCounts($n->getCollectionOfObjectValues(array(KeyValuePair::class, 'createFromDiscriminatorValue'))); },
            'itemCount' => function (ParseNode $n) use ($o) { $o->setItemCount($n->getIntegerValue()); },
            'itemNeedReview' => function (ParseNode $n) use ($o) { $o->setItemNeedReview($n->getIntegerValue()); },
            'productItemCounts' => function (ParseNode $n) use ($o) { $o->setProductItemCounts($n->getCollectionOfObjectValues(array(KeyValuePair::class, 'createFromDiscriminatorValue'))); },
            'signedOffItemCount' => function (ParseNode $n) use ($o) { $o->setSignedOffItemCount($n->getIntegerValue()); },
            'totalItemSize' => function (ParseNode $n) use ($o) { $o->setTotalItemSize($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the insightCounts property value. Count of items per insight.
     * @return array<KeyValuePair>|null
    */
    public function getInsightCounts(): ?array {
        return $this->insightCounts;
    }

    /**
     * Gets the itemCount property value. Count of items found.
     * @return int|null
    */
    public function getItemCount(): ?int {
        return $this->itemCount;
    }

    /**
     * Gets the itemNeedReview property value. Count of item that need review.
     * @return int|null
    */
    public function getItemNeedReview(): ?int {
        return $this->itemNeedReview;
    }

    /**
     * Gets the productItemCounts property value. Count of items per product, such as Exchange, SharePoint, OneDrive, and Teams.
     * @return array<KeyValuePair>|null
    */
    public function getProductItemCounts(): ?array {
        return $this->productItemCounts;
    }

    /**
     * Gets the signedOffItemCount property value. Count of items signed off by the administrator.
     * @return int|null
    */
    public function getSignedOffItemCount(): ?int {
        return $this->signedOffItemCount;
    }

    /**
     * Gets the totalItemSize property value. Total item size in bytes.
     * @return int|null
    */
    public function getTotalItemSize(): ?int {
        return $this->totalItemSize;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('excludedItemCount', $this->excludedItemCount);
        $writer->writeCollectionOfObjectValues('insightCounts', $this->insightCounts);
        $writer->writeIntegerValue('itemCount', $this->itemCount);
        $writer->writeIntegerValue('itemNeedReview', $this->itemNeedReview);
        $writer->writeCollectionOfObjectValues('productItemCounts', $this->productItemCounts);
        $writer->writeIntegerValue('signedOffItemCount', $this->signedOffItemCount);
        $writer->writeIntegerValue('totalItemSize', $this->totalItemSize);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the excludedItemCount property value. Count of items that are excluded from the request.
     *  @param int|null $value Value to set for the excludedItemCount property.
    */
    public function setExcludedItemCount(?int $value ): void {
        $this->excludedItemCount = $value;
    }

    /**
     * Sets the insightCounts property value. Count of items per insight.
     *  @param array<KeyValuePair>|null $value Value to set for the insightCounts property.
    */
    public function setInsightCounts(?array $value ): void {
        $this->insightCounts = $value;
    }

    /**
     * Sets the itemCount property value. Count of items found.
     *  @param int|null $value Value to set for the itemCount property.
    */
    public function setItemCount(?int $value ): void {
        $this->itemCount = $value;
    }

    /**
     * Sets the itemNeedReview property value. Count of item that need review.
     *  @param int|null $value Value to set for the itemNeedReview property.
    */
    public function setItemNeedReview(?int $value ): void {
        $this->itemNeedReview = $value;
    }

    /**
     * Sets the productItemCounts property value. Count of items per product, such as Exchange, SharePoint, OneDrive, and Teams.
     *  @param array<KeyValuePair>|null $value Value to set for the productItemCounts property.
    */
    public function setProductItemCounts(?array $value ): void {
        $this->productItemCounts = $value;
    }

    /**
     * Sets the signedOffItemCount property value. Count of items signed off by the administrator.
     *  @param int|null $value Value to set for the signedOffItemCount property.
    */
    public function setSignedOffItemCount(?int $value ): void {
        $this->signedOffItemCount = $value;
    }

    /**
     * Sets the totalItemSize property value. Total item size in bytes.
     *  @param int|null $value Value to set for the totalItemSize property.
    */
    public function setTotalItemSize(?int $value ): void {
        $this->totalItemSize = $value;
    }

}
