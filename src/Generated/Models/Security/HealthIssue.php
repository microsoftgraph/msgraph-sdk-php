<?php

namespace Microsoft\\Graph\\Generated\Models\Security;

use DateTime;
use Microsoft\\Graph\\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class HealthIssue extends Entity implements Parsable 
{
    /**
     * Instantiates a new HealthIssue and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HealthIssue
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HealthIssue {
        return new HealthIssue();
    }

    /**
     * Gets the additionalInformation property value. Contains additional information about the issue, such as a list of items to fix.
     * @return array<string>|null
    */
    public function getAdditionalInformation(): ?array {
        $val = $this->getBackingStore()->get('additionalInformation');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalInformation'");
    }

    /**
     * Gets the createdDateTime property value. The date and time when the health issue was generated. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the description property value. Contains more detailed information about the health issue.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The display name of the health issue.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the domainNames property value. A list of the fully qualified domain names of the domains or the sensors the health issue is related to.
     * @return array<string>|null
    */
    public function getDomainNames(): ?array {
        $val = $this->getBackingStore()->get('domainNames');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'domainNames'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'additionalInformation' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAdditionalInformation($val);
            },
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'domainNames' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDomainNames($val);
            },
            'healthIssueType' => fn(ParseNode $n) => $o->setHealthIssueType($n->getEnumValue(HealthIssueType::class)),
            'issueTypeId' => fn(ParseNode $n) => $o->setIssueTypeId($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'recommendations' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRecommendations($val);
            },
            'recommendedActionCommands' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRecommendedActionCommands($val);
            },
            'sensorDNSNames' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSensorDNSNames($val);
            },
            'severity' => fn(ParseNode $n) => $o->setSeverity($n->getEnumValue(HealthIssueSeverity::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(HealthIssueStatus::class)),
        ]);
    }

    /**
     * Gets the healthIssueType property value. The type of the health issue. The possible values are: sensor, global, unknownFutureValue. For a list of all health issues and their identifiers, see Microsoft Defender for Identity health issues.
     * @return HealthIssueType|null
    */
    public function getHealthIssueType(): ?HealthIssueType {
        $val = $this->getBackingStore()->get('healthIssueType');
        if (is_null($val) || $val instanceof HealthIssueType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'healthIssueType'");
    }

    /**
     * Gets the issueTypeId property value. The type identifier of the health issue. For a list of all health issues and their identifiers, see Microsoft Defender for Identity health issues.
     * @return string|null
    */
    public function getIssueTypeId(): ?string {
        $val = $this->getBackingStore()->get('issueTypeId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'issueTypeId'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time when the health issue was last updated. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the recommendations property value. A list of recommended actions that can be taken to resolve the issue effectively and efficiently. These actions might include instructions for further investigation and aren't limited to prewritten responses.
     * @return array<string>|null
    */
    public function getRecommendations(): ?array {
        $val = $this->getBackingStore()->get('recommendations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recommendations'");
    }

    /**
     * Gets the recommendedActionCommands property value. A list of commands from the PowerShell module for the product that can be used to resolve the issue, if available. If no commands can be used to solve the issue, this property is empty. The commands, if present, provide a quick and efficient way to address the issue. These commands run in sequence for the single recommended fix.
     * @return array<string>|null
    */
    public function getRecommendedActionCommands(): ?array {
        $val = $this->getBackingStore()->get('recommendedActionCommands');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recommendedActionCommands'");
    }

    /**
     * Gets the sensorDNSNames property value. A list of the DNS names of the sensors the health issue is related to.
     * @return array<string>|null
    */
    public function getSensorDNSNames(): ?array {
        $val = $this->getBackingStore()->get('sensorDNSNames');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sensorDNSNames'");
    }

    /**
     * Gets the severity property value. The severity of the health issue. The possible values are: low, medium, high, unknownFutureValue.
     * @return HealthIssueSeverity|null
    */
    public function getSeverity(): ?HealthIssueSeverity {
        $val = $this->getBackingStore()->get('severity');
        if (is_null($val) || $val instanceof HealthIssueSeverity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'severity'");
    }

    /**
     * Gets the status property value. The status of the health issue. The possible values are: open, closed, suppressed, unknownFutureValue.
     * @return HealthIssueStatus|null
    */
    public function getStatus(): ?HealthIssueStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof HealthIssueStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('additionalInformation', $this->getAdditionalInformation());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfPrimitiveValues('domainNames', $this->getDomainNames());
        $writer->writeEnumValue('healthIssueType', $this->getHealthIssueType());
        $writer->writeStringValue('issueTypeId', $this->getIssueTypeId());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeCollectionOfPrimitiveValues('recommendations', $this->getRecommendations());
        $writer->writeCollectionOfPrimitiveValues('recommendedActionCommands', $this->getRecommendedActionCommands());
        $writer->writeCollectionOfPrimitiveValues('sensorDNSNames', $this->getSensorDNSNames());
        $writer->writeEnumValue('severity', $this->getSeverity());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the additionalInformation property value. Contains additional information about the issue, such as a list of items to fix.
     * @param array<string>|null $value Value to set for the additionalInformation property.
    */
    public function setAdditionalInformation(?array $value): void {
        $this->getBackingStore()->set('additionalInformation', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time when the health issue was generated. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. Contains more detailed information about the health issue.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display name of the health issue.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the domainNames property value. A list of the fully qualified domain names of the domains or the sensors the health issue is related to.
     * @param array<string>|null $value Value to set for the domainNames property.
    */
    public function setDomainNames(?array $value): void {
        $this->getBackingStore()->set('domainNames', $value);
    }

    /**
     * Sets the healthIssueType property value. The type of the health issue. The possible values are: sensor, global, unknownFutureValue. For a list of all health issues and their identifiers, see Microsoft Defender for Identity health issues.
     * @param HealthIssueType|null $value Value to set for the healthIssueType property.
    */
    public function setHealthIssueType(?HealthIssueType $value): void {
        $this->getBackingStore()->set('healthIssueType', $value);
    }

    /**
     * Sets the issueTypeId property value. The type identifier of the health issue. For a list of all health issues and their identifiers, see Microsoft Defender for Identity health issues.
     * @param string|null $value Value to set for the issueTypeId property.
    */
    public function setIssueTypeId(?string $value): void {
        $this->getBackingStore()->set('issueTypeId', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time when the health issue was last updated. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the recommendations property value. A list of recommended actions that can be taken to resolve the issue effectively and efficiently. These actions might include instructions for further investigation and aren't limited to prewritten responses.
     * @param array<string>|null $value Value to set for the recommendations property.
    */
    public function setRecommendations(?array $value): void {
        $this->getBackingStore()->set('recommendations', $value);
    }

    /**
     * Sets the recommendedActionCommands property value. A list of commands from the PowerShell module for the product that can be used to resolve the issue, if available. If no commands can be used to solve the issue, this property is empty. The commands, if present, provide a quick and efficient way to address the issue. These commands run in sequence for the single recommended fix.
     * @param array<string>|null $value Value to set for the recommendedActionCommands property.
    */
    public function setRecommendedActionCommands(?array $value): void {
        $this->getBackingStore()->set('recommendedActionCommands', $value);
    }

    /**
     * Sets the sensorDNSNames property value. A list of the DNS names of the sensors the health issue is related to.
     * @param array<string>|null $value Value to set for the sensorDNSNames property.
    */
    public function setSensorDNSNames(?array $value): void {
        $this->getBackingStore()->set('sensorDNSNames', $value);
    }

    /**
     * Sets the severity property value. The severity of the health issue. The possible values are: low, medium, high, unknownFutureValue.
     * @param HealthIssueSeverity|null $value Value to set for the severity property.
    */
    public function setSeverity(?HealthIssueSeverity $value): void {
        $this->getBackingStore()->set('severity', $value);
    }

    /**
     * Sets the status property value. The status of the health issue. The possible values are: open, closed, suppressed, unknownFutureValue.
     * @param HealthIssueStatus|null $value Value to set for the status property.
    */
    public function setStatus(?HealthIssueStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
