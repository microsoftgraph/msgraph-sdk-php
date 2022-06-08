<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ThreatAssessmentRequest extends Entity implements Parsable 
{
    /**
     * @var ThreatCategory|null $category The threat category. Possible values are: spam, phishing, malware.
    */
    private ?ThreatCategory $category = null;
    
    /**
     * @var ThreatAssessmentContentType|null $contentType The content type of threat assessment. Possible values are: mail, url, file.
    */
    private ?ThreatAssessmentContentType $contentType = null;
    
    /**
     * @var IdentitySet|null $createdBy The threat assessment request creator.
    */
    private ?IdentitySet $createdBy = null;
    
    /**
     * @var DateTime|null $createdDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var ThreatExpectedAssessment|null $expectedAssessment The expected assessment from submitter. Possible values are: block, unblock.
    */
    private ?ThreatExpectedAssessment $expectedAssessment = null;
    
    /**
     * @var ThreatAssessmentRequestSource|null $requestSource The source of the threat assessment request. Possible values are: user, administrator.
    */
    private ?ThreatAssessmentRequestSource $requestSource = null;
    
    /**
     * @var array<ThreatAssessmentResult>|null $results A collection of threat assessment results. Read-only. By default, a GET /threatAssessmentRequests/{id} does not return this property unless you apply $expand on it.
    */
    private ?array $results = null;
    
    /**
     * @var ThreatAssessmentStatus|null $status The assessment process status. Possible values are: pending, completed.
    */
    private ?ThreatAssessmentStatus $status = null;
    
    /**
     * Instantiates a new threatAssessmentRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ThreatAssessmentRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ThreatAssessmentRequest {
        $mappingValueNode = ParseNode::getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.threatAssessmentRequest': return new ThreatAssessmentRequest();
            }
        }
        return new ThreatAssessmentRequest();
    }

    /**
     * Gets the category property value. The threat category. Possible values are: spam, phishing, malware.
     * @return ThreatCategory|null
    */
    public function getCategory(): ?ThreatCategory {
        return $this->category;
    }

    /**
     * Gets the contentType property value. The content type of threat assessment. Possible values are: mail, url, file.
     * @return ThreatAssessmentContentType|null
    */
    public function getContentType(): ?ThreatAssessmentContentType {
        return $this->contentType;
    }

    /**
     * Gets the createdBy property value. The threat assessment request creator.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        return $this->createdBy;
    }

    /**
     * Gets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the expectedAssessment property value. The expected assessment from submitter. Possible values are: block, unblock.
     * @return ThreatExpectedAssessment|null
    */
    public function getExpectedAssessment(): ?ThreatExpectedAssessment {
        return $this->expectedAssessment;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'category' => function (ParseNode $n) use ($o) { $o->setCategory($n->getEnumValue(ThreatCategory::class)); },
            'contentType' => function (ParseNode $n) use ($o) { $o->setContentType($n->getEnumValue(ThreatAssessmentContentType::class)); },
            'createdBy' => function (ParseNode $n) use ($o) { $o->setCreatedBy($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'expectedAssessment' => function (ParseNode $n) use ($o) { $o->setExpectedAssessment($n->getEnumValue(ThreatExpectedAssessment::class)); },
            'requestSource' => function (ParseNode $n) use ($o) { $o->setRequestSource($n->getEnumValue(ThreatAssessmentRequestSource::class)); },
            'results' => function (ParseNode $n) use ($o) { $o->setResults($n->getCollectionOfObjectValues(array(ThreatAssessmentResult::class, 'createFromDiscriminatorValue'))); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(ThreatAssessmentStatus::class)); },
        ]);
    }

    /**
     * Gets the requestSource property value. The source of the threat assessment request. Possible values are: user, administrator.
     * @return ThreatAssessmentRequestSource|null
    */
    public function getRequestSource(): ?ThreatAssessmentRequestSource {
        return $this->requestSource;
    }

    /**
     * Gets the results property value. A collection of threat assessment results. Read-only. By default, a GET /threatAssessmentRequests/{id} does not return this property unless you apply $expand on it.
     * @return array<ThreatAssessmentResult>|null
    */
    public function getResults(): ?array {
        return $this->results;
    }

    /**
     * Gets the status property value. The assessment process status. Possible values are: pending, completed.
     * @return ThreatAssessmentStatus|null
    */
    public function getStatus(): ?ThreatAssessmentStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('category', $this->category);
        $writer->writeEnumValue('contentType', $this->contentType);
        $writer->writeObjectValue('createdBy', $this->createdBy);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeEnumValue('expectedAssessment', $this->expectedAssessment);
        $writer->writeEnumValue('requestSource', $this->requestSource);
        $writer->writeCollectionOfObjectValues('results', $this->results);
        $writer->writeEnumValue('status', $this->status);
    }

    /**
     * Sets the category property value. The threat category. Possible values are: spam, phishing, malware.
     *  @param ThreatCategory|null $value Value to set for the category property.
    */
    public function setCategory(?ThreatCategory $value ): void {
        $this->category = $value;
    }

    /**
     * Sets the contentType property value. The content type of threat assessment. Possible values are: mail, url, file.
     *  @param ThreatAssessmentContentType|null $value Value to set for the contentType property.
    */
    public function setContentType(?ThreatAssessmentContentType $value ): void {
        $this->contentType = $value;
    }

    /**
     * Sets the createdBy property value. The threat assessment request creator.
     *  @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the expectedAssessment property value. The expected assessment from submitter. Possible values are: block, unblock.
     *  @param ThreatExpectedAssessment|null $value Value to set for the expectedAssessment property.
    */
    public function setExpectedAssessment(?ThreatExpectedAssessment $value ): void {
        $this->expectedAssessment = $value;
    }

    /**
     * Sets the requestSource property value. The source of the threat assessment request. Possible values are: user, administrator.
     *  @param ThreatAssessmentRequestSource|null $value Value to set for the requestSource property.
    */
    public function setRequestSource(?ThreatAssessmentRequestSource $value ): void {
        $this->requestSource = $value;
    }

    /**
     * Sets the results property value. A collection of threat assessment results. Read-only. By default, a GET /threatAssessmentRequests/{id} does not return this property unless you apply $expand on it.
     *  @param array<ThreatAssessmentResult>|null $value Value to set for the results property.
    */
    public function setResults(?array $value ): void {
        $this->results = $value;
    }

    /**
     * Sets the status property value. The assessment process status. Possible values are: pending, completed.
     *  @param ThreatAssessmentStatus|null $value Value to set for the status property.
    */
    public function setStatus(?ThreatAssessmentStatus $value ): void {
        $this->status = $value;
    }

}
