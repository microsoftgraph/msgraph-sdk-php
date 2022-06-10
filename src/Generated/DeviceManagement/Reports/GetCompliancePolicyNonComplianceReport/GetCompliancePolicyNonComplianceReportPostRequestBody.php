<?php

namespace Microsoft\Graph\DeviceManagement\Reports\GetCompliancePolicyNonComplianceReport;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetCompliancePolicyNonComplianceReportPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $filter The filter property
    */
    private ?string $filter = null;
    
    /**
     * @var array<string>|null $groupBy The groupBy property
    */
    private ?array $groupBy = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var array<string>|null $orderBy The orderBy property
    */
    private ?array $orderBy = null;
    
    /**
     * @var string|null $search The search property
    */
    private ?string $search = null;
    
    /**
     * @var array<string>|null $select The select property
    */
    private ?array $select = null;
    
    /**
     * @var string|null $sessionId The sessionId property
    */
    private ?string $sessionId = null;
    
    /**
     * @var int|null $skip The skip property
    */
    private ?int $skip = null;
    
    /**
     * @var int|null $top The top property
    */
    private ?int $top = null;
    
    /**
     * Instantiates a new getCompliancePolicyNonComplianceReportPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetCompliancePolicyNonComplianceReportPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetCompliancePolicyNonComplianceReportPostRequestBody {
        return new GetCompliancePolicyNonComplianceReportPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'filter' => function (ParseNode $n) use ($o) { $o->setFilter($n->getStringValue()); },
            'groupBy' => function (ParseNode $n) use ($o) { $o->setGroupBy($n->getCollectionOfPrimitiveValues()); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'orderBy' => function (ParseNode $n) use ($o) { $o->setOrderBy($n->getCollectionOfPrimitiveValues()); },
            'search' => function (ParseNode $n) use ($o) { $o->setSearch($n->getStringValue()); },
            'select' => function (ParseNode $n) use ($o) { $o->setSelect($n->getCollectionOfPrimitiveValues()); },
            'sessionId' => function (ParseNode $n) use ($o) { $o->setSessionId($n->getStringValue()); },
            'skip' => function (ParseNode $n) use ($o) { $o->setSkip($n->getIntegerValue()); },
            'top' => function (ParseNode $n) use ($o) { $o->setTop($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the filter property value. The filter property
     * @return string|null
    */
    public function getFilter(): ?string {
        return $this->filter;
    }

    /**
     * Gets the groupBy property value. The groupBy property
     * @return array<string>|null
    */
    public function getGroupBy(): ?array {
        return $this->groupBy;
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the orderBy property value. The orderBy property
     * @return array<string>|null
    */
    public function getOrderBy(): ?array {
        return $this->orderBy;
    }

    /**
     * Gets the search property value. The search property
     * @return string|null
    */
    public function getSearch(): ?string {
        return $this->search;
    }

    /**
     * Gets the select property value. The select property
     * @return array<string>|null
    */
    public function getSelect(): ?array {
        return $this->select;
    }

    /**
     * Gets the sessionId property value. The sessionId property
     * @return string|null
    */
    public function getSessionId(): ?string {
        return $this->sessionId;
    }

    /**
     * Gets the skip property value. The skip property
     * @return int|null
    */
    public function getSkip(): ?int {
        return $this->skip;
    }

    /**
     * Gets the top property value. The top property
     * @return int|null
    */
    public function getTop(): ?int {
        return $this->top;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('filter', $this->filter);
        $writer->writeCollectionOfPrimitiveValues('groupBy', $this->groupBy);
        $writer->writeStringValue('name', $this->name);
        $writer->writeCollectionOfPrimitiveValues('orderBy', $this->orderBy);
        $writer->writeStringValue('search', $this->search);
        $writer->writeCollectionOfPrimitiveValues('select', $this->select);
        $writer->writeStringValue('sessionId', $this->sessionId);
        $writer->writeIntegerValue('skip', $this->skip);
        $writer->writeIntegerValue('top', $this->top);
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
     * Sets the filter property value. The filter property
     *  @param string|null $value Value to set for the filter property.
    */
    public function setFilter(?string $value ): void {
        $this->filter = $value;
    }

    /**
     * Sets the groupBy property value. The groupBy property
     *  @param array<string>|null $value Value to set for the groupBy property.
    */
    public function setGroupBy(?array $value ): void {
        $this->groupBy = $value;
    }

    /**
     * Sets the name property value. The name property
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the orderBy property value. The orderBy property
     *  @param array<string>|null $value Value to set for the orderBy property.
    */
    public function setOrderBy(?array $value ): void {
        $this->orderBy = $value;
    }

    /**
     * Sets the search property value. The search property
     *  @param string|null $value Value to set for the search property.
    */
    public function setSearch(?string $value ): void {
        $this->search = $value;
    }

    /**
     * Sets the select property value. The select property
     *  @param array<string>|null $value Value to set for the select property.
    */
    public function setSelect(?array $value ): void {
        $this->select = $value;
    }

    /**
     * Sets the sessionId property value. The sessionId property
     *  @param string|null $value Value to set for the sessionId property.
    */
    public function setSessionId(?string $value ): void {
        $this->sessionId = $value;
    }

    /**
     * Sets the skip property value. The skip property
     *  @param int|null $value Value to set for the skip property.
    */
    public function setSkip(?int $value ): void {
        $this->skip = $value;
    }

    /**
     * Sets the top property value. The top property
     *  @param int|null $value Value to set for the top property.
    */
    public function setTop(?int $value ): void {
        $this->top = $value;
    }

}
